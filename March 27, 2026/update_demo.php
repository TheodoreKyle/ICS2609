<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    $id = $_GET["id"]; 
    $sql = "SELECT * FROM Applicant 
            WHERE id = $id"; 
    
    $result = mysqli_query($connection, $sql); 
    $row = mysqli_fetch_assoc($result); 

    if (isset($_POST["submit"])) {
        $firstname = $_POST[""];
        $lastname = $_POST[""];
        $phone = $_POST[""];
        $gender = $_POST[""];
        $email = $_POST[""];
        $address = $_POST[""];

        $stmt = $connection -> prepare("UPDATE APPLICANT SET firstname = ?, lastname = ?, phone = ?, gendder = ?, email = ?, address = ? 
                                        WHERE id = ?");
        $stmt -> bind_param("ssssss", $firstname, $lastname, $phone, $gender, $email, $address, $id);
        if ($stmt -> execute()) {
            header("Location: list_demo.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
    <table>

    </table>
    
</body>
</html>