<!doctype html>
<html lang="nl">

<head>
    <title>Klassenlijst</title>
    <?php require_once 'head.php'; ?>
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container home">

        <form action="backend/registerController.php" method="POST">

            <div class="form-group">
                <label for="username">Gebruikersnaam:</label>
                <input type="username" name="username" id="username">   
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">   
            </div>
            <div class="form-group">
                <label for="repeat_password">Herhaal Wachtwoord:</label>
                <input type="repeat_password" name="repeat_password" id="repeat_password">   
            </div>
            
            <input type="submit" value="Registreren">

        </form>

    </div>

</body>

</html>
