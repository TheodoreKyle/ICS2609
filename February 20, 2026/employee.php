<?php
require "person.php";
    class Employee extends Person {
        private $salary; 
        private $position;
        
        function __construct($salary, $position, $name, $age) {
            parent::__construct($name, $age);
            $this -> salary = $salary;
            $this -> position = $position; 
        }

        function getInfo() {
            return $this->introduce() . " I work as {$this -> position} and my salary is {$this -> salary}";
        }

        function getSalary() {
            return $this -> salary; 
        }

        function setSalary($salary) {
            $this -> salary = $salary; 
        }
    }

?>