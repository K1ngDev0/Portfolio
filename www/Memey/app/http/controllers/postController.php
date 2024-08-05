<?php
session_start();
require_once("../../../config/conn.php");

if ($_GET['action'] == 'create') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $creator = $_SESSION['username'];

    $IMGUR_CLIENT_ID = "4adfff7957bc060"; 

    $image = $_FILES['image']['tmp_name'];

    if ($image) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $IMGUR_CLIENT_ID));
        curl_setopt($ch, CURLOPT_POSTFIELDS, array('image' => base64_encode(file_get_contents($image))));
        $response = curl_exec($ch);
        curl_close($ch);

        $responseArr = json_decode($response, true);

        if (isset($responseArr['data']['link'])) {
            $imageUrl = $responseArr['data']['link'];

            $query = "INSERT INTO posts (title, description, creator, filename) VALUES (:title, :description, :creator, :filename)";
            $statement = $conn->prepare($query);
            $statement->execute([
                ':title' => $title,
                ':description' => $description,
                ':creator' => $creator,
                ':filename' => $imageUrl,
            ]);

            header("Location: ../../../public/index.php?message=post_created");
        } else {
            echo 'Error uploading image: ' . $responseArr['data']['error'];
        }
    } else {
        echo 'No image file selected.';
    }
}

if ($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $query = "DELETE FROM posts WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id,
    ]);

    header("Location: ../../../public/index.php");
}
?>
