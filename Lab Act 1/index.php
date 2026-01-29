<?php
    # Exercise 1: Basic PHP Syntax
    echo "Welcome to PHP Programming!";

    # Exercise 2: Variables and Data Types
    $name = "Juan Dela Cruz";
    $age = 20;
    $height = 5.7;
    $isStudent = true;
    echo "<br><br>Name: $name <br>";
    echo "Age: $age <br>";
    echo "Height: $height <br>";
    echo "Is Student: $isStudent <br>";

    # Exercise 3: Conditional Statements
    $grade = 85;
    if ($grade >= 75) { 
        echo "<br>Status: Passed";
    } else {
        echo "<br>Status: Failed";
    } 

    # Excercise 3 - Challenge
    $grade_challenge = 74; 
    if ($grade_challenge >= 90 && $grade_challenge <= 100) {
        echo "<br><br>Excellent";
    } else if ($grade_challenge >= 80) {
        echo "<br><br>Good"; 
    } else if ($grade_challenge >= 75) {
        echo "<br><br>Fair"; 
    } else {
        echo "<br><br>Failed"; 
    }

    # Exercise 4: Arrays and Array Functions
    $subjects = array("Math", "Science", "English", "Programming", "History");
    echo "<br><br> Subjects: <br>";
    foreach($subjects as $subject) {
        echo $subject . "<br>";
    }
    echo "<br>Total Subjects: " . count($subjects);

    # Exercise 4 - Try This
    sort($subjects);
    echo "<br><br> Sorted Subjects: <br>"; 
    foreach($subjects as $subject) {
        echo $subject . "<br>";
    }
    echo "<br>Total Subjects: " . count($subjects);

    # Exercise 5: Loops
    # For Loop
    echo "<br><br>";
    for($i = 1; $i <= 10; $i++) { 
        echo $i . " ";
    }

    # While Loop
    $i = 1; 
    echo "<br>";
    while($i <= 10) {
        echo $i . " "; 
        $i++;
    }

    # Integrated Exercise
    $student1 = "Theodore Kyle";
    $grades1 = array(85, 90, 78, 88);
    $student2 = "Ron Christian"; 
    $grades2 = array(74, 74, 74, 75); 

    echo "<br><br> Grades for " . $student1 . ": ";
    for ($a = 0; $a < count($grades1); $a++) {
        echo $grades1[$a] . "&nbsp&nbsp";
    }
    echo "<br> Average: ";
    $avg_grade = array_sum($grades1) / count($grades1);
    echo $avg_grade;
    if($avg_grade >= 75 && $avg_grade <= 100) { 
        echo "<br>You Passed!";
    } else {
        echo "<br>You Failed"; 
    }

    echo "<br><br> Grades for " . $student2 . ": ";
    for ($a = 0; $a < count($grades2); $a++) {
        echo $grades2[$a] . "&nbsp&nbsp"; 
    }
    echo "<br> Average: ";
    $avg_grade2 = array_sum($grades2) / count($grades2);
    echo $avg_grade2;
    if($avg_grade2 >= 75 && $avg_grade2 <= 100) { 
        echo "<br>You Passed!";
    } else {
        echo "<br>You Failed"; 
    }
?>