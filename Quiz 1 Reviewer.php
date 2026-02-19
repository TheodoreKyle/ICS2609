<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 1 Reviewer</title>
</head>
<body>
    <h1>Quiz 1 Reviewer</h1> <br>
    <h2>String Functions</h2>

    <?php 
        echo "Hello world!" . "<br><br>"; 
        echo "Total number of letters: " . strlen("Hello world!") . "<br>";
        echo "Total number of words: " . str_word_count("Hello world!") . "<br>"; 
        echo "Position of world: " . strpos("Hello world!", "world") . "<br>";
    ?>

    <h2>Match Expressions</h2>

    <?php
        $favcolor = "red";

        $text = match($favcolor) {
        "red" => "Your favorite color is red!",
        "blue" => "Your favorite color is blue!",
        "green" => "Your favorite color is green!",
        default => "Your favorite color is neither red, blue, nor green!",
        };
        echo $text;
        echo "<br>"; 

        $favcolor2 = "pink";

        try {
        $text2 = match($favcolor2) {
        "red" => "Your favorite color is red!",
        "blue" => "Your favorite color is blue!",
        "green" => "Your favorite color is green!",
        };
        } catch (\UnhandledMatchError $e) {
            var_dump($e);
        }
        echo "<br>"; 
    ?>

    <h2>Date and Time</h2>
    
</body>
</html>