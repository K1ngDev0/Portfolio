<?php

require_once "conn.php";

// Variabelen ophalen
$naam = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];

// Query maken
$query = "INSERT INTO personen (naam, achternaam, email) VALUES(:naam, :achternaam, :email)";

// Query voorbereiden
$statement = $conn->prepare($query);

// Query uitvoeren
$statement->execute([
    ":naam" => $naam,
    ":achternaam" => $achternaam,
    ":email" => $email,
]);
