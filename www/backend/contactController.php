<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

file_put_contents('../contactverzoek.txt', $name . ", " . $email . " - " . $message, FILE_APPEND);


$msg = "Bedankt voor uw bericht, we nemen zo spoedig mogelijk contact met u op!";
header("location: ../index.php?msg=$msg");