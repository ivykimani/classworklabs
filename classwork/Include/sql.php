<?php
// Database connection settings for the local MySQL server and this project database.
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "my_school_manager";

// Create one MySQLi connection object for files that include this connection file.
$conn = new mysqli($localhost, $username, $password, $dbname);

// Stop the current request if PHP could not connect to MySQL.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>