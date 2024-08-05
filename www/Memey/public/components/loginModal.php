<div class="modalContainer" id="modalLContainer">
    <div class="modal">
        <button class="close" id="closeLModal">
            <i class="fa-solid fa-xmark fa-2x"></i>
        </button>

        <?php if (isset($_GET['msgL'])) { ?>
            <script>
                modalLContainer.classList.add('show');
            </script>
            <div class='msg'> <?php echo $_GET['msgL'] ?> </div>
        <?php } ?>

        <h2>Login</h2>
        <form action="../app/http/controllers/loginController.php" method="POST">
            <div class="inputContainer"> 
                <input type="text" name="loginInput" placeholder="Username or E-mail" id="loginInput">   
                <input type="password" placeholder="Password" name="password" id="password">   
            </div> 
            <input type="submit" value="Login">
            <p>Don't have a Meme-ified account? <a href="../public/index.php?msgR=Create your brand new Meme-ified account!">Sign-up</a></p>
        </form>

        <script>
            const openLModal = document.getElementById('openLModal');
            const modalLContainer = document.getElementById('modalLContainer');
            const closeLModal = document.getElementById('closeLModal');

            openLModal.addEventListener('click', () => {
                modalLContainer.classList.add('show');
            });
            closeLModal.addEventListener('click', () => {
                modalLContainer.classList.remove('show');
            });
        </script>

    </div>
</div>

