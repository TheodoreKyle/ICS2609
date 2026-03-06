<?php

/*
TODO STEP 1
Retrieve form data using $_POST
*/

require "User.php";
$user = new User();

$user -> setUserData(
    $_POST['fullname'],
    $_POST['email'],
    $_POST['username'],
    $_POST['password'],
    $_POST['confirm_password']
);

/*
TODO STEP 2
Validate empty fields
If empty -> show message and stop program
*/

if ($user->validateInput()) {
    echo "All fields are required.";
    exit;
}

/*
TODO STEP 3
Check if password matches confirm password
*/

if ($user->checkPasswordMatch()) {
    echo "Passwords do not match.";
    exit;
}

/*
TODO STEP 4
Create user array
Example:
$user = [
    "fullname" => $fullname,
    "email" => $email,
    "username" => $username
];
*/


/*
TODO STEP 5
Read existing JSON data from users.json
Hint:
file_get_contents()
json_decode()
*/


/*
TODO STEP 6
Append new user to array
*/


/*
TODO STEP 7
Convert array back to JSON

Hint:
json_encode()
*/


/*
TODO STEP 8
Save JSON to users.json

Hint:
file_put_contents()
*/

$user -> saveUser();

/*
TODO STEP 9
Redirect back to index.php

Hint:
header("Location: index.php");
*/

header("Location: index.php");
exit;


?>