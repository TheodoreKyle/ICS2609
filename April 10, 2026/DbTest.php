<?php
    require_once("storage/Database.php"); 

    $db = new Database(); 
    echo $db->isConnected() ? "DB Connected" : "DB Not Connected"; 
    echo "<br>";
    echo "Choa, Theodore Kyle Q.";
    echo "<br>";
    echo "2ITB | ICS2609";
?>