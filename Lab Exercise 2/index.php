<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Exercise 2</title>
</head>
<body>
    <h1>Choa, Theodore Kyle Q.&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;2ITB&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;ICS2609</h1>
    <h2>Problem 1: Rectangle Class</h2>

    <?php
        require "classes.php";
        $rectangle1 = new Rectangle(6, 7);
        echo "Area of Rectangle with Width: " . $rectangle1 -> getWidth() . 
        " and Height: " . $rectangle1 -> getHeight() . " is: " . $rectangle1 -> getArea(); 
        echo "<br>";
        echo "Perimeter is: " . $rectangle1 -> getPerimeter();

        echo "<br><br>"; 

        $rectangle2 = new Rectangle(134, 50);
        echo "Area of Rectangle with Width: " . $rectangle2 -> getWidth() . 
        " and Height: " . $rectangle2 -> getHeight() . " is: " . $rectangle2 -> getArea();
        echo "<br>";
        echo "Perimeter is: " . $rectangle2 -> getPerimeter();
    ?>

    <h2>Problem 2: Car Rental System</h2>

    <?php
        $brand1 = new Car("Toyota", 1550); 
        echo $brand1 -> getBrand() . "<br>";
        echo $brand1 -> getPricePerDay() . "<br>"; 
        echo "Total rental cost: " . $brand1 -> calculateRental(7);
        echo "<br><br>";

        $brand2 = new Car("Mitsubishi", 3280); 
        echo $brand2 -> getBrand() . "<br>";
        echo $brand2 -> getPricePerDay() . "<br>"; 
        echo "Total rental cost: " . $brand2 -> calculateRental(15);
    ?>

    <h2>Problem 3: Grade Calculator</h2>

    <?php  
        $grade1 = new Grade(88); 
        echo $grade1 -> getGrade() . "<br>"; 
        echo "Your letter formatted grade: " . $grade1 -> getEquivalentGrade();
        echo "<br><br>"; 

        $grade2 = new Grade(95); 
        echo $grade2 -> getGrade() . "<br>"; 
        echo "Your letter formatted grade: " . $grade2 -> getEquivalentGrade();
        echo "<br><br>"; 

        $grade3 = new Grade(73); 
        echo $grade3 -> getGrade() . "<br>"; 
        echo "Your letter formatted grade: " . $grade3 -> getEquivalentGrade();
        echo "<br><br>"; 
    ?>

    <h2>Problem 4: Simple E-Commerce System</h2>
    
    <?php
        $product1 = new Product("Keyboard", 2500); 
        $product2 = new Product("Monitor", 3000);
        $product3 = new Product("Tablet", 30000); 
        $product4 = new Product("Cellphone", 22000); 
        
        $cart = new Cart(); 
        $cart -> addProduct($product1);
        $cart -> addProduct($product2);
        $cart -> addProduct($product3);
        $cart -> addProduct($product4);
        echo "List of Products: " . "<br>"; 
        foreach ($cart -> getProducts() as $items) {
            echo $items["name"] . " - ₱". $items['price'] . "<br>"; 
        }
        echo "<br>Total: ₱" . $cart -> getTotal();  
    ?>
    
</body>
</html>