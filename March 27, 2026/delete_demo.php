<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    $stmt = $connection -> prepare("DELETE APPLICANT WHERE id = ?");
    $stmt -> bind_param("i", $id);
    if ($stmt -> execute()) {
        header("Location: list_demo.php");
    }
?>