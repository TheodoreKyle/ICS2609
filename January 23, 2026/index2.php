<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Variable and Data Types</h1>

    <?php  
        $name = "Theodore Kyle";
        $age = 19;
        var_dump( $name );
        $isAdult = true; 
        $skills = ["HTML", "CSS", "Java", "Javascript", "MySQL", "Python", "PHP"];
        // $object = new Object(); 

        function sample() {
            global $name; 
            echo "<br>".$name;
        }
        sample();

        if($age >= 17) {
            $isAdult = true;
        } else {
            $isAdult = false;
        }

        $var = ""; 
        $num = 0;
        $arr = [];
        $bool = false; 
        // $object - null; 

        echo "<br>";
        echo $name;
        echo "<br>"; 
        echo $age;
        echo "<br>";
        echo $isAdult ? "Yes" : "No";
        echo "<br>";
        for ($i = 0; $i < 7; $i++) {
            echo $skills[$i] ."&nbsp&nbsp&nbsp";
        }
    ?>
</body>
</html>