<?php
    session_start();
    
    $loginInput = $_POST['loginInput'];
    $password = $_POST['password'];

    require_once '../../../config/conn.php';

    if (filter_var($loginInput, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM users WHERE email = :loginInput";
    } else {
        $query = "SELECT * FROM users WHERE username = :loginInput";
    }
    
    $statement = $conn->prepare($query);
    $statement->execute([
        ':loginInput' => $loginInput,
    ]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($statement->rowCount() < 1)
    {
        header("Location: ../../../public/index.php?msgL=Username or email doesn't exist!");
        exit;
    }

    if(!password_verify($password, $user['password']))
    {
        header("Location: ../../../public/index.php?msgL=Password is incorrect!");
        exit;
    }

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header("Location: ../../../public/index.php");
    exit;