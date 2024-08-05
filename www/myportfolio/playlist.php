<!DOCTYPE html>
<html lang=en>

<head>
    <title>MyPortfolio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style2.css">
</head>

<body>
    <?php require_once("header.php"); ?>
    <main>
        <div class="wrapper">
            <h2>My favourite 5 songs</h2>
            <p>these are my five favourite songs:</p>
            <ol>
                <li><a href="https://www.youtube.com/watch?v=DYed5whEf4g">Bones - Imagine Dragons</a></li>
                <li>Daylight - David Kushner</li>
                <li>The Feeling - Lost Frequencies & Andromedik</li>
                <li>Take Me To Church - Hozier</li>
                <li>Whatever It Takes - Imagine Dragons</li>
            </ol>
            <?php require_once("back.php"); ?>
        </div>
    </main>
    <?php require_once("footer.php"); ?>
</body>

</html>