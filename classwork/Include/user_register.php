<?php
require('sql.php');
 
if(isset($_POST['submit_user'])){
 
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $id = $_POST['id'];
    $role = $_POST['role'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
 
    if($pwd!=$cpwd){
        echo "<script>alert('Passwords do not match')</script>";
        echo "<script>window.location.href='/classwork/teachers/user_registraton.php'</script>";
    }else{
        $qry = "SELECT username FROM users WHERE username = ? LIMIT 1";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $stmt->store_result();
 
        if($stmt->num_rows>0){
            echo "<script>alert('The user already exists')</script>";
            echo "<script>window.location.href='/classwork/teachers/user_registraton.php'</script>";
        }else{
 
            $pass = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (full_name, username, id, pass, role) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $fullName, $userName, $id, $pass, $role);
 
            // FIXED: Execute happens exactly ONCE right here inside the condition
            if($stmt->execute()){
                echo "<script>alert('User has been registered')</script>";
                echo "<script>window.location.href='/classwork/teachers/user_registraton.php'</script>";
            }else{
                echo "<script>alert('User has not been registered, contact the admin')</script>";
                echo "<script>window.location.href='/classwork/teachers/user_registraton.php'</script>";
            }
        }
    }
}
?>

 