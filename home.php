<!DOCTYPE html>
<html lang="nl">

<script async src="https://www.googletagmanager.com/gtag/js?id=G-KZPL8NF38K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KZPL8NF38K');
</script>

<head>
    <?php require_once("head.php")?>
    <title>K1ngDev | Home</title>
</head>
    <body>
        <?php require_once("header.php")?>

        <main>
            <div class="wrapper">
                <div class="section1">
                    <h2 class="colored">Ik ben Lars Zijlmans</h2>
                    <h3 class="subColor">-K1ngDev</h3>
                    <div class="description">
                        <p>
                        <?php
                        $descriptionFile = fopen("information/description.txt", "r") or die("Unable to open file!");
                        echo fread($descriptionFile,filesize("information/description.txt"));
                        fclose($descriptionFile);
                        ?>
                        </p>
                    </div>
                    <div class="readMore">
                        <button onclick=goToSection(aboutPage) class="readMoreButton">Lees Meer</button>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="section2">
                    <h3 class="colored">Over Mij</h3>
                    <div class="project-cards">
                        <div class="card">
                            <div class="content">
                                <i class="fa-brands fa-itch-io fa-4x"></i>
                                <h4 class="colored">Game Development</h4>
                                <p>
                                <?php
                                    $gameDevFile = fopen("information/gameDev.txt", "r") or die("Unable to open file!");
                                    echo fread($gameDevFile,filesize("information/gameDev.txt"));
                                    fclose($gameDevFile);
                                ?>
                                </p>
                            </div>
                            <div class="readMore">
                                <button onclick=goToSection(GameDev) class="projectsButton">Lees Meer</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <i class="fa-solid fa-file fa-4x"></i>
                                <h4 class="colored">Web Development</h4>
                                <p>
                                <?php
                                    $webDevFile = fopen("information/webDev.txt", "r") or die("Unable to open file!");
                                    echo fread($webDevFile,filesize("information/webDev.txt"));
                                    fclose($webDevFile);
                                ?>
                                </p>
                            </div>
                            <div class="readMore">
                                <button onclick=goToSection(WebDev) class="projectsButton">Lees Meer</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content">
                                <i class="fa-solid fa-code fa-4x"></i>
                                <h4 class="colored">Software Development</h4>
                                <p>
                                <?php
                                    $softDevFile = fopen("information/softDev.txt", "r") or die("Unable to open file!");
                                    echo fread($softDevFile,filesize("information/softDev.txt"));
                                    fclose($softDevFile);
                                ?>
                                </p>
                            </div>
                            <div class="readMore">
                                <button onclick=goToSection(SoftDev) class="projectsButton">Lees Meer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
            var aboutPage = "about.php"
            var GameDev = "about.php#GameDev"
            var WebDev = "about.php#WebDev"
            var SoftDev = "about.php#SoftDev"
            function goToSection(section)
            {
                window.location.href = section;
            }
        </script>

        <?php require_once("footer.php")?>
    </body>
</html>