<html>

<head>
    <title>PHP Machine Problem 1</title>
</head>

<body>

<?php

echo "<h1>PHP MACHINE PROBLEM 1</h1>";
echo "<p>Follow the instructions and write your PHP code for each problem.</p>";

/*------------------------------------------------------------
PROBLEM 1 — PERSONAL PROFILE 2pts
--------------------------------------------------------------
Create variables:
- fullName
- age
- program
- isStudent

Display them.

HINT:
echo
ternary operator

SAMPLE OUTPUT:
Name: Juan Dela Cruz
Age: 20
Program: BSIT
Student: Yes
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 1</h1>";
$fullName = "Theodore Kyle Q. Choa";
$age = 19;
$program = "Information Technology";
$isStudent = true;

echo "Name: " . $fullName . "<br>";
echo "Age: " . $age . "<br>";
echo "Program: " . $program . "<br>";
echo "Student: ";
echo ($isStudent == true) ? "Yes" : "No" ;
echo "<br><br>";

/*------------------------------------------------------------
PROBLEM 2 — FAVORITE NUMBERS ARRAY 3pts
--------------------------------------------------------------
Create an array of 5 numbers and display them.

HINT:
array() / array = []
foreach

SAMPLE OUTPUT:
Favorite Numbers:
3
7
12
25
40
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 2</h1>";
$array1 = [55, 56, 57, 58, 59];
echo "Favorite Numbers: <br>"; 
foreach ($array1 as $number) {
    echo $number . "<br>";
}
echo "<br><br>";

/*------------------------------------------------------------
PROBLEM 3 — TOTAL AND AVERAGE 3pts
--------------------------------------------------------------
Create a function that computes total and average.

HINT:
function
array_sum()
count()

SAMPLE OUTPUT:
Numbers: 80, 85, 90
Total: 255
Average: 85
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 3</h1>";
function problem3() {
    $array2 = [100, 90, 80]; 
    echo "Numbers: ";
    foreach ($array2 as $number) {
        echo $number . "&nbsp&nbsp";
    }
    echo "<br>";
    echo "Total: " . array_sum($array2) . "<br>"; 
    echo "Average: " . array_sum($array2) / count($array2) . "<br>"; 
}
problem3(); 
echo "<br><br>";

/*------------------------------------------------------------
PROBLEM 4 — PASS OR FAIL CHECKER 2pts
--------------------------------------------------------------
Display Pass if score ≥ 75.

HINT:
if / else

SAMPLE OUTPUT:
Score: 78
Result: Pass
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 4</h1>";
$score = 76; 
echo "Score: " . $score . "<br>"; 
if ($score >= 75) {
    echo "Result: Pass"; 
}
else {
    echo "Result: Fail"; 
}
echo "<br><br>";

/*------------------------------------------------------------
PROBLEM 5 — NUMBER TABLE 3pts
--------------------------------------------------------------
Display numbers 1–10 inside an HTML table.

HINT:
<table>
for loop

SAMPLE OUTPUT:
Table showing numbers 1 to 10
*/

// WRITE YOUR CODE BELOW
?>
<?php echo "<h1>Problem 5</h1>"; ?>
<table border = "1", cellpadding = "7">
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
            <td><?php echo $i; ?></td>
        </tr>
    <?php } ?>
    </tr>
</table>
<br><br>

<?php
/*------------------------------------------------------------
PROBLEM 6 — MULTIPLICATION TABLE 3pts
--------------------------------------------------------------
Display multiplication table of 5.

HINT:
for loop

SAMPLE OUTPUT:
5 x 1 = 5
5 x 2 = 10
5 x 3 = 15
...
5 x 10 = 50
*/

// WRITE YOUR CODE BELOW
?>
<?php echo "<h1>Problem 6</h1>"; ?>
<table border = "1", cellpadding = "7">
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <tr>
            <td><?php echo 5 . " x " . $i . " = " . 5 * $i; ?></td>
        </tr>
    <?php } ?>
</table>
<br><br>

<?php
/*------------------------------------------------------------
PROBLEM 7 — STRING PROCESSING 3pts
--------------------------------------------------------------
Using a full name:
- uppercase
- lowercase
- last name

HINT:
strtoupper()
strtolower()
explode()

SAMPLE OUTPUT:
Original: Juan Dela Cruz
Uppercase: JUAN DELA CRUZ
Lowercase: juan dela cruz
Last Name: Cruz
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 7</h1>";
$fullName2 = "Theodore Kyle Choa";
echo "Original: " . $fullName2 . "<br>";
echo "Uppercase: " . strtoupper($fullName2) . "<br>";
echo "Lowercase: " . strtolower($fullName2) . "<br>";
$namepart = explode(" ", $fullName2);
echo "Last Name: " . $namepart[2] . "<br>";
echo "<br><br>";

/*------------------------------------------------------------
PROBLEM 8 — ASSOCIATIVE ARRAY (BOOK) 3pts
--------------------------------------------------------------
Create associative array:
title, author, year

Display values.

HINT:
associative array

SAMPLE OUTPUT:
Title: PHP Programming
Author: John Smith
Year: 2022
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 8</h1>";
$a_array = array('title'=>'PHP Programming', 'author'=>'John Smith', 'year'=>2022);
echo "Title: " . $a_array['title'] . "<br>"; 
echo "Author: " . $a_array['author'] . "<br>"; 
echo "Year: " . $a_array['year'] . "<br>";

/*------------------------------------------------------------
PROBLEM 9 — ASSOCIATIVE ARRAY TABLE 4pts
--------------------------------------------------------------
Create an associative array of subjects with the following keys:
- code
- name
- units

Display the data in an HTML table.

HINT:
associative array
foreach loop
<table>, <tr>, <th>, <td>

SAMPLE OUTPUT:
| Code  | Name       | Units |
| MATH101 | Math       | 3     |
| SCI102  | Science    | 4     |
| PROG103 | Programming| 3     |
*/

// WRITE YOUR CODE BELOW
?>
<h1>Problem 9</h1>
<?php
    $program = array(
                array('code'=>'MATH101', 'name'=>'Math', 'units'=>3),
                array('code'=> 'SCI102', 'name'=>'Science', 'units' =>4),
                array('code'=>'PROG103', 'name'=>'Programming', 'units' =>3)
            );
?>
<table border = "1", cellpadding = "7">
    <th>Code</th>
    <th>Name</th>
    <th>Units</th>

    <?php foreach ($program as $sep) { ?>
        <tr>
            <td><?php echo$sep['code'] ?></td>
            <td><?php echo$sep['name'] ?></td>
            <td><?php echo$sep['units'] ?></td>
        </tr>
    <?php } ?>
</table> 

<?php
/*------------------------------------------------------------
PROBLEM 10 — FILTERING NUMBERS 4pts
--------------------------------------------------------------
Display numbers greater than 50.

HINT:
foreach
if

SAMPLE OUTPUT:
55
70
90
*/

// WRITE YOUR CODE BELOW
echo "<h1>Problem 10</h1>";
$array10 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110];
foreach ($array10 as $num) {
    if ($num > 50) {
        echo $num . "<br>";
    }
}
?>

</body>
</html>