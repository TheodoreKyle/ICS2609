<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    // Checking Connection
    /* if (!$connection) {
        echo "Connection Failed.\n";
    } else {
        echo "Connection Successful!\n"; 
    } */

    /* Creating Database
    $sql = "CREATE DATABASE ChoaDB"; 
    if ($connection -> query($sql) === true) {
        echo "DB Created\n"; 
    } else {
        echo "DB Not Created\n"; 
    } */

    // Creating Table
    /* $sql = "CREATE TABLE Account (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        midname VARCHAR(30),
        lastname VARCHAR(30) NOT NULL,
        age INT(3) NOT NULL, 
        gender VARCHAR(30),
        grdlvl VARCHAR(30),
        phone VARCHAR(30),
        address VARCHAR(255)
    )"; 
    if ($connection -> query($sql) === true) {
        echo "Table Created Successfully.\n"; 
    } else {
        echo "Table Not Created.\n"; 
    } */

    /* Inserting Data - Sample
    $sql = "INSERT INTO Applicant (firstname, midname, lastname, age, gender, grdlvl, phone, address) VALUES (
        'Theodore Kyle', 'Quijon', 'Choa', '20', 'Male', 'College - 2nd Year', '09184675486', '137 Iba Street Quezon City'
        )"; */

    // Prepared Statement 
    $stmt = $connection -> prepare("INSERT INTO Account (firstname, midname, lastname, age, gender, grdlvl, phone, address) VALUES (?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("ssssssss", $firstname, $midname, $lastname, $age, $gender, $grdlvl, $phone, $address);

    $firstname = $_POST["firstname"];
    $midname = $_POST["midname"]; 
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $grdlvl = $_POST["grdlvl"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if ($stmt -> execute()) {
        header("Location: list_act.php"); 
    } 
?>