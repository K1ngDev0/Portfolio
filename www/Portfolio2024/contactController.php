<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "larszijlmans@k1ngdev.nl";
    $subject = "Nieuw contactformulier bericht van $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $body = "<h2>Contactformulier bericht</h2>
             <p><strong>Naam:</strong> $name</p>
             <p><strong>Email:</strong> $email</p>
             <p><strong>Bericht:</strong><br>$message</p>";
    
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.php");
    } else {
        echo "Er is een fout opgetreden, probeer het later opnieuw.";
    }
} else {
    echo "Ongeldige aanvraag.";
}
?>