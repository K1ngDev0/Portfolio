<?php


/*
/	Deze php-file ontvangt de informatie uit het contactformulier,
/	en zet de gegevens in een tekstbestand.
/
/	De file werkt al, je hoeft zelf geen php-code te schrijven.
/
*/


if($_POST['action'] == "send")
{
	$name = $_POST['senderName'];
	$email = $_POST['senderEmail'];
	$message = $_POST['message'];
	$to = "jouwemailadres@example.net";

	var_dump($_POST);
	file_put_contents("contacts.txt",

"------------------------------
Bericht van: " . $name . " (" . $email . ")
" . $message . "
------------------------------",

	FILE_APPEND
	);


/*
	//Onderstaande code mailt het bericht ook - WERKT NIET OP XAMPP

	mail($to, "Contactformulier van website",
		"------------------------------
		Bericht van: " . $name . " (" . $email . ")
		" . $message . "
		------------------------------",
	)
*/


	header("Location: ../contact.php?msg=Bericht+verstuurd");
}

?>