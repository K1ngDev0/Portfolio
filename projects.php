<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once("head.php")?>
    <title>K1ngDev | Projects</title>
</head>
<body>
    <?php 
        require_once("header.php");
        require_once("config/conn.php");
        $query = 'SELECT * From projecten';
        $statement = $conn->prepare($query);
        $statement->execute();
        $projecten = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="projectsWrapper">
        <h1 class="projectsTitle colored">Mijn Projecten</h1>
        <div class="projectItems">

            <?php foreach ($projecten as $row): ?>
                <div class="projectItem">
                        <img src="<?php echo $row ['thumbnail'];?>" alt="tumbnail projecten">
                        <button class="projectHolder">
                            <?php echo "<a href='singleProject.php?id={$row['id']}'>"?> 
                            <?php echo $row ['name'];?>
                        </button>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php require_once("footer.php");?>
</body>
</html>