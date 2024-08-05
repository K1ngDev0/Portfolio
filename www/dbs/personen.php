<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("conn.php");
        $query = "SELECT * FROM personen";
        $statement = $conn->prepare($query);
        $statement->execute();
        $personen = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <pre><?php print_r($personen); ?></pre>
    <h1>Naam: <?php echo $personen[0]['naam'] . ' ' . $personen[0]['achternaam'] ?></h1>
</body>
</html>