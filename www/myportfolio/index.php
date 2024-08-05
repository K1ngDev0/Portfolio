<!DOCTYPE html>
<html lang=en>

<head>
    <title>MyPortfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style2.css">
    <script src="https://kit.fontawesome.com/4b73188074.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dhurjati&family=Inter&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once("header.php"); ?>
    <main>
        <div class="wrapper">
            <h2>Home</h2>
            <p>Welcome to my portfolio page</p>
            <p>This website was made in 5 weeks and I worked hard for it. It is a practise website.</p>
            <p>Soon there will be a more advanced website.</p>
            <img src="img\avatars-eeTmdE5rkVOzysT8-EQr7AQ-t240x240.jpg" alt="Shrink 'N grow">
        </div>
        <?php require_once("back.php"); ?>
    </main>
    <?php require_once("footer.php"); ?>
    <script>
        let name = prompt("Hallo, wat is jouw naam?");
        if(name.length > 0) {
            document.getElementById('greeting').innerText = "Hallo " + name + ", welkome op mijn site!"
        }
        // document.getElementById('button').addEventListener('click', function() {
        //     document.getElementById('text-hidden').style.display = 'block';
        //     document.getElementById('text-hidden').style.fontSize = '55px';
        // })
        let color = prompt("Wat is je favouriete kleur? (in het engels of Hex codes)")
        let basisColor = "#04003c";
        document.body.style.backgroundColor = color;

        document.getElementById('button').addEventListener('click', function() {
            document.body.style.backgroundColor = basisColor;
        })
    </script>
</body>

</html>