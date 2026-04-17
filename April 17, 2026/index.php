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

    $gender = "Male"; 
    $query = "SELECT * FROM MOCK_DATA WHERE gender = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$gender]);
    $users = $stmt->fetchAll();

    foreach ($users as $user) {
        echo "$user->first_name $user->last_name     $user->gender" . "<br>";
    }

    // $id = 999;
    // $first_name = "Theodore Kyle";
    // $last_name = "Choa";
    // $email = "theodorekyle.choa.cics@ust.edu.ph";
    // $gender = "Male"; 

    // $query = "INSERT INTO MOCK_DATA (id, first_name, last_name, email, gender) VALUES (?, ?, ?, ?, ?)"; 
    // $stmt = $pdo->prepare($query);
    // $stmt->bindParam(1, $id);
    // $stmt->bindParam(2, $first_name);
    // $stmt->bindParam(3, $last_name);
    // $stmt->bindParam(4, $email);
    // $stmt->bindParam(5, $gender);
    // if ($stmt->execute()) {
    //     echo "New Record Created"; 
    // }
    // $stmt->execute([$id, $first_name, $last_name, $email, $gender]); 
?>