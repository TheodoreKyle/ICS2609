<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    $id = $_GET["id"]; 
    $sql = "SELECT * FROM ACCOUNT
            WHERE id = $id"; 
    
    $result = mysqli_query($connection, $sql); 
    $row = mysqli_fetch_assoc($result); 

    if (isset($_POST["submit"])) {
        $firstname = $_POST["firstname"];
        $midname = $_POST["midname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $grdlvl = $_POST["grdlvl"]; 
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        $stmt = $connection -> prepare("UPDATE ACCOUNT SET firstname = ?, midname = ?, lastname = ?, age = ?, gender = ?, grdlvl = ?, phone = ?, address = ? 
                                        WHERE id = ?");
        $stmt -> bind_param("sssssssss", $firstname, $midname, $lastname, $age, $gender, $grdlvl, $phone, $address, $id);
        if ($stmt -> execute()) {
            header("Location: list_act.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-wrapper">
    <h1>Update Form</h1>

    <form action="update_act.php?id=<?php echo $id ?>" method="post">

      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" value="<?php echo $row["firstname"] ?>" required>
      </div>

      <div class="form-group">
        <label for="midname">Middle Name</label>
        <input type="text" id="midname" name="midname" value="<?php echo $row["midname"] ?>" placeholder="Enter your middle name">
      </div>

      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $row["lastname"] ?>" placeholder="Enter your last name" required>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" min="1" max="100" value="<?php echo $row["age"] ?>" required>
      </div>

      <div class="form-group">
        <label>Gender</label>
        <div class="radio-group">
          <label class="radio-label">
            <input type="radio" name="gender" value="Male" <?php echo $row["gender"] == "Male" ? "checked" : "" ?> required>
            Male
          </label>
          <label class="radio-label">
            <input type="radio" name="gender" value="Female" <?php echo $row["gender"] == "Female" ? "checked" : "" ?>>
            Female
          </label>
          <label class="radio-label">
            <input type="radio" name="gender" value="Prefer not to disclose" <?php echo $row["gender"] == "Prefer not to disclose" ? "checked" : "" ?>>
            Prefer not to disclose
          </label>
        </div>
      </div>

      <div class="form-group">
        <label>Grade Level</label>
        <div class="radio-group">
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 7" <?php echo $row["grdlvl"] == "Grade 7" ? "checked" : "" ?> required>Grade 7</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 8" <?php echo $row["grdlvl"] == "Grade 8" ? "checked" : "" ?>>Grade 8</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 9" <?php echo $row["grdlvl"] == "Grade 9" ? "checked" : "" ?>>Grade 9</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 10" <?php echo $row["grdlvl"] == "Grade 10" ? "checked" : "" ?>>Grade 10</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 11" <?php echo $row["grdlvl"] == "Grade 11" ? "checked" : "" ?>>Grade 11</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="Grade 12" <?php echo $row["grdlvl"] == "Grade 12" ? "checked" : "" ?>>Grade 12</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 1st Year" <?php echo $row["grdlvl"] == "College - 1st Year" ? "checked" : "" ?>>College - 1st Year</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 2nd Year" <?php echo $row["grdlvl"] == "College - 2nd Year" ? "checked" : "" ?>>College - 2nd Year</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 3rd Year" <?php echo $row["grdlvl"] == "College - 3rd Year" ? "checked" : "" ?>>College - 3rd Year</label>
          <label class="radio-label"><input type="radio" name="grdlvl" value="College - 4th Year" <?php echo $row["grdlvl"] == "College - 4th Year" ? "checked" : "" ?>>College - 4th Year</label>
        </div>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="09XXXXXXXXX" value="<?php echo $row["phone"] ?>"required>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" placeholder="Enter your full address" rows="4" required><?php echo $row["address"] ?></textarea>
      </div>

      <div class="form-actions">
        <button type="reset" class="btn-reset">Clear</button>
        <button type="submit" name="submit" class="btn-submit">Update</button>
      </div>

    </form>
  </div>
</body>
</html>