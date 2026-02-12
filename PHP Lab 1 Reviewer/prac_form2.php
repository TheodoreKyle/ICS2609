<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Input Submissions</title>
</head>
<body>

    <?php
        session_start();
        if (!isset($_SESSION['people'])) {
            $_SESSION['people'] = [];
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $firstName = htmlspecialchars($_POST["firstName"]);
            $lastName = htmlspecialchars($_POST["lastName"]);
            $age = htmlspecialchars($_POST["age"]);
            $email = htmlspecialchars($_POST["email"]);
            $grdlvl = htmlspecialchars($_POST["grdlvl"]);
            $brand = isset($_POST["brand"]) ? implode(", ", array_map("htmlspecialchars", $_POST["brand"])) : "None";

            $people = [
                "firstName" => $firstName,
                "lastName" => $lastName,
                "age" => $age,
                "email" => $email,
                "grdlvl" => $grdlvl,
                "brand" => $brand
            ];

            $_SESSION["people"][] = $people;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    ?>

    <form action="" method="post">
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName" id="firstName"><br><br>

        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName" id="lastName"><br><br>

        <label for="age">Age: </label>
        <input type="number" name="age" id="age"><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email"><br><br>

        <label for="grdlvl">Grade Level: </label><br><br>
        <input type="radio" id="7" name="grdlvl" value="7">
        <label for="7">7</label><br>

        <input type="radio" id="8" name="grdlvl" value="8">
        <label for="8">8</label><br>

        <input type="radio" id="9" name="grdlvl" value="9">
        <label for="9">9</label><br>

        <input type="radio" id="10" name="grdlvl" value="10">
        <label for="10">10</label><br>

        <input type="radio" id="11" name="grdlvl" value="11">
        <label for="11">11</label><br>

        <input type="radio" id="12" name="grdlvl" value="12">
        <label for="12">12</label><br>

        <input type="radio" id="College" name="grdlvl" value="College">
        <label for="College">College</label><br><br>

        <label for="brand">Brands that feel trustworthy for you: </label><br>
        <input type="checkbox" name="brand[]" id="brand" value="Brand A">
        <label for="Brand A">Brand A</label><br>

        <input type="checkbox" name="brand[]" id="brand" value="Brand B">
        <label for="Brand B">Brand B</label><br>

        <input type="checkbox" name="brand[]" id="brand" value="Brand C">
        <label for="Brand C">Brand C</label><br>

        <input type="checkbox" name="brand[]" id="brand" value="Brand D">
        <label for="Brand D">Brand D</label><br>

        <input type="checkbox" name="brand[]" id="brand" value="Brand E">
        <label for="Brand E">Brand E</label><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    
    <table border="1" cellpadding="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Grade Level</th>
            <th>Chosen Brand</th>
        </tr>
        <tr>
            <?php foreach ($_SESSION["people"] as $people) { ?>
                <td> <?php echo $people["firstName"] ?> </td>
                <td> <?php echo $people["lastName"] ?> </td>
                <td> <?php echo $people["age"] ?> </td>
                <td> <?php echo $people["email"] ?> </td>
                <td> <?php echo $people["grdlvl"] ?> </td>
                <td> <?php echo $people["brand"] ?> </td>
        </tr>
        <?php } ?>
        
    </table>
</body>
</html>