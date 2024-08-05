<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K1ngDev | Project</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <?php 
        $id = $_GET['id'];
        require_once("../config/conn.php");
        $query = "SELECT * FROM projecten WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $project = $statement->fetch(PDO::FETCH_ASSOC);
        
        echo $project['name'];
        echo "<br />";
        echo $project['tekst_1'];
        echo "<br />";
        echo $project['tekst_2'];

        if ($project['gallary']) {
            $gallary = explode("|", $project['gallary']);
            $gallary = array_filter($gallary);
        }
    ?>

    <div class="gallary">
        <?php
        if ($project['gallary']) {
            foreach ($gallary as $image) {
                    echo '<div class="item">';
                    echo '<img src="' . $image . '" alt="Foto van het project">';
                    echo '</div>';
                }
        }
        ?>
    </div>
</body>
</html>