<?php
    class Person2 {
        protected $name;
        protected $age;

        public function __construct($name, $age) {
            $this -> name = $name;
            $this -> age = $age;
        }
        public function introduce() {
            return "Hi, I am $this->name"; 
        } 
    }
    $person1 = new Person2("Theodore", 25);
    echo $person1 -> introduce();
    echo "<br>"; 

    class Employee2 extends Person2 {
        protected $position; 

        public function __construct($name, $age, $position) {
            $this -> position = $position; 
            parent::__construct($name, $age);
        }

        public function work(){
            return $this->name . " is working as a " . $this->position; 
        }

        public function introduce()
        {
            return "Good day! I am " . $this->name; 
        }
    }

    $emp = new Employee2("Theodore Kyle", 19, "Programmer"); 
    echo $emp -> introduce() . "<br>";
    echo $emp -> work(); 
    echo "<br>"; 

    class Manager extends Employee2 {

    public function __construct($name, $age, $position)
    {
        parent::__construct($name, $age, $position);
    }
        public function work() {
            return $this->name . " is managing the team."; 
        }
    }

    $dev = new Employee2("Mark", 20, "Programmer"); 

    $mgr = new Manager("Juan", 30, "Manager"); 

    echo $dev -> work(); 
    echo "<br>"; 
    echo $mgr -> work(); 

    interface Payable {
        public function calculateSalary(); 
        public function computeTax(); 
    }

    class FullTimeEmployee extends Employee2 implements Payable {
        public function calculateSalary() {
            return 30000; 
        }
        public function computeTax() {
            
        }
    }
    class PartTimeEmployee extends Employee2 implements Payable {
        public function calculateSalary() {
            return 15000; 
        }
        public function computeTax() {
            
        }
    }

    $ft1 = new FullTimeEmployee("TKQC", 19, "Developer");
    $pt1 = new PartTimeEmployee("Joaqs", 19, "Designer");

    echo "<br><br>"; 
    echo $ft1 -> calculateSalary(); 
    echo "<br>";
    echo $pt1 -> calculateSalary(); 
    
    abstract class Shape {
        protected $name;    
        abstract public function calculateArea();

        public function describe() {
            return "This is a " . $this -> name; 
        }
    }

    class Rectangle2 extends Shape {
        private $width;
        private $height; 

        public function __construct($name, $width, $height) {
            $this -> name = $name;
            $this -> width = $width;
            $this -> height = $height; 
             
        }

        public function calculateArea(){
            return $this->width * $this->height; 
        }
    }

    $rectangle1 = new Rectangle2("Rectangle", 5, 10);
    echo "<br><br>"; 
    echo $rectangle1 -> describe();
    echo "<br>";
    echo "Area is: " . $rectangle1 -> calculateArea();
?>
