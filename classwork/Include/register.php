<?php
// Load the shared database connection, which creates the $conn MySQLi object.
require 'sql.php';

// The form's submit button sends this request using POST.
if(isset($_POST["submit_student"])) {
    // Read submitted values and remove extra whitespace from their edges.
    $fname = trim($_POST["firstName"]);
    $lname = trim($_POST["lastName"]);
    $dob = trim($_POST["dob"]);
    $gender = trim($_POST["gender"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $grade = trim($_POST["gradeLevel"]);
    $studentId = trim($_POST["studentId"]);
    $address = trim($_POST["address"]);

    // Check that the student number is not already assigned to another record.
    // A prepared statement keeps submitted values separate from the SQL command.
    $query = "SELECT id FROM tbl_students WHERE studentId = ?";
    $stmt1 = $conn->prepare($query);

    // The ? is a placeholder; "s" tells MySQLi the student number is a string.
    $stmt1->bind_param("s", $studentId);

    // Run the duplicate check and store its rows so num_rows can be checked.
    $stmt1->execute();
    $stmt1->store_result();

    // If a row matched, stop so this student number cannot be reused.
    if($stmt1->num_rows > 0) {
        echo "<script>alert('A student with this Student Number already exists.');</script>";
        $stmt1->close();
        $conn->close();
        exit();
    }

    // Release resources used by the duplicate-check statement.
    $stmt1->close();

    // Insert the validated form data. Each ? corresponds to one column value.
    $sql = "INSERT INTO tbl_students (firstname, lastname, dob, gender, email, phone, grade, studentId, address) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // prepare() creates the statement; bind_param() supplies the 9 string values.
    // This prevents user input from being interpreted as part of the SQL command.
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $fname, $lname, $dob, $gender, $email, $phone, $grade, $studentId, $address);

    // execute() runs the insert. It returns true on success and false on failure.
    if($stmt->execute()) {
        echo "<script>alert('Student registered successfully.');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close the prepared statement and database connection when this request is done.
    $stmt->close();
    $conn->close();

    // These old calls are unnecessary because execute() and close() already ran above.
    //$stmt->execute();
    //$stmt->close();    
}
?>


