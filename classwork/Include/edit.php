<?php

require('sql.php');

if(isset($_POST['edit_student'])){

 $fname = trim($_POST['firstName']);
 $lname = trim($_POST['lastName']);
 $dob = trim($_POST['dob']);
 $gender = trim($_POST['gender']);
 //$email = trim($_POST['email']);
 $phone = trim($_POST['phone']);
 $grade = trim($_POST['gradeLevel']);
 // $adm = trim($_POST['adm']);
 $address = trim($_POST['address']);
 $password = trim($_POST['password']);
 $confirmPassword = trim($_POST['confirmPassword']);

 // Check that the password and confirmation match.
 if($password !== $confirmPassword) {
     echo "<script>alert('Passwords do not match.');</script>";
     $conn->close();
     exit();
 }

 $id = $_POST['id'];

 $sql = "UPDATE tbl_students SET fname = ?, lname = ?, dob = ?, gender = ?, phone = ?, grade = ?, address = ?, password = ? WHERE id = ?";

 $stmt = $conn->prepare($sql);

 $stmt->bind_param("sssssssssi", $fname, $lname, $dob, $gender, $phone, $grade, $address, $password, $id);

 if($stmt->execute()){
 echo "<script>alert('Student data updated successfully!');</script>";
 echo "<script>window.location.href='../student_view.php';</script>";
 } else {
   echo "<script>alert('Failed to update student data.');</script>";
   echo "<script>window.location.href='../student_view.php';</script>";
 }

}