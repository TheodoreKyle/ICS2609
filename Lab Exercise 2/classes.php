<?php
    # Problem 1 - Rectangle Class
    class Rectangle {
        private $width; 
        private $height; 

        function __construct($width, $height) {
            $this -> width = $width;
            $this -> height = $height; 
        }

        function getArea() {
            return $this -> width * $this -> height; 
        }

        function getPerimeter() {
            return 2 * ($this -> width + $this -> height);
        }

        # Optional Getters
        function getWidth() {
            return $this -> width; 
        }
        function getHeight() {
            return $this -> height; 
        }
    }

    # Problem 2: Car Rental System
    class Car {
        protected $brand;
        protected $pricePerDay;
        
        function __construct($brand, $pricePerDay) {
            $this -> brand = $brand;
            $this -> pricePerDay = $pricePerDay; 
        }

        function calculateRental($days) {
            return $days * $this -> pricePerDay;
        }

        # Optional Getters
        function getBrand() {
            echo "You have rented $this->brand";  
        }
        function getPricePerDay(){
            echo "Price per day of $this->brand is $this->pricePerDay";
        }
    }

    # Problem 3: Grade Calculator
    class Grade {
        private $score; 

        function __construct($score) {
            $this -> score = $score; 
        }

        function getEquivalentGrade() {
            if ($this -> score <= 100 && $this -> score >= 90) {
                return "A"; 
            }
            else if ($this -> score <= 89 && $this -> score >= 80) {
                return "B";
            }
            else if ($this -> score <= 79 && $this -> score >= 70) {
                return "C";
            }
            else if ($this -> score <= 69 && $this -> score >= 60) {
                return "D";
            }
            else {
                return "F";
            }
        }

        # Optional Getter
        function getGrade() {
            echo "Your numerical grade: $this->score";
        }
    }

    # Problem 4: Simple E-Commerce System
    class Product {
        protected $name;
        private $price; 

        function __construct($name, $price) {
            $this -> name = $name;
            $this -> price = $price; 
        }

        # Optional Getter
        function getName() {
            return $this -> name;
        }
        function getPrice() {
            return $this -> price;
        }
    }

    class Cart {
        private $products = [];

        function addProduct(Product $product) {
            $this -> products[] = array(
                "name" => $product -> getName(),
                "price" => $product -> getPrice() 
            ); 
        }
        function getTotal() {
            return array_sum(array_column($this -> products, "price")); 
        }

        function getProducts() {
            return $this -> products; 
        }
    }
?>