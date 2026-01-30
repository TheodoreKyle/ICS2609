<?php
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);

    if(isset($firstName)) {
        echo "Please enter first name."; 
    } 
    echo $firstName; 

    // isset() empty = true | not empty = false

    // echo $_POST['firstName'] . " " . $_POST['lastName'];

    // echo $firstName . " " . $lastName;