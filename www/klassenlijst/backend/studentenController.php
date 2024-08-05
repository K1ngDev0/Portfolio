<?php

if($_GET['action'] == 'create')
{
    //Variabelen vullen
    $naam = $_POST['naam'];
    $woonplaats = $_POST['woonplaats'];
    $leeftijd = $_POST['leeftijd']; 
    $geboortedatum = $_POST['geboortedatum'];

    if(isset($_POST['ingeschreven'])){
        $ingeschreven = 1;
    }
    else {
        $ingeschreven = 0;
    }

    $niveau = $_POST['niveau'];
    if(empty($niveau))
    {
        $error[] = "Vul je niveau in.";
    }

    //1. Verbinding
    require_once 'conn.php';

    //2. Query

    $query = "INSERT INTO studenten (naam, woonplaats, leeftijd, geboortedatum, ingeschreven, niveau)
    VALUES(:naam, :woonplaats, :leeftijd, :geboortedatum, :ingeschreven, :niveau)";

    //3. Prepare

    $statement = $conn->prepare($query);

    $statement->execute([
        ":naam" => $naam,
        ":woonplaats" => $woonplaats,
        ":leeftijd" => $leeftijd,
        ":geboortedatum" => $geboortedatum,
        ":ingeschreven" => $ingeschreven,
        ":niveau" => $niveau,
    ]);

    //4. Execute

    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../studenten/index.php");
}

if($_GET['action'] == "edit")
{
    $id = $_GET['id'];
    $naam = $_POST['naam'];
    $woonplaats = $_POST['woonplaats'];
    $leeftijd = $_POST['leeftijd']; 
    $geboortedatum = $_POST['geboortedatum'];

    if(isset($_POST['ingeschreven'])){
        $ingeschreven = 1;
    }
    else {
        $ingeschreven = 0;
    }

    $niveau = $_POST['niveau'];
    if(empty($niveau))
    {
        $error[] = "Vul je niveau in.";
    }

    //1. Verbinding
    require_once 'conn.php';

    //2. Query

    $query = "UPDATE studenten SET naam = :naam, woonplaats = :woonplaats, leeftijd = :leeftijd, geboortedatum = :geboortedatum, ingeschreven = :ingeschreven, niveau = :niveau WHERE id = :id";

    //3. Prepare

    $statement = $conn->prepare($query);

    $statement->execute([
        ":naam" => $naam,
        ":woonplaats" => $woonplaats,
        ":leeftijd" => $leeftijd,
        ":geboortedatum" => $geboortedatum,
        ":ingeschreven" => $ingeschreven,
        ":niveau" => $niveau,
        ":id" => $id,
    ]);

    //4. Execute

    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

    header("Location: ../studenten/index.php");   
}

if($_GET['action'] == "delete")
{
    $id = $_GET['id'];

    require_once 'conn.php';

    $query = "DELETE FROM studenten WHERE id = :id";

    $statement = $conn->prepare($query);

    $statement->execute([
        ":id" => $id,
    ]);

    $items = $statement->fetch(PDO::FETCH_ASSOC);

    header("Location: ../studenten/index.php");   
}
