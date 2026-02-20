<?php
require "employee.php";

    $emp = new Employee(300, "Faculty", "Theodore Kyle Choa", 19);
    echo $emp -> introduce(); 
    echo "<br>"; 

    echo $emp -> getInfo(); 
    echo "<br>"; 

    $emp -> setName("Gabriel Montano"); 
    echo $emp -> getInfo(); 
    echo "<br><br>"; 

    $emp -> setSalary(999999); 
    $emp -> setName("Theodore Choa");
    echo $emp -> getInfo(); 
?>