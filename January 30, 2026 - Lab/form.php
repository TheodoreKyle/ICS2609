<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        session_start();
        if (!isset($_SESSION['students'])){
            $_SESSION['students'] = [];
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        $student = ["firstName" => $firstName, "lastName" => $lastName];

        $_SESSION['students'][] = $student;
        }?>

    <form action="" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName">
        <label for="firstName">Last Name</label>
        <input type="text" name="lastName" id="lastName">
        <input type="submit" value="Submit">
    </form>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>

    <tr>
    <?php foreach($_SESSION ['students'] as $student){ ?>
        <td><?php echo$student['firstName'] ?></td>
        <td><?php echo$student['lastName'] ?></td>
    </tr>
    <?php } ?>

</table>
</body>
</html>