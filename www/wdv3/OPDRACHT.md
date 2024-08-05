# Opdrachten

## 1. Database koppelen (5 minuten)

- Maak een nieuwe database genaamd "wdv3"
- Maak een tabel in die database genaamd "games"
- Gebruik de volgende kolommen en opties:
    - id : int (Primary)
    - title : varchar
    - publisher : varchar
    - platform : varchar
    - release_date : date
    - age_rating : int (nullable, default: NULL)
- Zorg ervoor dat de config van je applicatie klopt.

## 2. Create (20 minuten)

- Maak het bestand /resources/views/users/create.php
- Maak een standaard layout. Gebruik daarbij de bestanden in /resources/views/components
- Maak een formulier voor het aanmaken van een gebruiker. Zorg voor de volgende velden:
    - Title
    - Publisher
    - Platform
        - Dropdown met de waardes: Switch, Xbox Series S/X, Playstation 5, PC.
    - Release Date
    - Age Rating
- Maak het bestand app/Http/Controllers/GamesController.php aan.
- Schrijf een if functie die kijkt of de huidige actie "create" is.
    - Dit mag via een GET of POST variabele. Jouw keus.
- Schrijf de logica voor de Create functie
    - Haal het formulier op en wijs variabelen toe
    - Stel de query op en voer deze uit
    - Verwijs de browser terug naar de index.

## 3. Read (15 minuten)
- Maak het bestand /resources/views/users/index.php
- Maak een standaard layout. Gebruik daarbij de bestanden in /resources/views/components
- Maak een tabel voor alle Games. Zorg voor de volgende headers:
    - Title
    - Publisher
    - Platform
    - Release Date
    - Age Rating
    - Actions
- Schrijf de logica om alle games op te halen uit de database.
- Loop door de data, en laat alle games in de lijst zien. Vul alles in onder de juiste header.
- Pas de Create functie aan, en laat deze aan het einde doorverwijzen naar deze pagina.
- Voeg een "Games" link toe aan de header die naar de /resources/views/users/index.php wijst.

## Pauze (10 minuten)

## 4. Update (20 minuten)
- Pas de tabel in /resources/views/users/index.php aan en voeg een edit link toe aan elke game in de tabel.
    - Zorg ervoor dat de link telkens de id mee krijgt van die game.
- Kopieer het bestand /resources/views/users/create.php naar dezelfde map als edit.php
- Pas het formulier zo aan dat de edit action wordt meegestuurd.
- Schrijf de logica om deze game op te halen uit de database.
- Zorg ervoor dat alle waardes van deze game al ingevuld zijn in het formulier.
- Schrijf in de GamesController.php een if functie die kijkt of de huidige actie "edit" is.
    - Dit mag via een GET of POST variabele. Jouw keus.
- Schrijf de logica voor de Edit functie
    - Haal het formulier op en wijs variabelen toe
    - Stel de query op en voer deze uit
    - Verwijs de browser terug naar /resources/views/games/index.php.

## 5. Delete (10 minuten)
- Pas de tabel in /resources/views/users/index.php aan en voeg een delete link toe aan elke game in de tabel.
    - Zorg ervoor dat de link telkens de id mee krijgt van die game.
- Schrijf in de GamesController.php een if functie die kijkt of de huidige actie "delete" is.
    - Dit mag via een GET of POST variabele. Jouw keus.
- Schrijf de logica voor de Delete functie
    - Stel de query op en voer deze uit
    - Verwijs de browser terug naar /resources/views/games/index.php.