<!DOCTYPE html>
<html lang="nl">
<?php require_once("head.php")?>
<head>
    <title>K1ngDev | Home</title>
</head>
<body>
    <?php require_once("header.php")?>

    <main>
        <div class="contactContainer">
            <div class="contact-form">
                <h1 class="colored">Kom met mij in contact!</h1>
                <p class="subColor"><i>Alle velden zijn verplicht*</i></p>
                <form id="contactForm" action="contactController.php" method="POST">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Bericht:</label>
                    <textarea style="resize: none;" id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit">Stuur Bericht</button>
                </form>
            </div>
        </div>
    </main>

    <?php require_once("footer.php")?>
</body>
</html>