<!DOCTYPE html>
<html lang="nl">
<?php include_once("../components/head.php") ?>

<?php
    require_once '../../../config/conn.php';

    $query = "SELECT * FROM games";
    $statement = $conn->prepare($query);
    $statement->execute();
    $games = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <?php include_once("../components/header.php") ?>

    <div class="container home">

        <h2>Games</h2>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Platform</th>
                    <th>Release Date</th>
                    <th>Age Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($games as $game):
                ?>
                <tr>
                    <td><?php echo $game['title']?></td>
                    <td><?php echo $game['publisher']?></td>
                    <td><?php echo $game['platform']?></td>
                    <td><?php echo $game['release_date']?></td>
                    <td><?php echo $game['age_rating']?></td>
                    <td></td>
                </tr>
                <?php
                    endforeach;
                ?>

            </tbody>
        </table>

    </div>

    <?php include_once("../components/footer.php") ?>
</body>
</html>