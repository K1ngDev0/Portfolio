<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("components/head.php") ?>
    <title>Memey | Home</title>
</head>
<body>
    <?php
        require_once("components/header.php");
        
        require_once("../config/conn.php");
        $query = 'SELECT * FROM posts';
        $statement = $conn->prepare($query);
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <main>
        <?php require_once("components/topbar.php"); ?>
        <div id="loading-screen">
            <div class="loader"></div>
            <p>Uploading, please wait...</p>
        </div>
        <form id="uploadForm" action="../app/http/controllers/postController.php?action=create" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">

            <label for="description">Description:</label>
            <input type="text" name="description" id="description">
        
            <label for="image">Select image to upload:</label>
            <input type="file" name="image" id="image" accept="image/*">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </main>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function() {
            document.getElementById('loading-screen').style.display = 'flex';
        });
    </script>
</body>
</html>