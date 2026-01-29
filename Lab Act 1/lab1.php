<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Exercise 1: Basic PHP Syntax</h2>
            <?php
                echo "Welcome to PHP Programming!";
            ?>
        </div>

        <div class="section">
            <h2>Exercise 2: Variables and Data Types</h2>
            <?php 
                $name = "Juan Dela Cruz";
                $age = 20;
                $height = 5.7;
                $isStudent = true;
                echo "Name: $name <br>";
                echo "Age: $age <br>";
                echo "Height: $height <br>";
                echo "Is Student: $isStudent <br>";
            ?>
        </div>

        <div class="section">
            <h2>Exercise 3: Conditional Statements</h2>
            <?php 
                $grade = 85;
                echo "Grade: " . $grade;
                if ($grade >= 75) { 
                    echo "<br>Status: Passed";
                } else {
                    echo "<br>Status: Failed";
                } 
            ?>
        </div> 

        <div class = "section">
            <h2>Exercise 3: Challenge</h2>
            <?php 
                $grade_challenge = 74; 
                echo "Grade: " . $grade_challenge;
                if ($grade_challenge >= 90 && $grade_challenge <= 100) {
                    echo "<br>Status: Excellent";
                } else if ($grade_challenge >= 80) {
                    echo "<br>Status: Good"; 
                } else if ($grade_challenge >= 75) {
                    echo "<br>Status: Fair"; 
                } else {
                    echo "<br>Status: Failed"; 
                }
            ?>
        </div>

        <div class="section">
            <h2>Exercise 4: Subjects</h2>
            <?php
                $subjects = array("Math", "Science", "English", "Programming", "History");

                echo "<ul>";
                foreach ($subjects as $subject) {
                    echo "<li>$subject</li>";
                }
                echo "</ul>";
                echo "Total Subjects: " . count($subjects);

                sort($subjects);
                echo "<h4>Sorted Subjects</h4><ul>";
                foreach ($subjects as $subject) {
                    echo "<li>$subject</li>";
                }
                echo "</ul>";
            ?>
        </div>

        <div class = "section">
            <h2>Exercise 5: <code>for</code> and <code>while</code> Loops</h2>
            <?php
                for($i = 1; $i <= 10; $i++) { 
                    echo $i . " ";
                } 
            ?>
        </div>

        <div class = "section">
            <?php
                $i = 1; 
                while($i <= 10) {
                    echo $i . " "; 
                    $i++;
                }
            ?>
        </div>

        <div class="section">
            <h2>Integrated Exercise - Student Information System</h2>
            <?php
                $student1 = "Theodore Kyle";
                $grades1 = array(85, 90, 78, 88);

                $avg1 = array_sum($grades1) / count($grades1);
                echo "<strong>$student1</strong><br>";
                echo "Grades: ";
                for ($a = 0; $a < count($grades1); $a++) {
                    echo $grades1[$a] . "&nbsp&nbsp"; 
                }
                echo "<br>Average: $avg1<br>";
                if($avg1 >= 75) {
                    echo "<span class='pass'>You Passed!</span>";
                } else {
                    echo "<span class='fail'>You Failed</span>";
                }
                echo "<br><br>";

                $student2 = "Ron Christian";
                $grades2 = array(74, 74, 74, 75);

                $avg2 = array_sum($grades2) / count($grades2);
                echo "<strong>$student2</strong><br>";
                echo "Grades: ";
                for ($a = 0; $a < count($grades2); $a++) {
                    echo $grades2[$a] . "&nbsp&nbsp"; 
                }
                echo "<br>Average: $avg2<br>";
                if($avg2 >= 75) {
                    echo "<span class='pass'>You Passed!</span>";
                } else {
                    echo "<span class='fail'>You Failed</span>";
                }
            ?>
        </div>
    </div>
        
</body>
</html>