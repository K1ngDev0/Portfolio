<?php 

$studentNumber = $_POST['numberUsername'];
$password = $_POST['password'];
$phoneNumber = $_POST['number'];
$birthDate = $_POST['date'];
$likeStudy = $_POST['yes_no'];
$studyChoice = $_POST['why'];
$mostColor = $_POST['color'];
$rating = $_POST['range'];
$startTime = $_POST['appt'];
$happyStudy = $_POST['checkbox'];

echo file_put_contents('contactform.txt', $studentNumber . ', ' . $password . ', ' . $phoneNumber . ', ' . $birthDate . ', ' . $likeStudy . ', ' . $studyChoice . ', ' . $mostColor . ', ' . $rating . ', ' . $startTime . ', ' . $happyStudy, FILE_APPEND);

// header("location: ../index.php");

?>