<?php
$fruits = ["apple", "mango", "banana"];

//array_push($fruits, "orange");
//array_pop($fruits);

//echo $fruits[0];

//echo "<br>";
//print_r($fruits);

//echo "<br>";
//var_dump($fruits);
?>


<ul>
    <?php for($i = 0; $i < count($fruits); $i++) { ?>
            <li><?php echo $fruits[$i];?></li>
    <?php } ?>
</ul>


<?php
$person = [
    "name" => "Ron", 
    "age" => 20, 
    "course" => "BSIT"
    ];
        echo $person['name'];
        echo "<br>";
        echo $person['age'];
        echo "<br>";
        echo $person['course'];

?>


<?php 
    $students = [
        ['name' => 'Christian', 'age' => 21, 'course' => 'BSIT'],
        ['name' => 'Carl', 'age' => 20, 'course' => 'BSN'],
        ['name' => 'Theodore', 'age' => 19, 'course' => 'BSME'],
    ];
    //echo "<br><br>";
    //echo $students[0]['name'];
    //echo "<br>";
    //echo $students[1]['name'];
    //echo "<br>";
    //echo $students[2]['name'];
    //echo "<br>";

    foreach ($students as $student){
        echo $student['name'],  $student['age'],  $student['course'];
    }
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Course</th>
    </tr>
    <tr>
    <?php foreach($students as $student){ ?>
        <td><?php echo$student['name'] ?></td>
        <td><?php echo$student['age'] ?></td>
        <td><?php echo$student['course'] ?></td>
    </tr>
    <?php } ?>

</table>    