<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Toets FB33</title>
        <?php require_once 'head.php'; ?>
    </head>
    <body>
        <?php require_once 'header.php'; ?>
        
        <div class="container home">
            <?php if(isset($_GET['msg']))
            {
                echo "<div class='msg'>" . $_GET['msg'] . "</div>";
            } ?>

            <h2>Registreer je voor het adminsysteem</h2>
            
            <form action="backend/registerController.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_check">Password check:</label>
                    <input type="password" name="password_check" required>
                </div>
                <input type="submit" value="Register">
            </form>
        </div>
    </body>

</html>