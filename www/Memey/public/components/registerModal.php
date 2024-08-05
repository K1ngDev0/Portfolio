<div class="modalContainer" id="modalRContainer">
    <div class="modal">

        <button class="close" id="closeRModal">
            <i class="fa-solid fa-xmark fa-2x"></i>
        </button>

        <?php if (isset($_GET['msgR'])) { ?>
            <script>
                modalRContainer.classList.add('show');
            </script>
            <div class='msg'> <?php echo $_GET['msgR'] ?> </div>
        <?php } ?>

        <h2>Register</h2>
        <form action="../app/http/controllers/registerController.php" method="POST">
            <div class="inputContainer"> 
                <input type="username" name="username" placeholder="Username" id="username" required>   
                <input type="email" name="email" placeholder="E-mail@example.com" id="email" required>   
                <input type="password" placeholder="Password" name="password" id="password" required>   
                <input type="password" placeholder="Repeat Password" name="password_repeat" id="password_repeat" required>   
            </div> 
            <input type="submit" value="Register">
            <p>Already have a Meme-ified account? <a href="../public/index.php?msgL=Sign-in with your Meme-ified account!">Sign-in</a></p>
        </form>

        <script>
            const openRModal = document.getElementById('openRModal');
            const modalRContainer = document.getElementById('modalRContainer');
            const closeRModal = document.getElementById('closeRModal');

            openRModal.addEventListener('click', () => {
                modalRContainer.classList.add('show');  
            });
            closeRModal.addEventListener('click', () => {
                modalRContainer.classList.remove('show');
            });
            
        </script>

    </div>
</div>

