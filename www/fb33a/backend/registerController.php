<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: ../index.php?msg=Je hebt al een account. Je bent al ingelogd.");
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];

if ($password !== $password_check) {
    header("Location: ../register.php?msg=De wachtwoorden komen niet overeen.");
    exit;
}
if (empty($password)) {
    header("Location: ../register.php?msg=Wachtwoord mag niet leeg zijn.");
    exit;
}

require_once 'conn.php';
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ':username' => $username,
]);

if ($statement->rowCount() > 0) {
    header("Location: ../login.php?msg=Jouw account bestaat al, log in om gebruik te maken van het systeem.");
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, password) VALUES (:username, :hash)";
$statement = $conn->prepare($query);
$statement->execute([
    ':username' => $username,
    ':hash' => $hash
]);

header("Location: ../login.php?msg=Uw account is aangemaakt. Log in om het systeem te gebruiken.");
exit;