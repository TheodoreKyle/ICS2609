<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form #2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['students'])){
            $_SESSION['students'] = [];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $student = [
            "firstName" => htmlspecialchars($_POST['firstName']),
            "lastName"  => htmlspecialchars($_POST['lastName']),
            "age"       => htmlspecialchars($_POST['age']),
            "email"     => htmlspecialchars($_POST['email']),
            "course"    => htmlspecialchars($_POST['course'])
        ];

        $_SESSION['students'][] = $student;
        }
    ?>

    <form action="" method="POST">
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName" id="firstName"><br>

        <label for="firstName">Last Name: </label>
        <input type="text" name="lastName" id="lastName"><br>

        <label for="age">Age: </label>
        <input type="number" name="age" id="age"><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br>

        <label for="course">Course </label><br>
        <input type="radio" id="it" name="course" value="it">
        <label for="it">Information Technology</label><br>
        <input type="radio" id="cs" name="course" value="cs">
        <label for="cs">Computer Science</label><br>
        <input type="radio" id="is" name="course" value="is">
        <label for="is">Information Systems</label><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Course</th>
    </tr>

    
    <?php foreach($_SESSION['students'] as $student){ ?>
    <tr>
        <td><?php echo$student['firstName'] ?></td>
        <td><?php echo$student['lastName'] ?></td>
        <td><?php echo$student['age'] ?></td>
        <td><?php echo$student['email'] ?></td>
        <td><?php echo$student['course'] ?></td>
    </tr>
    <?php } ?>

</table>
</body>
</html>