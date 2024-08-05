<?php
require_once '../../../config/conn.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

$query = "SELECT * FROM users WHERE email = :email OR username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ':email' => $email,
    ':username' => $username,
]);

if ($statement->rowCount() > 0) {
    $existingUser = $statement->fetch(PDO::FETCH_ASSOC);
    if ($existingUser['email'] == $email) {
        header("Location: ../../../public/index.php?msgR=Email already in-use");
        exit;
    }
    if ($existingUser['username'] == $username) {
        header("Location: ../../../public/index.php?msgR=Username already in-use");
        exit;
    }
}

if ($password_repeat != $password) {
    header("Location: ../../../public/index.php?msgR=Password doesn't match");
    exit;
}

if(strlen($password) < 8) {
    header("Location: ../../../public/index.php?msgR=Password must contain at least 8 letters");
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, email, password) VALUES(:username, :email, :password)";
$statement = $conn->prepare($query);
$statement->execute([
    ':username' => $username,
    ':email' => $email,
    ':password' => $hashed_password,
]);

header("Location: ../../../public/index.php");