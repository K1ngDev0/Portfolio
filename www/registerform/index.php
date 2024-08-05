<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once("header.php")?>

    <main>
        <h2>voorbeeld form 1</h2>
        <form class="form-class" action="backend/register.php" method="POST">
            <div class="form-group">
                <label for="username">Gebruikersnaam</label>
                <input type="usename" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-group">    
                <label for="password">Herhaal wachtwoord</label>
                <input type="password" id="repeatPassword" name="repeatPassword">
            </div>
            
            <input type="submit" value="verzend formulier">

        </form>
    </main>

    <?php require_once("footer.php")?>
</body>
</html>