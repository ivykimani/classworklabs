// This file handles the user login logic for the Mwalimu System
<?php

require_once 'sql.php';

if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $pass = trim($_POST['pass']);
}

//Add validation
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$sql_query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql_query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 1){
    $row = $result->fetch_assoc();

    if(password_verify($pass, $row['pass'])){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['user_id'] = $row['id'];

        if($row['role'] === 'student'){
            header("Location: ../php/student_dashboard.php");
        }else if($row['role'] === 'teacher'){
            header("Location: ../teachers/dashboard.php");
        }elseif($row['role'] === 'admin'){
            header("Location: ../admin/dashboard.php");
        }
    } else {
        echo "Invalid username or password!";
    }
} else {
    echo "User not found!";
}

$stmt->close();
$conn->close();
?>
