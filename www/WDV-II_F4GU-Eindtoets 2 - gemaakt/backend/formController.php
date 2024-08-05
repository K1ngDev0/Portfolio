<?php 

$name = $_POST['name'];
$id = $_POST['id'];
$message = $_POST['message'];

echo file_put_contents('contactform.txt', $name . ', ' . $id . ', ' . $message, FILE_APPEND);

header("location: ../index.php");

?>