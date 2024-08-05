<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<link rel="icon" href="LogoDKA.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/button.js"></script>
	<?php require_once("font.php"); ?>
</head>
<body>

	<?php require_once("header.php"); ?>

	<!-- START eigen code -->
	<main>
		<section id="infoBlocks">
            <div class="block1" id="block">
			<img src="img/DKA.png" alt="DeKrommeAkker">
                <h1>De kinderboerderij</h1>
                <p>Kinderboerderij De Kromme Akker, de gezellige kinderboerderij voor jong en oud!</p>
                <button onclick="goToInformation()">Lees Meer!</button>  
            </div>
            <div class="block2" id="block">
                <img src="img/Geertruidenberg.jpeg" alt="Geertruidenberg">
                <h1>Locatie</h1>
                <p>Onze kinderboerderij bevind zich in Geertruidenberg</p>
                <button onclick="goToLocation()">Lees Meer!</button>
            </div>
            <div class="block3" id="block">
				<img src="img/Personeel.jpg" alt="Personeel">
                <h1>Taken</h1>
                <p>Er zijn veel verschillende taken voor iedere vrijwilliger.</p>
                <button onclick="goToTasks()">Lees Meer!</button>  
            </div>
    	</section>
        <section id="information">
			<div class="informationBox">
				<div class="textboxInfo">
					<h1>Kinderboerderij De Kromme Akker</h1>
					<p>De Kinderboerderij is een geweldige plek om samen met dieren te zijn. Het is leuk voor jong en oud! Sociale contact krijg je er ook in ons horecagedeelte met terras. Kinderen kunnen er ook lekker spelen in onze speeltuin. In de tussentijd kunnen de volwassenen lekker op het terras iets drinken. Toegang is gratis en de kinderboerderij is geopend van dinsdag tot en met zondag van 12.00 uur tot 17.00 uur!</p>
					<img src="img/Chickens.png" alt="Chickens">
				</div>
			</div>
			<img class="infoImg" src="img/DeKrommeAkker.jpg" alt="DeKrommeAkker">
        </section>
		<section id="locatie">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8747.877474352095!2d4.841914325219449!3d51.70415515036406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c69c7c80baba3d%3A0xb5c14f9a99fc700f!2sKinderboerderij%20de%20kromme%20akker!5e0!3m2!1snl!2snl!4v1699283994045!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<div class="locationBox">
				<div class="textboxLoc">
					<h1>Locatie van onze kinderboerderij</h1>
					<p class="text">Onze kinderboerderij De Kromme Akker ligt in de mooie stad Geertruidenberg. De kinderboerdij ligt in een mooie groene omgeving. De boerderij is 1.5 hectaren groot, dus er is zeker genoeg te doen! Geertruidenberg ligt dichtbij het nationale park de BiesBosch.</p>
					<div class="postcode">
						<p>Burggravenlaan 3</p>
						<p>4931 XA Geertruidenberg</p>
					</div>
					<img src="img/Sheep.png" alt="Sheep">
				</div>
			</div>
		</section>
		<section id="taken">
			<div class="tasksBox">
				<div class="textboxTasks">
					<h1>De verschillende taken op de kinderboerderij</h1>
					<p class="text">In de ochtend neemt het team van vrijwilligers de dag door. Ze verdelen de taken, zoals het voeren van de dieren en het schoonmaken van de hokken. Er is ook nog een aparte groep die zorgt voor het verzorgen van de tuin. Deze groep bestaat uit mensen die met pensioen zijn en dol zijn op tuinieren. De dieren worden door deze taakverdeling heel goed verzorg en de lieve viervoeters zullen daardoor ook gezond blijven. Ze staan gezond klaar voor de bezoekers!<p>
					<img src="img/Cow.png" alt="Cow">
				</div>
			</div>
			<img class="vrijwilligersImg" src="img/Vrijwilligers.jpg" alt="Vrijwilligers">
		</section>
	</main>




	<script type="text/javascript">
		// Schrijf hier Javascript voor de "lees meer"
		// (of andere interactie die je maakt). 
	</script>
	<!-- EINDE eigen code -->

	<?php require_once("footer.php"); ?>
	
</body>
</html>