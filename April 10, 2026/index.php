<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    require_once("config/config.php");
    
    $host = DB_HOST;
    $user = DB_USER; 
    $password = DB_PASSWORD;
    $dbname = DB_NAME;
    try {
        // Data Source Name
        $dsn = "mysql:host=$host;dbname=$dbname";

        // Create PDO Instance
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully <br>";     

    } catch (PDOException $error) {
        echo "Connection Failed: " . $error -> getMessage() . "<br>"; 
    }

    // PDO Statement Query
    // $stmt = $pdo->query("SELECT * FROM users"); 
    // while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    //     echo $row['first_name'] . " ".$row['last_name'] . "<br>"; 
    // }

    // $stmt = $pdo->query("SELECT * FROM users WHERE gender = 'female'"); 
    // while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //     echo $row->first_name . " ". $row->last_name . " ". $row->gender ."<br>"; 
    // }
    
    // Position Parameter
    // $gender = "Female"; 
    // $query = "SELECT * FROM users WHERE gender = ?";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$gender]);
    // $users = $stmt->fetchAll();

    // foreach ($users as $user) {
    //     echo "$user->first_name $user->last_name     $user->gender" . "<br>";
    // }

    // Name Parameter
    $gender = "Male"; 
    $query = "SELECT * FROM users WHERE gender = :gender";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':gender' => $gender]);
    $users = $stmt->fetchAll();

?>

<table border = "1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($users as $user) { ?> 
    <tr>
        <td><?php echo $user->first_name ?></td>
        <td><?php echo $user->last_name ?></td>
        <td><?php echo $user->gender ?></td>
    </tr>
    <?php } ?>
</table>