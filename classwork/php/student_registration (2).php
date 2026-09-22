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
    
    <form action="../Include/register.php" method="POST">
      
      <!-- Row 1: Names -->
      <div class="form-row">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="firstName" placeholder="e.g., John" required>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="lastName" placeholder="e.g., Doe" required>
        </div>
      </div>

      
      <div class="form-row">
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="gender" value="male" required> Male
            </label>
            <label class="radio-label">
              <input type="radio" name="gender" value="female"> Female
            </label>
          </div>
        </div>
      </div>

      <!-- Row 3: Electronic Contacts -->
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="student@school.edu" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="e.g., +254 700 000000" required>
        </div>
      </div>

      <!-- Row 4: Institutional Categorization -->
      <div class="form-row">
        <div class="form-group">
          <label for="grade-level">Grade/Class Level</label>
          <select id="grade-level" name="gradeLevel" required>
            <option value="" disabled selected>Select level...</option>
            <option value="grade-9">Grade 9</option>
            <option value="grade-10">Grade 10</option>
            <option value="grade-11">Grade 11</option>
            <option value="grade-12">Grade 12</option>
          </select>
        </div>
        <div class="form-group">
          <label for="student-id">Student ID / Roll Number</label>
          <input type="text" id="student-id" name="studentId" placeholder="e.g., STU-2026-889" required>
        </div>
      </div>

      <!-- Row 5: Local Address -->
      <div class="form-row">
        <div class="form-group full-width">
          <label for="address">Residential Address</label>
          <textarea id="address" name="address" placeholder="Street name, City, Postal Code" required></textarea>
        </div>
      </div>

      <!-- Row 6: Admission Number -->
      <div class="form-row">
        <div class="form-group">
          <label for="admno">Admission Number</label>
          <input type="text" id="admno" name="admno" placeholder="e.g., ADM-2026-889" required>
        </div>
      </div>

      <!-- Action Footer -->
      <div class="form-actions">
        <button type="reset">Clear Form</button>
        <button type="submit" name="submit_student">Save Student Profile</button>
      </div>

    </form>
  </div>

</body>
</html>