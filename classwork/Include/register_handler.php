<!-- This file handles the registration logic for the Mwalimu System -->
<?php 

include __DIR__ . '/sql.php'; 

$full_name = "Ezra Simiyu"; 
$role = "student"; 
$password = "student123"; 
$username = "nsimiyu"; 
$hash_pass = password_hash($password, PASSWORD_DEFAULT);

$sql_query = "INSERT INTO users (full_name, role, password, username) VALUES (?, ?, ?, ?)"; 

$stmt=$conn->prepare($sql_query); 

if ($stmt === false) {
    die("SQL Prepare failed: " . $conn->error); 
}

$stmt->bind_param("ssss", $full_name, $role, $hash_pass, $username); 
$stmt->execute(); 

if($stmt->execute()){ 
    echo "Registration successful!"; 
} else { 
    echo "Registration failed: " . $stmt->error; 
} 

$stmt->close(); 
$conn->close(); 
?>
