<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo file_put_contents('contactform.txt', $name . ', ' . $email . ', ' . $message . FILE_APPEND);
header("location: ../../../public/index.php")

?>