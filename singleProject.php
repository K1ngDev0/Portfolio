<!DOCTYPE html>
<html lang="nl">

<?php
$id = $_GET['id'];
require_once("config/conn.php");
$query = "SELECT * FROM projecten WHERE id = :id";
$statement = $conn->prepare($query);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
$project = $statement->fetch(PDO::FETCH_ASSOC);
?>

<?php require_once("head.php")?>
<head>
    <title>K1ngDev | <?php echo htmlspecialchars($project['name']); ?></title>
</head>
<body>
    <?php require_once("header.php"); ?>
    <div class="SPWrapper">
        <button onclick="previous()" class="SPArrow"><i class="fa-solid fa-arrow-left fa-2x"></i></button>
        <div class="SPcontent">
            <h1 class="colored SPTitle"><?php echo htmlspecialchars($project['name']) ?></h1>
            <div class="SPIntro">
                <img src="<?php echo htmlspecialchars($project['thumbnail']) ?>" alt="thumbnail">
                <p><?php echo htmlspecialchars($project['tekst_1']) ?></p>
            </div>
        </div>
        <button onclick="next()" class="SPArrow"><i class="fa-solid fa-arrow-right fa-2x"></i></button>
        <div class="mobBtn">
            <button onclick="previous()" class="SPArrowMob"><i class="fa-solid fa-arrow-left fa-2x"></i></button> 
            <button onclick="next()" class="SPArrowMob"><i class="fa-solid fa-arrow-right fa-2x"></i></button>
        </div>
        <?php   
            if ($project['gallary']) {
                $gallary = explode("|", $project['gallary']);
                $gallary = array_filter($gallary);
            }
        ?>
    </div>
    <div class="gallary">
        <h1 class="colored">Galerij</h1>
        <div class="gallaryImages">
            <?php
            if ($project['gallary']) {
                foreach ($gallary as $image) { ?>
                    <div class="item">
                        <img class="slideImg" src="<?php echo htmlspecialchars($image) ?>" alt="Foto van het project">
                    </div>
                <?php }
            }
            ?>
        </div>
        <div class="slideBtns">
            <button class="slideBtn" onclick="plusDivs(-1)">&#10094;</button>
            <button class="slideBtn" onclick="plusDivs(+1)">&#10095;</button>
        </div>
        <p class="text2 textSection"><?php echo $project['tekst_2'] ?></p>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("slideImg");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
        </script>
    </div>
    <?php require_once("footer.php");?>
    
    <script>
        function next() {
            <?php if ($project['id'] < 7): ?>
                window.location.href = "singleProject.php?id=<?php echo $project['id'] + 1 ?>";
            <?php endif; ?>
        }
        function previous() {
            <?php if ($project['id'] > 1): ?>
                window.location.href = "singleProject.php?id=<?php echo $project['id'] - 1 ?>";
            <?php endif; ?>
        }
    </script>
</body>
</html>