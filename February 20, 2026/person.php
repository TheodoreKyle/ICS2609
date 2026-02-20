<?php
    class Person {
        protected $name; 
        protected $age;
        
        function __construct($name, $age) {
            $this -> name = $name; 
            $this -> age = $age; 
        }

        function setName($name) {
            $this -> name = $name; 
        }

        function setAge($age) {
            $this -> age = $age; 
        }

        function introduce() {
            return "Hi, I am {$this -> name} and I am {$this -> age} years old."; 
        }
    }

    $person1 = new Person("Theodore Kyle", 20);
    echo $person1 -> introduce();
?>