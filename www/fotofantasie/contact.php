 <body>

  <!-- Add your site or application content here -->
<?php 
require_once("header.php");
?>
<main>
  <div class="wrapper">
      <div class="form-menu">
          <h2>Neem contact op</h1>
          
          <form action="backend/contactController.php" method="post">

            <!-- Vertel de controller wat we gaan doen -->
            <input type="hidden" name="action" value="send">
            
            <div class="form-group">
              <label for="senderSubject">Onderwerp</label>
              <input type="text" name="subject" id="subject">
            </div>
            <div class="form-group">
              <label for="senderName">Naam</label>
              <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
              <label for="senderEmail">E-mailadres</label>
              <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="message">Bericht</label>
              <textarea name="message" cols="30" rows="10" id="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Verzend formulier">
            </div>

          </form>
      </div>
  </div>


</main>


<?php
require_once("footer.php");
?>