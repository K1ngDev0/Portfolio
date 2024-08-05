<!doctype html>
<html lang="nl">

<head>
    <title>Klassenlijst</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    
    <div class="container home">

        <form action="registerController.php" method="POST">

            <div class="form-group">
                <label for="username">Gebruikersnaam:</label>
                <input type="text" name="username" id="username">   
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">   
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord Herhalen:</label>
                <input type="password" name="repeat_password" id="repeat_password">
            </div>
            
            <input type="submit" value="Inloggen">

        </form>

    </div>

</body>

</html>
