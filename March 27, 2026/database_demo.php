<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    // Checking Connection
    if (!$connection) {
        echo "Connection Failed.\n";
    } else {
        echo "Connection Successful!\n"; 
    }

    /* Creating Database
    $sql = "CREATE DATABASE ChoaDB"; 
    if ($connection -> query($sql) === true) {
        echo "DB Created\n"; 
    } else {
        echo "DB Not Created\n"; 
    } */ 

    /* Creating Table
    $sql = "CREATE TABLE Applicant (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        phone VARCHAR(20),
        gender VARCHAR(20),
        email VARCHAR(50),
        address VARCHAR(255)
    )"; 

    if ($connection -> query($sql) === true) {
        echo "Table Created Successfully.\n"; 
    } else {
        echo "Table Not Created.\n"; 
    } */

    /* Inserting Data
    $sql = "INSERT INTO Applicant (firstname, lastname, phone, gender, email, address) VALUES (
        'Gab', 'Montano', '09184675486', 'Male', 'gab@gmail.com', 'San Mateo, Rizal'
        )"; 

    if ($connection -> query($sql) === true) {
        echo "New Record Created Successfully.\n"; 
    } else {
        echo "New Record Not Created.\n"; 
    } */

    // Prepared Statement 
    $stmt = $connection -> prepare("INSERT INTO Applicant (firstname, lastname, phone, gender, email, address) VALUES (?,?,?,?,?,?)");
    $stmt -> bind_param("ssssss", $firstname, $lastname, $phone, $gender, $email, $address);

    $firstname = $_POST[""];
    $lastname = $_POST[""];
    $phone = $_POST[""];
    $gender = $_POST[""];
    $email = $_POST[""];
    $address = $_POST[""];

    if ($stmt -> execute()) {
        header("Location: list_demo.php"); 
    } 
?>