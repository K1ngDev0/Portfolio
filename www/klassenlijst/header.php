<?php require_once 'backend/config.php'; ?>

<header>
    <div class="container">
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Home</a> |
            <a href="<?php echo $base_url; ?>/studenten/index.php">Studenten</a>
        </nav>
        <div>
            <?php
                if(isset($_SESSION['user_id']))
                {
            ?>
                    <a href="<?php echo $base_url; ?>/logout.php">Uitloggen</a>
            <?php
                } else {
            ?>
                    <a href="<?php echo $base_url; ?>/login.php">Inloggen</a>
            <?php
                }
            ?>
        </div>
        <div>
            <a href="<?php echo $base_url; ?>/register.php">Registreren</a>
        </div>
    </div>
</header>
