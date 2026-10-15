<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
  <div class="form-container">
<h2>Register Account</h2>
<p>Fill out the fields below to add a new profile to the management database.</p>
<form action="/classwork/Include/user_register.php" method="POST">

<!-- Row 1: Full Name -->
<div class="form-row">
<div class="form-group">
<label for="full-name">Full Name</label>
<input type="text" id="full-name" name="fullName"  required>
</div>

<!-- Row 2: User Name -->
<div class="form-group">
<label for="user-name">User Name</label>
<input type="text" id="user-name" name="userName" required>
</div>
</div>

<!--Row 3: ID -->
<div class="form-row">
<div class="form-group">
<label for="id">ID</label>
<input type="text" id="id" name="id" required>
</div>
</div>

 
<!-- Row 4: Role -->
<div class="form-row">
<div class="form-group">
<label for="role">Role</label>
<select id="role" name="role" required>
<option value="" disabled selected>Select your role...</option>
<option value="admin">Admin</option>
<option value="student">Student</option>
<option value="teacher">Teacher</option>
</select>
</div>
</div>
 
<!-- Row 5: Password and Confirm -->
<div class="form-row">
<div class="form-group">
<label for="pwd">Password</label>
<input type="password" id="pwd" name="pwd" required>
</div>
<div class="form-group">
<label for="cpwd">Confirm Password</label>
<input type="password" id="cpwd" name="cpwd" required>
</div>
</div>
 
<!-- Action Footer -->
<div class="form-actions">

Already have an account? Click <a href="login.php">here </a> to log in
<button type="submit" name="submit_user">Save User</button>
</div>
 
</form>
</div> 
<script>
document.querySelector('form').addEventListener('submit', function(e) {
  const pwd = document.getElementById('pwd').value;
  const cpwd = document.getElementById('cpwd').value;
  
  if (pwd !== cpwd) {
    alert("Passwords do not match!");
    e.preventDefault(); // Stops the form from submitting
  }
});
</script>

</body>
</html>

 
