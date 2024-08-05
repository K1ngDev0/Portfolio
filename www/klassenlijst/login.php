<!doctype html>
<html lang="nl">

<head>
    <title>Klassenlijst</title>
    <?php require_once 'head.php'; ?>
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container home">

        <form action="backend/loginController.php" method="POST">

            <div class="form-group">
                <label for="username">Gebruikersnaam:</label>
                <input type="username" name="username" id="username">   
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">   
            </div>
            
            <input type="submit" value="Inloggen">

        </form>

    </div>

</body>

</html>
