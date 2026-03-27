<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    $sql = "SELECT * FROM Account";
    $result = mysqli_query($connection, $sql);
    mysqli_fetch_assoc($result); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewing List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="table-wrapper">
    <h1>Account Database</h1>

    <div class="table-scroll">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Grade Level</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($result as $value) { ?>
        <tr>
            <th><?php echo $value["id"] ?></th>
            <td><?php echo $value["firstname"] ?></td>
            <td><?php echo $value["midname"] ?></td>
            <td><?php echo $value["lastname"] ?></td>
            <td><?php echo $value["age"] ?></td>
            <td><?php echo $value["gender"] ?></td>
            <td><?php echo $value["grdlvl"] ?></td>
            <td><?php echo $value["phone"] ?></td>
            <td><?php echo $value["address"] ?></td>
            <td>
                <a href="update_act.php?id= <?php echo $value["id"]?>">Update</a>
                <a href="delete_act.php?id= <?php echo $value["id"]?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>