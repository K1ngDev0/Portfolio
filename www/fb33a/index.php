<?php
session_start();
require_once 'setup.toets.php';
require_once 'backend/config.php';
?>

<!doctype html>
<html lang="nl">

<?php
require_once 'head.php';
?>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container">

        <p style="color: darkgrey; margin: 20px 0; "><strong>DIT IS DE PUBLIEKE INDEX, DE 'MOOIE' PAGINA</strong></p>

        <?php
        require_once 'backend/conn.php';
        $query = "SELECT * FROM films";
        $statement = $conn->prepare($query);
        $statement->execute();
        $films = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="grid-container">
            <?php foreach($films as $film): ?>
                <div class="grid-item <?php if($film['premiere']) echo 'premiere'; ?>">
                    <p class="genre"><?php echo $film['genre'];?></p>
                    <h4><?php echo $film['titel']; ?></h4>
                    <p class="toptext"><?php echo $film['beschrijving']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</body>

</html>
