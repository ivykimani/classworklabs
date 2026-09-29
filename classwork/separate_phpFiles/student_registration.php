<?php
$connection = new mysqli("localhost", "root", "");

if ($connection->connect_error) {
	die("Database connection failed: " . $connection->connect_error);
}

$connection->query("CREATE DATABASE IF NOT EXISTS school");
$connection->select_db("school");

$connection->query("CREATE TABLE IF NOT EXISTS students (
	id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
	gender VARCHAR(20) NOT NULL,
	email VARCHAR(100) NOT NULL,
	date_of_birth DATE NOT NULL,
	hobbies VARCHAR(255),
	course VARCHAR(100) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$message = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$first_name = trim($_POST["fname"] ?? "");
	$last_name = trim($_POST["lname"] ?? "");
	$gender = trim($_POST["gender"] ?? "");
	$email = trim($_POST["email"] ?? "");
	$date_of_birth = trim($_POST["dob"] ?? "");
	$hobbies = isset($_POST["hobbies"]) && is_array($_POST["hobbies"])
		? implode(", ", $_POST["hobbies"])
		: "";
	$course = trim($_POST["course"] ?? "");

	if ($first_name === "" || $last_name === "" || $gender === "" ||
		$email === "" || $date_of_birth === "" || $course === "") {
		$error = "Please complete all required fields.";
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Please enter a valid email address.";
	} else {
		$statement = $connection->prepare(
			"INSERT INTO students
			(first_name, last_name, gender, email, date_of_birth, hobbies, course)
			VALUES (?, ?, ?, ?, ?, ?, ?)"
		);
		$statement->bind_param(
			"sssssss",
			$first_name,
			$last_name,
			$gender,
			$email,
			$date_of_birth,
			$hobbies,
			$course
		);

		if ($statement->execute()) {
			$message = "Student details saved successfully.";
		} else {
			$error = "Could not save the student details.";
		}

		$statement->close();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Registration</title>
</head>
<body>
	<h1>Student Registration</h1>

	<?php if ($message): ?>
		<p style="color: green;"><?php echo htmlspecialchars($message); ?></p>
	<?php endif; ?>

	<?php if ($error): ?>
		<p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
	<?php endif; ?>

	<form method="POST" action="">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" required>
		<br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" required>
		<br><br>

		<label for="gender">Gender:</label>
		<select id="gender" name="gender" required>
			<option value="">Select gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		<br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<br><br>

		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" required>
		<br><br>

		<fieldset>
			<legend>Hobbies</legend>
			<label><input type="checkbox" name="hobbies[]" value="reading"> Reading</label>
			<label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
			<label><input type="checkbox" name="hobbies[]" value="music"> Music</label>
			<label><input type="checkbox" name="hobbies[]" value="travelling"> Travelling</label>
		</fieldset>
		<br>

		<label for="course">Course:</label>
		<select id="course" name="course" required>
			<option value="">Select course</option>
			<option value="cs">Computer Science</option>
			<option value="bbit">Business and Information Technology</option>
			<option value="bcom">Business Commerce</option>
			<option value="me">Mechanical Engineering</option>
			<option value="law">Law</option>
			<option value="ee">Electrical Engineering</option>
		</select>
		<br><br>

		<button type="submit">Save Student Details</button>
	</form>
</body>
</html>
