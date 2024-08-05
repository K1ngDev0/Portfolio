<!doctype html>
<html lang="nl">

<head>
    <title>Klassenlijst / Studenten / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    <?php
            require_once("../backend/conn.php");
            $query = "SELECT * FROM studenten WHERE id = :id" ;
            $statement = $conn->prepare($query);
            $statement->execute([
                ":id" => $_GET['id'],
            ]);
            $student = $statement->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="container">
        <h1>Edit student</h1>

        <form action="../backend/studentenController.php?action=edit&id=<?php echo $_GET['id']; ?>" method="POST">
        
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam" class="form-input" value="<?php echo $student['naam']; ?>">
            </div>
            <div class="form-group">
                <label for="leeftijd">Leeftijd:</label>
                <input type="number" min="0" name="leeftijd" id="leeftijd" class="form-input" value="<?php echo $student['leeftijd']; ?>">
            </div>
            <div class="form-group">
                <label for="type">Woonplaats:</label>
                <input type="text" name="woonplaats" id="woonplaats" class="form-input" value="<?php echo $student['woonplaats']; ?>">
            </div>
            <div class="form-group">
                <label for="geboortedatum">Geboortedatum:</label>
                <input type="date" name="geboortedatum" id="geboortedatum" class="form-input" value="<?php echo $student['geboortedatum']; ?>">
            </div>
            <div class="form-group">
                <label for="ingeschreven">Ingeschreven:</label>
                <input type="checkbox" name="ingeschreven" id="ingeschreven" class="form-input" <?php if($student['ingeschreven']) {echo "checked";} ?>>
            </div>
            <div class="form-group">
                <label for="niveau">Niveau:</label>
                <select name="niveau" id="niveau">
                    <option value="">- kies een niveau -</option>
                    <option value="Niveau 1" <?php if ($student['niveau'] == "Niveau 1"){echo "selected "; }?>>Niveau 1</option>
                    <option value="Niveau 2" <?php if ($student['niveau'] == "Niveau 2"){echo "selected "; }?>>Niveau 2</option>
                    <option value="Niveau 3" <?php if ($student['niveau'] == "Niveau 3"){echo "selected "; }?>>Niveau 3</option>
                    <option value="Niveau 4" <?php if ($student['niveau'] == "Niveau 4"){echo "selected "; }?>>Niveau 4</option>
                </select>
            </div>
            
            <input type="submit" value="Student opslaan">

        </form>

        <form action="../backend/studentenController.php?action=delete&id=<?php echo $_GET['id']; ?>" method="POST">
            <input type="submit" value="Melding verwijderen">
        </form>
    </div>  

</body>

</html>
