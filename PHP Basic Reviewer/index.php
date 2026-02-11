<html>

<head>
    <title>PHP Starter</title>
</head>

<body>

<?php
/*
===============================================
PHP REVIEW MACHINE PROBLEM — CODESANDBOX VERSION
===============================================

Topics covered:
- Variables & Data Types
- Arrays & Loops
- Conditional Statements
- Functions
- Associative Arrays
- String Functions
- HTML Table Output
- File Handling
- Filtering
*/

echo "<h1>PHP REVIEW MACHINE PROBLEM</h1>";

/*------------------------------------------------------------
PROBLEM 1 — STUDENT INFORMATION
--------------------------------------------------------------
Task: Create variables: name, course, yearLevel, isEnrolled
Display them using echo. Show Yes/No for boolean.
HINT: Use ternary operator
*/
$name = "Theodore Kyle Choa"; 
$course = "BSIT"; 
$yearLevel = "2nd Year"; 
$isEnrolled = true;

echo "Name: " . $name . "<br>";
echo "Course: " . $course . "<br>";
echo "Year Level: " . $yearLevel . "<br>";
echo "Enrolled: ";
echo ($isEnrolled == true) ? "Yes" : "No";
/*------------------------------------------------------------
PROBLEM 2 — GRADES ARRAY
--------------------------------------------------------------
Task: Create an array of 5 grades and display them
HINT: Use foreach loop
*/
$grades = array(84,95,89,78,74); // TODO: Replace with actual grades
echo "<h3>GRADES</h3>";
foreach ($grades as $grade) {
    // TODO: display each grade
    echo $grade . "<br>";
}

/*------------------------------------------------------------
PROBLEM 3 — COMPUTE AVERAGE
--------------------------------------------------------------
Task: Create a function computeAverage($grades) that returns the average
HINT: Use array_sum() and count()
*/
function computeAverage($grades) {
    // TODO
    // $sum = array_sum(______);
    // $count = count(_______);
    
    $sum = array_sum($grades);
    $count = count($grades);
    return ($count > 0) ? $sum / $count : 0;
}
$average = computeAverage($grades);
echo "<br>Average Grade: " . $average . "<br>";

/*------------------------------------------------------------
PROBLEM 4 — REMARKS
--------------------------------------------------------------
Task: Display remark based on average
HINT: if / elseif / else
*/
echo "Remark: ";
// TODO: Add conditionals
// ($average >= 90)  "Excellent";
// ($average >= 80)  "Good";
//  $average >= 75)  "Fair";
// else  "Failed";
if ($average >= 90) {
    echo "Excellent";
}
else if ($average >= 80) {
    echo "Good";
}
else if ($average >= 75) {
    echo "Fair"; 
}
else {
    echo "Failed";
}

/*------------------------------------------------------------
PROBLEM 5 — SORTING AND STATISTICS
--------------------------------------------------------------
Task: Sort grades, display highest & lowest
HINT: sort(), max(), min()
*/
sort($grades); // TODO
echo "<h3>GRADE STATISTICS</h3>";
echo "Sorted Grades: ";
// use loop to display sorted $grades
foreach ($grades as $grade) {
    echo $grade . "&nbsp&nbsp";
}
echo "<br>";
echo "Highest Grade: " . max($grades) . "<br>"; // TODO
echo "Lowest Grade: " . min($grades) . "<br><br>"; // TODO

/*------------------------------------------------------------
PROBLEM 6 — LOOP CHALLENGE
--------------------------------------------------------------
Task: Display EVEN numbers from 2 to 20
HINT: for loop + modulo %
*/
echo "<h3>EVEN NUMBERS</h3>";
for ($i = 2; $i <= 20; $i++) {
     // TODO
     if ($i % 2 == 0) {
        echo $i . "&nbsp&nbsp";
     }
}
echo "<br><br>";

/*------------------------------------------------------------
PROBLEM 7 — STRING FUNCTIONS
--------------------------------------------------------------
Task: Use a student's full name. Display:
- Uppercase
- Lowercase
- First name
HINT: strtoupper(), strtolower(), explode()
*/
$fullName = "Theodore Kyle Q. Choa"; // TODO
echo "<h3>STRING FUNCTIONS</h3>";
echo "Uppercase: " . strtoupper($fullName) . "<br>"; // TODO
echo "Lowercase: " . strtolower($fullName) . "<br>"; // TODO
// $parts = explode(" ", $fullName);
// echo $parts[0]; // TODO
$parts = explode(" ", $fullName);
echo "First Name: " . $parts[0] . "<br><br>";

/*------------------------------------------------------------
PROBLEM 8 — HTML TABLE OF STUDENTS
--------------------------------------------------------------
Task: Create array of 3 students (associative arrays)
Display in HTML table
HINT: Use <table>, <tr>, <th>, <td>
*/
$students = array(
    array('name'=>'Juan dela Cruz','id'=>'0001','course'=>'BSIT'),
    array('name'=>'Maria Santos','id'=>'0002','course'=>'BSCS'),
    array('name'=>'Pedro Reyes','id'=>'0003','course'=>'BSIS')
);
// use for loop
// TODO
?>
<table border="1" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Course</th>
    </tr>

    <tr>
    <?php foreach($students as $student){ ?>
        <td><?php echo$student['name'] ?></td>
        <td><?php echo$student['id'] ?></td>
        <td><?php echo$student['course'] ?></td>
    </tr>
    <?php } ?>
</table>

<?php
/*------------------------------------------------------------
PROBLEM 9 — FILE HANDLING
--------------------------------------------------------------
Task: Save grades array to "grades.txt", then read and display
HINT: file_put_contents(), file_get_contents(), implode()
*/
// file_put_contents("filename.txt", implode(",", $grades)); // TODO
// echo "<h3>GRADES FROM FILE</h3>";
// $contents = file_get_contents("filename.txt"); // TODO
// echo "Grades: " . $contents . "<br><br>";
file_put_contents("grades.txt", implode(",", $grades));
echo "<h3>GRADES FROM FILE</h3>";
$contents = file_get_contents("grades.txt");
echo "Grades: " . $contents . "<br><br>";

/*------------------------------------------------------------
PROBLEM 10 — FILTERING
--------------------------------------------------------------
Task: Display only passing grades (>=75)
HINT: foreach + if
*/
echo "<h3>PASSING GRADES</h3>";
foreach ($grades as $g) {
    //Create a condition to check if $g is lessthan 75   //TODO
    if ($g <= 75) {
        continue;
    }
    echo $g . "&nbsp&nbsp";
}
?>

</body>
</html>