<!-- This file handles the student dashboard logic for the Mwalimu System -->
<?php
if(!isset($_SESSION['id'])){
    header("Location: ../php/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Mwalimu System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h1>Welcome to the Student Dashboard</h1>
    <p>This is where students can view their courses, assignments, and other relevant information.</p>
    <section>
        <h2>My Courses</h2>
        <p>List of enrolled courses will be displayed here.</p>
    </section>
    <section>
        <h2>My Assignments</h2>
        <p>List of assignments will be displayed here.</p>
    </section>
    <section>
        <h2>My Grades</h2>
        <p>Grades for completed assignments and courses will be displayed here.</p>
    </section>
    <section>
        <h2>My Profile</h2>
        <p>Student profile information will be displayed here.</p>
    </section>
    <section>
        <h2>Notifications</h2>
        <p>Recent notifications for the student will be displayed here.</p>
    </section>
</body>
</html>