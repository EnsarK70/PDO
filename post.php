<!DOCTYPE html>
<html>
<body>
<form method="post" action="post.php">
  Naam: <input type="text" name="naam"><br><br>
  Achternaam: <input type="text" name="achternaam"><br><br>
  Leeftijd: <input type="text" name="leeftijd"><br><br>
  Adres: <input type="text" name="adres"><br><br>
  E-mail: <input type="text" name="email"><br><br>
  <input type="submit" value="Versturen">
</form>

<?php 
if(isset($_POST['naam']) && isset($_POST['achternaam']) && isset($_POST['leeftijd']) && isset($_POST['adres']) && isset($_POST['email'])) {
  $naam = $_POST['naam'];
  $achternaam = $_POST['achternaam'];
  $leeftijd = $_POST['leeftijd'];
  $adres = $_POST['adres'];
  $email = $_POST['email'];
  echo "<p>Naam: " . $naam . "</p>";
  echo "<p>Achternaam: " . $achternaam . "</p>";
  echo "<p>Leeftijd: " . $leeftijd . "</p>";
  echo "<p>Adres: " . $adres . "</p>";
  echo "<p>E-mail: " . $email . "</p>";
}
?>
</body>
</html>