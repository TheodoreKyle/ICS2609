<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Registration and Activation Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-wrapper">
    <h1>Account Registration and Activation Form</h1>

    <form action="database_act.php" method="post">

      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
      </div>

      <div class="form-group">
        <label for="midname">Middle Name</label>
        <input type="text" id="midname" name="midname" placeholder="Enter your middle name">
      </div>

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" min="1" max="100" required>
      </div>

      <div class="form-group">
        <label>Gender</label>
        <div class="radio-group">
          <label class="radio-label">
            <input type="radio" name="gender" value="Male" required>
            Male
          </label>
          <label class="radio-label">
            <input type="radio" name="gender" value="Female">
            Female
          </label>
          <label class="radio-label">
            <input type="radio" name="gender" value="Prefer not to disclose">
            Prefer not to disclose
          </label>
        </div>
      </div>

      <div class="form-group">
        <label>Grade Level</label>
        <div class="radio-group">
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 7" required>Grade 7</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 8">Grade 8</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 9">Grade 9</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 10">Grade 10</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 11">Grade 11</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 12">Grade 12</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 1st Year">College - 1st Year</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 2nd Year">College - 2nd Year</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 3rd Year">College - 3rd Year</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 4th Year">College - 4th Year</label>
        </div>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="09XXXXXXXXX" required>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" placeholder="Enter your full address" rows="4" required></textarea>
      </div>

      <div class="form-actions">
        <button type="reset" class="btn-reset">Clear</button>
        <button type="submit" class="btn-submit">Submit</button>
      </div>

    </form>
  </div>
</body>
</html>