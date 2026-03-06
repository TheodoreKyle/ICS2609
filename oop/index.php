<!DOCTYPE html>
<html>
<head>
    <title>User Registration (OOP PHP)</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<h2>User Registration (OOP PHP)</h2>

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

require "User.php"; 
$user = new User(); 
$user -> displayUsersTable(); 

?>

</body>
</html>