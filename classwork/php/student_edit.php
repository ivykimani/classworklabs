<?php
// Reuse the shared connection to the my_school_manager database.
require __DIR__ . '/../Include/sql.php';

// The directory sends the record ID in the URL; the edit form returns it in POST data.
$studentId = filter_input(
    ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST' ? INPUT_POST : INPUT_GET,
    'id',
    FILTER_VALIDATE_INT
);
$error = '';

if (!$studentId && isset($_POST['student_id'])) {
    // Read the hidden form field when the edit form is submitted.
    $studentId = filter_var($_POST['student_id'], FILTER_VALIDATE_INT);
}

// Process the update only when the Save Changes button submits the form.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_student'])) {
    // Trim text inputs, then validate required values before accessing the database.
    $firstName = trim($_POST['firstname'] ?? '');
    $lastName = trim($_POST['lastname'] ?? '');
    $dob = trim($_POST['dob'] ?? '');
    $gender = trim($_POST['gender'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $grade = trim($_POST['grade'] ?? '');
    $studentCode = trim($_POST['studentId'] ?? '');
    $address = trim($_POST['address'] ?? '');

    if (!$studentId) {
        http_response_code(400);
        exit('A valid student ID is required.');
    }

    if ($firstName === '' || $lastName === '' || $dob === '' || $gender === '' ||
        $email === '' || $phone === '' || $grade === '' || $studentCode === '' ||
        $address === '') {
        $error = 'Please complete all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // Exclude this row while checking that identifiers belong to no other student.
        $duplicateCheck = $conn->prepare(
            'SELECT id FROM tbl_students WHERE studentId = ? AND id <> ?'
        );
        $duplicateCheck->bind_param('si', $studentCode, $studentId);
        $duplicateCheck->execute();
        $duplicateCheck->store_result();

        if ($duplicateCheck->num_rows > 0) {
            $error = 'Another student already uses that Student Number.';
        }
        $duplicateCheck->close();

        if ($error === '') {
            // Update this student's row; placeholders and binding protect submitted values.
            $update = $conn->prepare(
                'UPDATE tbl_students
                 SET firstname = ?, lastname = ?, dob = ?, gender = ?, email = ?, phone = ?,
                     grade = ?, studentId = ?, address = ?
                 WHERE id = ?'
            );
            $update->bind_param(
                'sssssssssi',
                $firstName,
                $lastName,
                $dob,
                $gender,
                $email,
                $phone,
                $grade,
                $studentCode,
                $address,
                $studentId
            );

            if ($update->execute()) {
                $update->close();
                // Redirect after saving to avoid resubmitting the update on refresh.
                header('Location: student_view.php');
                exit;
            }

            $error = 'Could not update the student record.';
            $update->close();
        }
    }
}

if (!$studentId) {
    http_response_code(400);
    exit('A valid student ID is required.');
}

// Load current database values to prefill the form (or re-display submitted values on error).
$select = $conn->prepare(
    'SELECT firstname, lastname, dob, gender, email, phone, grade, studentId, address
     FROM tbl_students WHERE id = ?'
);
$select->bind_param('i', $studentId);
$select->execute();
$student = $select->get_result()->fetch_assoc();
$select->close();

if (!$student) {
    http_response_code(404);
    exit('Student record not found.');
}

function studentField(string $key, array $student): string
{
    // Escape a value before placing it into an HTML input or textarea.
    return htmlspecialchars($_POST[$key] ?? $student[$key], ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; margin: 24px; color: #333; }
        form { max-width: 680px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 14px; }
        label { display: grid; gap: 6px; }
        input, select, textarea, button { box-sizing: border-box; font: inherit; padding: 9px; }
        textarea { min-height: 80px; }
        .wide { grid-column: 1 / -1; }
        .error { color: #b42318; }
        .actions { display: flex; gap: 10px; align-items: center; }
        @media (max-width: 600px) { form { grid-template-columns: 1fr; } .wide { grid-column: auto; } }
    </style>
</head>
<body>
    <h1>Edit Student Record</h1>

    <?php if ($error !== ''): ?>
        <p class="error"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>

    <form method="POST" action="student_edit.php">
        <input type="hidden" name="student_id" value="<?php echo (int) $studentId; ?>">

        <label>First Name
            <input name="firstname" value="<?php echo studentField('firstname', $student); ?>" required>
        </label>
        <label>Last Name
            <input name="lastname" value="<?php echo studentField('lastname', $student); ?>" required>
        </label>
        <label>Date of Birth
            <input type="date" name="dob" value="<?php echo studentField('dob', $student); ?>" required>
        </label>
        <label>Gender
            <select name="gender" required>
                <?php foreach (['male' => 'Male', 'female' => 'Female', 'other' => 'Other'] as $value => $label): ?>
                    <option value="<?php echo $value; ?>" <?php echo strtolower(studentField('gender', $student)) === $value ? 'selected' : ''; ?>><?php echo $label; ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>Email
            <input type="email" name="email" value="<?php echo studentField('email', $student); ?>" required>
        </label>
        <label>Phone
            <input type="tel" name="phone" value="<?php echo studentField('phone', $student); ?>" required>
        </label>
        <label>Grade
            <input name="grade" value="<?php echo studentField('grade', $student); ?>" required>
        </label>
        <label>Student ID
            <input name="studentId" value="<?php echo studentField('studentId', $student); ?>" required>
        </label>
        <label class="wide">Address
            <textarea name="address" required><?php echo studentField('address', $student); ?></textarea>
        </label>
        <div class="actions wide">
            <button type="submit" name="update_student">Save Changes</button>
            <a href="student_view.php">Cancel</a>
        </div>
    </form>
</body>
</html>
<?php $conn->close(); ?>
