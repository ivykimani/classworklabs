<?php
require 'sql.php';// Include the database connection file

if(isset($_POST["submit_student"])) {
    $fname = trim($_POST["firstName"]);
    $lname = trim($_POST["lastName"]);
    $dob = trim($_POST["dob"]);
    $gender = trim($_POST["gender"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $grade = trim($_POST["gradeLevel"]);
    $studentId = trim($_POST["studentId"]);
    $address = trim($_POST["address"]);
    $admno = trim($_POST["admno"]);

    $query = "SELECT * FROM tbl_students WHERE admno = ? OR email = ?";
    $stmt1 = $conn->prepare($query);
    $stmt1->bind_param("ss", $admno, $email);
    $stmt1->execute();
    $stmt1->store_result();
    if($stmt1->num_rows > 0) {
        echo "<script>alert('Student with this Admission Number or Email already exists.');</script>";
        $stmt1->close();
        $conn->close();
        exit();
    }
    $stmt1->close();


    $sql = "INSERT INTO tbl_students (firstname, lastname, dob, gender, email, phone, grade, studentId, address, admno) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);// Prepare the SQL statement to prevent SQL injection
    $stmt->bind_param("ssssssssss", $fname, $lname, $dob, $gender, $email, $phone, $grade, $studentId, $address, $admno);

    if($stmt->execute()) {
        echo "<script>alert('Student registered successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
    $stmt->close();
    $conn->close();

    //$stmt->execute();
    //$stmt->close();    
}
?>
