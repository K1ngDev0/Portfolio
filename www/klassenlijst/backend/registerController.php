<?php
    require_once 'conn.php';

    //Variabelen vullen
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    //2. Query

    $query = "SELECT username FROM users WHERE username = :username";

    //3. Prepare

    $statement = $conn->prepare($query);

    $statement->execute([
        ':username' => $username,
    ]);

    //4. Execute

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user)
    {
        header("Location: index.php");
        die();
    }

    if($password != $repeat_password)
    {
        header("Location: index.php");
        die();
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
    
    $statement = $conn->prepare($query);

    $statement->execute([
        "username" => $username,
        "password" => $hash,
    ]);

    header("Location: ../index.php");

?>