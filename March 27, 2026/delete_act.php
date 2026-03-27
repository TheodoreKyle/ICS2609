<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    $id = $_GET["id"];
    $stmt = $connection -> prepare("DELETE FROM ACCOUNT WHERE id = ?");
    $stmt -> bind_param("i", $id);
        if ($stmt -> execute()) {
            header("Location: list_act.php");
        }
?>