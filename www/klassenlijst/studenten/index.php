<?php
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg = "Je moet eerst inloggen!";
        header("Location: ../login.php?msg=$msg");
        exit;
    }
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Klassenlijst / Studenten</title>
    <?php require_once (__DIR__.'/../head.php'); ?>
</head>

<body>
    <?php require_once '../header.php'; ?>
    
    <div class="container">
        <h1>Studenten</h1>
        <a href="create.php">Nieuwe student &gt;</a>

        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <form action="" method="GET">
            <select name="filter">
                <option value=""> - Kies je niveau - </option>
                <option value="Niveau 1">Niveau 1</option>
                <option value="Niveau 2">Niveau 2</option>
                <option value="Niveau 3">Niveau 3</option>
                <option value="Niveau 4">Niveau 4</option>
            </select>
            <input type="submit" value="Filteren">
        </form>

        <?php
        if(isset($_GET['filter']))
        {
            require_once("../backend/conn.php");
            $query = "SELECT * FROM studenten WHERE niveau = :niveau";
            $statement = $conn->prepare($query);
            $statement->execute([
                ':niveau' => $_GET['filter'],
            ]);
            $studenten = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            require_once("../backend/conn.php");
            $query = "SELECT * FROM studenten";
            $statement = $conn->prepare($query);
            $statement->execute();
            $studenten = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        ?>

        <table>
            <tr>
                <th>Naam</th>
                <th>Woonplaats</th>
                <th>Leeftijd</th>
                <th>Geboortedatum</th>
                <th>Ingeschreven</th>
                <th>Niveau</th>
                <th>Actions</th>
            </tr>
            <?php foreach($studenten as $student): ?>
                <tr>
                    <td><?php echo $student['naam']; ?></td>
                    <td><?php echo $student['woonplaats']; ?></td>
                    <td><?php echo $student['leeftijd']; ?></td>
                    <td><?php echo $student['geboortedatum']; ?></td>
                    <td>
                        <?php
                            if($student['ingeschreven']) {
                                echo "Ja";
                            } else {
                                echo "Nee";
                            }
                        ?>
                    </td>
                    <td><?php echo $student['niveau']; ?></td>
                    <td><a href="edit.php?id=<?php echo $student["id"];?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>  

</body>

</html>
