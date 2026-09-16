<?php
// Initialize variables
$fname = '';
$lname = '';
$gender = '';
$email = '';
$dob = '';
$hobbies = array();
$course = '';
$form_submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_submitted = true;
    
    // Sanitize text fields, falling back to empty strings if missing
    $fname  = trim($_POST['fname'] ?? '');
    $lname  = trim($_POST['lname'] ?? '');
    $gender = trim($_POST['gender'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $dob    = trim($_POST['dob'] ?? '');
    $course = trim($_POST['course'] ?? '');
    
    // Ensure hobbies is an array
    $hobbies = isset($_POST['hobbies']) && is_array($_POST['hobbies']) ? $_POST['hobbies'] : array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .data-container {
            max-width: 450px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
            color: #555;
        }
        strong {
            color: #000;
        }
        .error-msg {
            color: #dc3545;
            text-align: center;
        }
        .back-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="data-container">
        <?php if ($form_submitted): ?>
            <h2>Submitted Student Data</h2>
            <p><strong>First Name:</strong> <?php echo htmlspecialchars($fname); ?></p>
            <p><strong>Last Name:</strong> <?php echo htmlspecialchars($lname); ?></p>
            <p><strong>Gender:</strong> <?php echo htmlspecialchars(ucfirst($gender)); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($dob); ?></p>
            <p><strong>Hobbies:</strong> <?php echo htmlspecialchars(implode(', ', array_map('ucfirst', $hobbies))); ?></p>
            <p><strong>Course:</strong> <?php echo htmlspecialchars(strtoupper($course)); ?></p>
            <a href="javascript:history.back()" class="back-btn">Go Back</a>
        <?php else: ?>
            <h2 class="error-msg">No Data Submitted</h2>
            <p class="error-msg">Please submit the student form to view this page.</p>
        <?php endif; ?>
    </div>

</body>
</html>
