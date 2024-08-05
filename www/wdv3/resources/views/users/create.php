<!DOCTYPE html>
<html lang="nl">
<?php include_once("../components/head.php") ?>
<body>
    <?php include_once("../components/header.php") ?>

    <div class="container home">

        <h2>Create Game</h2>

        <form action="../../../app/Http/Controllers/GamesController.php?action=create" method="POST">
            
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-input">
                </div>
                <div class="form-group">
                    <label for="publisher">Publisher:</label>
                    <input type="text" name="publisher" id="publisher" class="form-input">
                </div>
                <div class="form-group">
                    <label for="type">Platform:</label>
                    <select name="platform" id="platform">
                        <option value="">- kies een platform -</option>
                        <option value="Switch">Switch</option>
                        <option value="Xbox Series S/X">Xbox Series S/X</option>
                        <option value="Playstation 5">Playstation 5</option>
                        <option value="PC">PC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="releaseDate">Release Date:</label>
                    <input type="date" id="release_date" name="release_date" required>
                </div>
                <div class="form-group">
                    <label for="ageRating">Age Rating:</label>
                    <input type="number" name="age_rating" id="age_rating">
                </div>
                
                <input type="submit" value="Game opslaan">

            </form>
        </div>

        <?php include_once("../components/footer.php") ?>
</body>
</html>