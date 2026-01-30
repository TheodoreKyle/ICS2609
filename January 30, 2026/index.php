<?php
    $message = "This is all about scopes";

    function displayMessage() {
        // global $message;
        // echo $message; 
        echo $GLOBALS["message"];
        
    }

    displayMessage(); 
    // echo $message; 

    echo "<br><br>"; 