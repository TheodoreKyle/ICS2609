<?php
/* $name = "Theodore Kyle";
$age = 19;
$gender = "Male";
$email = "theodorekyle.choa.cics@ust.edu.ph";

echo $name . "<br>";
echo $age . "<br>";
echo $gender . "<br>";
echo $email . "<br>";

$name1 = "Zyx";
$age1 = 21;
$gender1 = "Female";
$email1 = "zyx@ust.edu.ph"; */

class Person {
    public $name;
    public $age; 
    public $gender;
    public $email;

    function __construct($name, $age, $gender, $email) {
        echo "Execute from constructor";
        $this -> name = $name;
        $this -> age = $age; 
        $this -> gender = $gender;
        $this -> email = $email;  
    }

    function get_person() {
        echo "<br>". "Name: ". $this -> name . "<br>". "Age: ". $this -> age . "<br>". "Gender: " . $this -> gender . "<br>". 
        "Email: " . $this -> email;   
    }
}

$person1 = new Person("Gabriel", 32, "Male", "theodorekyle.choa.cics@ust.edu.ph"); 
// $person1 -> name = "Theodore Kyle"; 
// $person1 -> age = 19;
// $person1 -> gender = "Male";
// $person1 -> email = "theodorekyle.choa.cics@ust.edu.ph";
// $person1 -> get_person(); 

$person2 = new Person("Zyx", 21, "Female", "zyx@ust.edu.ph"); 
// $person2 -> name = "Zyx";
// $person2 -> age = 21;
// $person2 -> gender = "Female";
// $person2 -> email = "zyx@ust.edu.ph";
// $person2 -> get_person(); 

?> 