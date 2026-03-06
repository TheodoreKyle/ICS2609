<!DOCTYPE html>
<html>
<head>
    <title>User Registration (Procedural PHP)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>User Registration (Procedural PHP)</h2>

<?php
if (isset($_GET['success'])) {
    echo "<p style='color:green;'>Registration Successful!</p>";
}
?>

<form method="POST" action="process.php">

    <label>Full Name</label><br>
    <input type="text" name="fullname"><br><br>

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <label>Username</label><br>
    <input type="text" name="username"><br><br>

    <label>Password</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirm Password</label><br>
    <input type="password" name="confirm_password"><br><br>

    <button type="submit">Register</button>

</form>

<hr>

<h3>Registered Users</h3>

<?php

/*
TODO:
1. Read users.json file
2. Convert JSON to PHP array using json_decode
3. Display users in a table
*/

$file = "users.json"; 
if (file_exists($file)) {
    $json = file_get_contents($file);
    $users = json_decode($json, true); 

    if (!empty($users)) { ?>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td> <?php echo $user["fullname"] ?> </td>
                    <td> <?php echo $user["email"] ?> </td>
                    <td> <?php echo $user["username"] ?> </td>
                </tr>
            <?php } ?>    
        </table>
    <?php } ?>
<?php } ?>


</body>
</html>