<?php 

if ($_GET['action'] == 'create')
{
    $title = $_POST['title'];
    $publisher = $_POST['publisher'];
    $platform = $_POST['platform']; 
    $release_date = $_POST['release_date'];
    $age_rating = $_POST['age_rating'];

    require_once '../../../config/conn.php';

    $query = "INSERT INTO games (title, publisher, platform, release_date, age_rating)
    VALUES(:title, :publisher, :platform, :release_date, :age_rating)";

    $statement = $conn->prepare($query);

    $statement->execute([
        ":title" => $title,
        ":publisher" => $publisher,
        ":platform" => $platform,
        ":release_date" => $release_date,
        ":age_rating" => $age_rating,
    ]);

    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../../../resources/views/index.php");
}