<?php
$kunnen = $_POST["input0_1"];
$opschieten = $_POST["input0_2"];
$getal = $_POST["input0_3"];
$vakantie = $_POST["input0_4"];
$besteeigenschap = $_POST["input0_5"];
$slechteeigenschap = $_POST["input0_6"];
$overkomen = $_POST["input0_7"];
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
    <h2 class="headertekst">Onkunde</h2>
    <p>
			Er zijn veel mensen die niet kunnen <?php echo $kunnen ?>. <br><br>
			Neem nou <?php echo $opschieten ?>. <br><br>
			Zelfs met de hulp van een <?php echo $vakantie ?> of zelfs <?php echo $getal ?> kan <?php echo $opschieten ?> niet <?php echo $kunnen ?>. <br><br>
			Dat heeft niet te maken met een gebrek aan <?php echo $besteeigenschap ?>, maar met een te veel aan <?php echo $slechteeigenschap ?>. <br><br>
			Te veel <?php echo $slechteeigenschap ?> leidt tot <?php echo $overkomen ?> en dat is niet goed als je wilt <?php echo $kunnen ?>. <br><br>
			Helaas voor <?php echo $opschieten ?>.
		 </p>
   </main>
   <footer>
   	<p class="footertext">Nick Mecking</p>
   </footer>
   </body>
 </html>
