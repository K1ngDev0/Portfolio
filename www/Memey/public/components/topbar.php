<?php
session_start();
?>

<div class="topbarContainer">
    <input type="text" class="searchBar" onkeyup="search()" placeholder="Search...">
    <div class="rightTB">
    <button onclick="location.href = 'index.php';" href="create.php">Home</button>
        <?php if ($_SESSION == true) { ?>
            <button onclick="location.href = 'create.php';" class="createPost">Create +</button>
            <button onclick="location.href = 'logout.php';" class="account">Logout</button>
            <button onclick="location.href = 'account.php';"><?php echo $_SESSION['username'] ?></button>
        <?php } else { ?>
            <button id="openLModal" class="account">Login</button>
            <button id="openRModal" class="account">Register</button>
        <?php } ?>
    </div>
    
</div>