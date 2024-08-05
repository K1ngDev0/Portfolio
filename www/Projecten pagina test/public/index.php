<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K1ngDev | Projects</title>
    <style>
        img{
            width:100%;
            aspect-ratio: 1/1;
            border-radius: 25px;
        }
        .projecten{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-row-gap: 60px;
            width:80%;
            margin-left: 10%;
        }
        .item{
            width: 60%;
            margin-left: 20%;
        }
        a{
            background-color:grey;
            padding-bottom: 80px;
            text-decoration: none;
        }
        .holder{

            border-radius: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            color:black;
            background-color: lightgray;
            padding:5px 10px;
            background-color: lightgray;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <?php require_once("../config/conn.php");
        $query = 'SELECT * From projecten';
        $statement = $conn->prepare($query);
        $statement->execute();
        $projecten = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="projecten">
    <?php foreach ($projecten as $row): ?>
        <div class="item">
            <?php echo "<a href='project.php?id={$row['id']}'>"?> 
                <img src="<?php echo $row ['thumbnail'];?>" alt="tumbnail projecten">
                <div class="holder">
                    <h2><?php echo $row ['name'];?></h2>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>