<!DOCTYPE html>
<html>
<body>
    <form method="get" action="get.php">
       Naam: <input type="text" name="naam"><br><br>
       Achternaam: <input type="text" name="achternaam"><br><br>
       Leeftijd: <input type="text" name="leeftijd"><br><br>
       Adres: <input type="text" name="adres"><br><br>
       Email: <input type="text" name="email"><br><br>
       <input type="Submit" value="Versturen"><br><br>
    </form>

<?php
if(isset($_GET['naam']) && isset($_GET['achternaam']) && isset($_GET['leeftijd']) && isset($_GET['adres']) && isset($_GET['email'])) {
    $naam = $_GET['naam'];
    $achternaam = $_GET['achternaam'];
    $leeftijd = $_GET['leeftijd'];
    $adres = $_GET['adres'];
    $email = $_GET['email'];
    echo "<p>Naam: " . $naam . "</p>";
    echo "<p>Achternaam: " . $achternaam . "</p>";
    echo "<p>Leeftijd: " . $leeftijd . "</p>";
    echo "<p>Adres: " . $adres . "</p>";
    echo "<p>E-mail: " . $email . "</p>";
  }
?>
</body>
</html>

GET-verzoeken zijn bedoeld om gegevens van een server op te halen en wijzigen de status van de server niet. Aan de andere kant worden POST-verzoeken gebruikt om gegevens naar de server te sturen voor verwerking en kunnen ze de status van de server wijzigen.