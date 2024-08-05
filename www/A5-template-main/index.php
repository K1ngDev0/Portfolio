<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Fair play in de Hockey Hoofdklasse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Hier worden de fonts al voor je ingeladen! -->
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        $output_1 = fopen("python/output/Informatievraag_1.txt", "r") or die("Als deze error komt dan is er iets met het inladen van de bestanden");
        $output_2 = fopen("python/output/Informatievraag_2.txt", "r") or die("Als deze error komt dan is er iets met het inladen van de bestanden");
        $output_3 = fopen("python/output/Informatievraag_3.txt", "r") or die("Als deze error komt dan is er iets met het inladen van de bestanden");
        $output_4 = fopen("python/output/Informatievraag_4.txt", "r") or die("Als deze error komt dan is er iets met het inladen van de bestanden");
    ?>

    <div class="container">
        <header>
            <h1>Hockey Hoofdklasse</h1>
            <p class="subtitle">Fair-play website</p>
        </header>

        <main>
            <p>De SPORT-bond ziet toe op een eerlijk verloop van de competitie. Onze topsporters dienen een voorbeeld te zijn voor de vele amateurs in de sport. Daarom streven we naar <em>fair play</em>; een sportieve omgang met elkaar. Daar hoort ook bij dat er weinig overtredingen plaatsvinden tijdens een wedstrijd. Op deze website geven we inzicht in het verloop van de competitie tot nu toe. U ziet de wedstrijden met de minste overtredingen, maar voor bewustwording brengen we ook de wedstrijden met de <em>meeste</em> overtredingen in beeld.</p>
            <div class="row">
                <div class="box half">
                    <h2>Aantal overtredingen:</h2>
                    <p class="number"><?php echo fgets($output_1); ?></p>
                </div>
                <div class="box half">
                    <h2>Gemiddelde overtredingen per wedstrijd:</h2>
                    <p class="number"><?php echo fgets($output_2); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <h2>Wedstrijden met de meeste overtredingen:</h2>
                    <pre>
                        <?php
                            while(!feof($output_3)) {
                                echo fgets($output_3);
                            }
                        ?>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <h2>Wedstrijden met minder dan 2 overtredingen (laatste veertien dagen):</h2>
                    <pre>
                        <?php
                            while(!feof($output_4)) {
                                echo fgets($output_4);
                            }
                        ?>
                    </pre>
                </div>
            </div>
        </main>

        <footer>
            <p>Deze website is gemaakt in het kader van een praktijkopdracht bij de opleiding Software Developer, Curio Breda.</p>
            <p>&copy; Team 23c, Nick, Lars en Gert.</p>
        </footer>

    </div>

    <?php
        fclose($output_1);
        fclose($output_2);
        fclose($output_3);
        fclose($output_4);
    ?>

</body>
</html>
