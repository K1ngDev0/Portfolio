<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>TOETS</title>
</head>
<body>
    
    <?php include "header.php"?>

    <div class="nat" id="nat">
        <div class="wrapper">
            <h2>Nat lessen</h2>
            <div class="lesson-cards">
                <div class="lesson-card">
                    <i class="fa-brands fa-python fa-2x"></i>
                    <h3>Python</h3>
                    <p><?php include("doc/python.txt");?></p>
                </div>
                <div class="lesson-card">
                    <i class="fa-solid fa-microchip fa-2x"></i>
                    <h3>microbit</h3>
                    <p><?php include("doc/microbit.txt");?></p>
                </div>
                <div class="lesson-card">
                    <i class="fa-solid fa-code fa-2x"></i>
                    <h3>visual studio</h3>
                    <p><?php include("doc/vs.txt");?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="form" id="form">
        <div class="wrapper">
            <div class="formtxt">
                <h2>Je mening over de native lessen van blok a</h2>
                <button onclick="showForm()">Klik hier om het formulier te tonen</button>
            </div>
            <form id="formField" action="backend/formController.php" method="POST">
                <div class="formgroup">
                    <label for="name">naam</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="formgroup">
                    <label for="name">studenten id</label>
                    <input type="number" name="id" id="id">
                </div>
                <div class="formgroup wide">
                    <label for="message">wat vond je van de native lessen afgelopen periode</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="formgroup">
                    <input type="submit" value="stuur door" class="submit">
                </div>

            </form>
        </div>    
    </div>

    <?php include "footer.php"?>

    <!-- js -->

    <script>
        var show = false;

        function showForm() {
            console.log("Hello!")
            if (show == false) {
                document.getElementById("formField").style.display = "block";
                show = true;
            } else {
                document.getElementById("formField").style.display = "none";
                show = false;
            }
        }
    </script>

</body>
</html> 