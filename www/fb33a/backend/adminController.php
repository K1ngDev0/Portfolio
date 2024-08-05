<?php

$action = $_POST['action'];
if($action == "create")
{
    //Haal variabelen op, doe inputvalidatie
    $titel = $_POST['titel'];
    if(empty($titel))
    {
        die("Vul een titel in");
    }

    $beschrijving = $_POST['beschrijving'];
    if(empty($beschrijving))
    {
        die("Vul de beschrijving in");
    }

    $genre = $_POST['genre'];
    if(empty($genre))
    {
        die("Vul je genre in.");
    }

    $leeftijd = $_POST['leeftijd'];
    
    if(isset($_POST['premiere'])){
        $premiere = 1;
    }
    else {
        $premiere = 0;
    }

    require_once 'conn.php';
    $query = "INSERT INTO films (titel, beschrijving, genre, leeftijd, premiere) VALUES(:titel, :beschrijving, :genre, :leeftijd, :premiere)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":genre" => $genre,
        ":leeftijd" => $leeftijd,
        ":premiere" => $premiere,
    ]);

    header("Location: ../admin/index.php?msg=Opgeslagen");
}

if($action == "edit")
{
    //Haal variabelen op, doe inputvalidatie
    $titel = $_POST['titel'];
    if(empty($titel))
    {
        die("Vul een titel in");
    }

    $beschrijving = $_POST['beschrijving'];
    if(empty($beschrijving))
    {
        die("Vul de beschrijving in");
    }

    $genre = $_POST['genre'];
    if(empty($genre))
    {
        die("Vul je genre in.");
    }

    $leeftijd = $_POST['leeftijd'];
    
    if(isset($_POST['premiere'])){
        $premiere = 1;
    }
    else {
        $premiere = 0;
    }

    require_once 'conn.php';
    $query = "UPDATE films SET titel = :titel, beschrijving = :beschrijving, genre = :genre, leeftijd = :leeftijd, premiere = :premiere WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":genre" => $genre,
        ":leeftijd" => $leeftijd,
        ":premiere" => $premiere,
        ":id" => $_POST['id']
    ]);

    header("Location: ../admin/index.php?msg=Aangepast");
}


if($_GET['action'] == "delete")
{
    $id = $_GET['id'];
    require_once 'conn.php';
    $query = "DELETE FROM films WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id,
    ]);
    $items = $statement->fetch(PDO::FETCH_ASSOC);
    header("Location: ../admin/index.php?msg=Verwijderd");  
}

// $user['name'];
// print_r($user); //Debuggen

// $_POST['prio'];
// $_SESSION['user_id'];
