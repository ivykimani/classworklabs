<?php
require __DIR__ . '/../Include/sql.php';

$selectedId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_student'])) {
    $deleteId = filter_input(INPUT_POST, 'student_id', FILTER_VALIDATE_INT);

    if ($deleteId) {
        $statement = $conn->prepare('DELETE FROM tbl_students WHERE id = ?');
        $statement->bind_param('i', $deleteId);
        $statement->execute();
        $statement->close();
    }

    header('Location: student_view.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Student Directory</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
 
        body {
            background-color: #f4f6f9;
            color: #333333;
            padding: 20px;
        }
 
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
 
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e0e0e0;
        }
 
        .page-header h2 {
            color: #2c3e50;
            font-size: 24px;
        }
 
        .btn-add {
            background-color: #27ae60;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            font-size: 14px;
        }
 
        .btn-add:hover {
            background-color: #219150;
        }
 
        .table-responsive {
            overflow-x: auto;
        }
 
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }
 
        th, td {
            padding: 12px 10px;
            text-align: left;
            border: 1px solid #dddddd;
        }
 
        th {
            background-color: #34495e;
            color: #ffffff;
            font-weight: bold;
        }
 
        /* Zebra striping for table rows */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
 
        tr:hover {
            background-color: #f1f5f9;
        }
 
        .btn-action {
            padding: 6px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 12px;
            margin-right: 4px;
            text-decoration: none;
            display: inline-block;
        }
 
        .btn-view {
            background-color: #3498db;
            color: white;
        }
 
        .btn-view:hover {
            background-color: #2980b9;
        }
 
        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }
 
        .btn-delete:hover {
            background-color: #c0392b;
        }
 
        .badge-gender {
            text-transform: capitalize;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
 
        .male {
            background-color: #e3f2fd;
            color: #1976d2;
        }
 
        .female {
            background-color: #fce4ec;
            color: #c2185b;
        }
    </style>
</head>
<body>
 
    <div class="container">
        <div class="page-header">
            <div>
                <h2><?php echo $selectedId ? 'Student Record' : 'Registered Student Directory'; ?></h2>
            </div>
            <?php if ($selectedId): ?>
                <a href="student_view.php" class="btn-add">Back to Directory</a>
            <?php else: ?>
                <a href="student_registration%20(2).php" class="btn-add">+ Register New Student</a>
            <?php endif; ?>
        </div>
 
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Grade Level</th>
                        <th>Residential Address</th>
                        <th>Admission Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                if ($selectedId) {
                    $statement = $conn->prepare(
                        'SELECT id, firstname, lastname, dob, gender, email, phone, grade, studentId, address, admno
                         FROM tbl_students
                         WHERE id = ?'
                    );
                    $statement->bind_param('i', $selectedId);
                    $statement->execute();
                    $result = $statement->get_result();
                } else {
                    $result = $conn->query(
                        'SELECT id, firstname, lastname, dob, gender, email, phone, grade, studentId, address, admno
                         FROM tbl_students
                         ORDER BY id DESC'
                    );
                }
                ?>
                <?php if (!$result): ?>
                    <tr><td colspan="12">Database query failed: <?php echo htmlspecialchars($conn->error); ?></td></tr>
                <?php elseif ($result->num_rows === 0): ?>
                    <tr><td colspan="12">No records found.</td></tr>
                <?php else: ?>
                    <?php while ($student = $result->fetch_assoc()): ?>
                        <tr>
                            <td><strong><?php echo htmlspecialchars($student['studentId']); ?></strong></td>
                            <td><?php echo htmlspecialchars($student['firstname']); ?></td>
                            <td><?php echo htmlspecialchars($student['lastname']); ?></td>
                            <td><?php echo htmlspecialchars($student['dob']); ?></td>
                            <td><span class="badge-gender <?php echo htmlspecialchars(strtolower($student['gender'])); ?>"><?php echo htmlspecialchars($student['gender']); ?></span></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['phone']); ?></td>
                            <td><?php echo htmlspecialchars($student['grade']); ?></td>
                            <td><?php echo htmlspecialchars($student['address']); ?></td>
                            <td><?php echo htmlspecialchars($student['admno']); ?></td>
                            <td>
                                <?php if (!$selectedId): ?>
                                    <a class="btn-action btn-view" href="student_view.php?id=<?php echo (int) $student['id']; ?>">View</a>
                                    <a class="btn-action btn-edit" href="student_edit.php?id=<?php echo (int) $student['id']; ?>">Edit</a>
                                <?php endif; ?>
                                <form method="POST" action="student_view.php" style="display: inline;" onsubmit="return confirm('Delete this student record?');">
                                    <input type="hidden" name="student_id" value="<?php echo (int) $student['id']; ?>">
                                    <button class="btn-action btn-delete" type="submit" name="delete_student">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
 
</body>
</html>

