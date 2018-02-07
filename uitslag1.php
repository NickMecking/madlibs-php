<?php
$dier = $_POST["input0"];
$persoon = $_POST["input1"];
$land = $_POST["input2"];
$verveelt = $_POST["input3"];
$speelgoedkind = $_POST["input4"];
$docent = $_POST["input5"];
$geld = $_POST["input6"];
$bezigheid = $_POST["input7"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
		<h1 class="header">Madlibs</h1>
		<ul>
			<li><a class="active" href="index.php">Paniek</a></li>
			<li><a href="onkunde.php">Onkunde</a></li>
		</ul>
	 <main class="tekst">
    <h2 class="headertekst"> Er heerst paniek...</h2>
    <p class="paniektext">
      Er heerst paniek in het koninkrijk <?php echo $land ?>. Koning <?php echo $docent ?> is ten einde raad en als koning <?php echo $docent ?>
       tegen einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $persoon ?>.<br><br>
      "<?php echo $persoon ?>! Het is een schande!"<br><br>
      "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
      "Mijn <?php echo $dier ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $speelgoedkind ?> voor hem gekocht!"<br><br>
      "Majesteit, uw <?php echo $dier ?> komt vanzelf weer terug?"<br><br>
      "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid ?> leren?"<br><br>
      "Maar Sire, daar kunt u toch uw <?php echo $geld ?> voor gebruiken."<br><br>
      "<?php echo $persoon ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
      "<?php echo $bezigheid ?>, Sire."
    </p>
	</main>
	<footer>
		<p class="footertext">Nick Mecking</p>
	</footer>
  </body>
</html>
