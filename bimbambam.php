<?php
    echo "AHJFISHIOHFIOFHO <br>";

    $name = "Theodore Kyle";
    $food = "pizza";
    $email = "choa.theodore.endurance@gmail.com";
    $age = 19;
    $users = 2;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is: {$email}<br><br><br>";

    # Arrays
    $foods = array("Apple", "Orange", "Banana", "Coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    // array_shift($foods);
    $reversed = array_reverse($foods);

    foreach($foods as $food) {
        echo $food . "<br>"; 
    }
    echo "<br>";
    foreach ($reversed as $food) {
        echo $food . "<br>";
    }
?>

