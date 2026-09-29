<?php
// Reuse the shared database connection and fetch the records for the list below.
require __DIR__ . '/../Include/sql.php';

$result = $conn->query(
    "SELECT firstname, lastname, dob, gender, email, phone, grade, studentId, address
     FROM tbl_students
     ORDER BY id DESC"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #2d3748;
        }

        h1 {
            color: #1a365d;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1100px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #cbd5e0;
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #edf2f7;
        }

        tr:nth-child(even) {
            background-color: #f7fafc;
        }
    </style>
</head>
<body>
    <h1>Registered Students</h1>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Grade</th>
                    <th>Student ID</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <!-- fetch_assoc() returns one database row at a time as an associative array. -->
                <?php while ($student = $result->fetch_assoc()): ?>
                    <tr>
                        <!-- Escape database values before rendering them as HTML text. -->
                        <td><?php echo htmlspecialchars($student['firstname']); ?></td>
                        <td><?php echo htmlspecialchars($student['lastname']); ?></td>
                        <td><?php echo htmlspecialchars($student['dob']); ?></td>
                        <td><?php echo htmlspecialchars($student['gender']); ?></td>
                        <td><?php echo htmlspecialchars($student['email']); ?></td>
                        <td><?php echo htmlspecialchars($student['phone']); ?></td>
                        <td><?php echo htmlspecialchars($student['grade']); ?></td>
                        <td><?php echo htmlspecialchars($student['studentId']); ?></td>
                        <td><?php echo htmlspecialchars($student['address']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
$result->free();
$conn->close();
?>
