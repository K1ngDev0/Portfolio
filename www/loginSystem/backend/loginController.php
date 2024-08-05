<?php
    session_start();
    //Variabelen vullen
    $username = $_POST['username'];
    $password = $_POST['password'];

    //1. Verbinding
    require_once 'conn.php';

    //2. Query

    $query = "SELECT * FROM users WHERE username = :username";

    //3. Prepare

    $statement = $conn->prepare($query);

    $statement->execute([
        ':username' => $username,
    ]);

    //4. Execute

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($statement->rowCount() < 1)
    {
        die("Error: Gebruiker bestaat niet!");
    }

    if(!password_verify($password, $user['password']))
    {
        die('Error: Wachtwoord is incorrect!');
    }

    $_SESSION['user_id'] = $user['id'];

    header("Location: ../index.php");

?>