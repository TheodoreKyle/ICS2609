<?php
    // Connection String
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ChoaDB";

    // Create a Connection
    $connection = new mysqli($servername, $username, $password, $database); 

    $sql = "SELECT * FROM Applicant";
    $result = mysqli_query($connection, $sql);
    mysqli_fetch_assoc($result); 

    
?>

<table>

</table>
