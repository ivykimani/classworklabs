<?php
session_start();

$registration = $_SESSION['registration'] ?? [];
unset($_SESSION['registration']);
$values = $registration['values'] ?? [];
$errors = $registration['errors'] ?? [];
$escape = static function ($value) {
  return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};
$oldValue = static function ($field) use ($values, $escape) {
  return $escape($values[$field] ?? '');
};
?>
<!-- Registration form: its field names become keys in PHP's $_POST array. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Data Entry Form</title>
<link rel="stylesheet" href="../Css/styles.css">
</head>
<body>

  <div class="form-container">
    <h2>Student Registration Form</h2>
    <p>Fill out the fields below to add a new profile to the management database.</p>
    <?php if ($errors): ?>
      <div role="alert">
        <p>Please correct the following errors and re-enter both passwords:</p>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?= $escape($error) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif (isset($registration['success'])): ?>
      <p role="status"><?= $escape($registration['success']) ?></p>
    <?php endif; ?>
    
    <!-- POST sends the submitted fields to the PHP handler without putting them in the URL. -->
    <form action="../Include/register.php" method="POST">
      
      <!-- Row 1: Names -->
      <div class="form-row">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="firstName" value="<?= $oldValue('firstName') ?>" placeholder="e.g., John" required>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="lastName" value="<?= $oldValue('lastName') ?>" placeholder="e.g., Doe" required>
        </div>
      </div>

      
      <div class="form-row">
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" value="<?= $oldValue('dob') ?>" required>
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="gender" value="male" <?= ($values['gender'] ?? '') === 'male' ? 'checked' : '' ?> required> Male
            </label>
            <label class="radio-label">
              <input type="radio" name="gender" value="female" <?= ($values['gender'] ?? '') === 'female' ? 'checked' : '' ?>> Female
            </label>
          </div>
        </div>
      </div>

      <!-- Row 3: Electronic Contacts -->
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" value="<?= $oldValue('email') ?>" placeholder="student@school.edu" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" value="<?= $oldValue('phone') ?>" placeholder="e.g., +254 700 000000" required>
        </div>
      </div>

      <!-- Row 4: Institutional Categorization -->
      <div class="form-row">
        <div class="form-group">
          <label for="grade-level">Grade/Class Level</label>
          <select id="grade-level" name="gradeLevel" required>
            <option value="" disabled <?= !in_array($values['gradeLevel'] ?? '', ['grade-9', 'grade-10', 'grade-11', 'grade-12'], true) ? 'selected' : '' ?>>Select level...</option>
            <option value="grade-9" <?= ($values['gradeLevel'] ?? '') === 'grade-9' ? 'selected' : '' ?>>Grade 9</option>
            <option value="grade-10" <?= ($values['gradeLevel'] ?? '') === 'grade-10' ? 'selected' : '' ?>>Grade 10</option>
            <option value="grade-11" <?= ($values['gradeLevel'] ?? '') === 'grade-11' ? 'selected' : '' ?>>Grade 11</option>
            <option value="grade-12" <?= ($values['gradeLevel'] ?? '') === 'grade-12' ? 'selected' : '' ?>>Grade 12</option>
          </select>
        </div>
        <div class="form-group">
          <label for="student-id">Student Number</label>
          <input type="text" id="student-id" name="studentId" value="<?= $oldValue('studentId') ?>" placeholder="e.g., STU-2026-889" required>
        </div>
      </div>

      <!-- Row 5: Password Categorization -->
       <div class="form-row">
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirmPassword" placeholder="Re-enter your password" required>
        </div>
      </div>

      <!-- Row 6: Local Address -->
      <div class="form-row">
        <div class="form-group full-width">
          <label for="address">Residential Address</label>
          <textarea id="address" name="address" placeholder="Street name, City, Postal Code" required><?= $oldValue('address') ?></textarea>
        </div>
      </div>

      <!-- Action Footer -->
      <div class="form-actions">
        <a href="student_view.php" class="back-link">Back to Profile</a>
        <button type="reset">Clear Form</button>
        <button type="submit" name="submit_student">Save Student Profile</button>
      </div>

    </form>
  </div>

</body>
</html>