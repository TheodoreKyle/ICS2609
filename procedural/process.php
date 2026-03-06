<?php

/*
TODO STEP 1
Retrieve form data using $_POST
*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];


/*
TODO STEP 2
Validate empty fields
If empty -> show message and stop program
*/

    if (empty($fullname) || empty($email) || empty($username) || empty($password) || empty($confirm)) {
        echo "Please fill out all fields.";
        exit;
    }

/*
TODO STEP 3
Check if password matches confirm password
*/

    if ($password !== $confirm) {
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

    $user = [
        "fullname" => $fullname,
        "email" => $email, 
        "username" =>  $username,
        "password" => $password
    ];

/*
TODO STEP 5
Read existing JSON data from users.json
Hint:
file_get_contents()
json_decode()
*/

    $file = "users.json";
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $users = json_decode($json, true); 
    } else {
        $users = []; 
    }

/*
TODO STEP 6
Append new user to array
*/

    $users[] = $user;

/*
TODO STEP 7
Convert array back to JSON

Hint:
json_encode()
*/

    $jsonData = json_encode($users, JSON_PRETTY_PRINT);


/*
TODO STEP 8
Save JSON to users.json

Hint:
file_put_contents()
*/

    file_put_contents($file, $jsonData); 

/*
TODO STEP 9
Redirect back to index.php

Hint:
header("Location: index.php");
*/

    header("Location: index.php?success=1"); 
    exit; 
}

?>