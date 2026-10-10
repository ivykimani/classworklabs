<?php
session_start();

$formUrl = '../php/student_registration%20%282%29.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $formUrl, true, 303);
    exit();
}

unset($_SESSION['registration']);

$fields = [
    'firstName' => 'First Name',
    'lastName' => 'Last Name',
    'dob' => 'Date of Birth',
    'gender' => 'Gender',
    'email' => 'Email Address',
    'phone' => 'Phone Number',
    'gradeLevel' => 'Grade/Class Level',
    'studentId' => 'Student Number',
    'address' => 'Residential Address',
];
$values = [];
$errors = [];

foreach ($fields as $field => $label) {
    $values[$field] = isset($_POST[$field]) && is_string($_POST[$field])
        ? trim($_POST[$field]) : '';
    if ($values[$field] === '') {
        $errors[$field] = $label . ' is required.';
    }
}

$studentPassword = isset($_POST['password']) && is_string($_POST['password'])
    ? $_POST['password'] : '';
$confirmPassword = isset($_POST['confirmPassword']) && is_string($_POST['confirmPassword'])
    ? $_POST['confirmPassword'] : '';

if ($studentPassword === '') {
    $errors['password'] = 'Password is required.';
}
if ($confirmPassword === '') {
    $errors['confirmPassword'] = 'Confirm Password is required.';
} elseif ($studentPassword !== $confirmPassword) {
    $errors['confirmPassword'] = 'Passwords do not match. Please re-enter both passwords.';
}

if ($values['email'] !== '' && !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Enter a valid Email Address.';
}
if ($values['dob'] !== '') {
    $date = DateTimeImmutable::createFromFormat('!Y-m-d', $values['dob']);
    if (!$date || $date->format('Y-m-d') !== $values['dob']) {
        $errors['dob'] = 'Enter a valid Date of Birth.';
    }
}
if ($values['gender'] !== '' && !in_array($values['gender'], ['male', 'female'], true)) {
    $errors['gender'] = 'Select a valid Gender.';
}
if ($values['gradeLevel'] !== '' && !in_array($values['gradeLevel'], ['grade-9', 'grade-10', 'grade-11', 'grade-12'], true)) {
    $errors['gradeLevel'] = 'Select a valid Grade/Class Level.';
}

if (!$errors) {
    $conn = null;
    $duplicateStatement = null;
    $insertStatement = null;

    try {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        require __DIR__ . '/sql.php';

        if (!($conn instanceof mysqli)) {
            throw new mysqli_sql_exception('Database connection was not initialized.');
        }

        $duplicateStatement = $conn->prepare('SELECT id FROM tbl_students WHERE studentId = ?');
        $duplicateStatement->bind_param('s', $values['studentId']);
        $duplicateStatement->execute();
        $duplicateStatement->store_result();

        if ($duplicateStatement->num_rows > 0) {
            $errors['studentId'] = 'A student with this Student Number already exists.';
        } else {
            $passwordHash = password_hash($studentPassword, PASSWORD_DEFAULT);
            $insertStatement = $conn->prepare(
                'INSERT INTO tbl_students (firstname, lastname, dob, gender, email, phone, grade, studentId, address, password)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
            );
            $insertStatement->bind_param(
                'ssssssssss',
                $values['firstName'], $values['lastName'], $values['dob'],
                $values['gender'], $values['email'], $values['phone'],
                $values['gradeLevel'], $values['studentId'], $values['address'], $passwordHash
            );
            $insertStatement->execute();
            $_SESSION['registration'] = ['success' => 'Student registered successfully.'];
        }
    } catch (mysqli_sql_exception $exception) {
        error_log('Student registration failed: ' . $exception->getMessage());
        $errors['database'] = 'Unable to save the student. Please try again later.';
    } finally {
        if ($duplicateStatement !== null) {
            $duplicateStatement->close();
        }
        if ($insertStatement !== null) {
            $insertStatement->close();
        }
        if ($conn !== null) {
            $conn->close();
        }
    }
}

if ($errors) {
    $_SESSION['registration'] = ['errors' => $errors, 'values' => $values];
}

header('Location: ' . $formUrl, true, 303);
exit();


