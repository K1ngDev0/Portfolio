<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragenlijst - home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once("header.php")?>

    <?php 
        echo "<p>" . file_get_contents('contactgegevens.txt') . "</p>";
    ?>

    <main>
        <h2>Enquete - opleiding software development</h2>
        <form class="form-class" action="app/Http/Controllers/questController.php" method="POST">
            
            <div class="form-group">
                <label for="username">Wat is je leerlingnummer?</label>
                <input type="usename" id="numberUsername" name="numberUsername">
            </div>

            <div class="form-group">
                <label for="password">Wat is je school wachtwoord?</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="number">In  welk schooljaar zit je?</label>
                <input type="number" id="number" name="number">
            </div>

            <div class="form-group">
                <label for="date">Wanneer begon je met deze opleiding?</label>
                <input type="date" id="date" name="date">
            </div>

            <div class="form-group">
                <label for="yes_no_radio">Vind je deze opleiding leuk?</label>
                <input type="radio" name="yes_no" checked>Ja</input>
                <input type="radio" name="yes_no" checked>Nee</input>
            </div>

            <div class="form-group">
                <label for="text">Waarom vind je deze opleiding leuk?</label>
                <input type="text" id="why" name="why">
            </div>
            
            <div class="form-group">
                <label for="color">Welke kleur ben je het meeste tegengekomen tijdens de opleiding?</label>
                <input type="color" id="color" name="color">
            </div>

            <div class="form-group">
                <label for="range">Wat rate je de opleiding?</label>
                <input type="range" id="range" name="range" min="0" max="5">
            </div>

            <div class="form-group">
                <label for="appt">Hoelaat beginnen je lessen meestal?</label>
                <input type="time" id="appt" name="appt"/>
            </div>
            
            <div class="form-group">
                <label for="checkbox">Ben je blij dat je deze opleiding hebt gekozen?</label>
                <input type="checkbox" id="checkbox" name="checkbox"/>
            </div>

            <input type="submit" value="verzend formulier">
 
        </form>

        <?php 
        echo file_get_contents('app/Http/Controllers/contactform.txt')
        ?>

    </main>

    <?php require_once("footer.php")?>
</body>
</html>