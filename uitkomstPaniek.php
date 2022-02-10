<!DOCTYPE html>
<html lang="nl">
<head>
	<link rel="stylesheet" type="text/css" href="madlibs.css">
<meta charset="utf-8"/>
<title>mad libs</title>
<style>
</style>
</head>
<body>
	<h1>mad libs</h1>
	<div class="blok">
	<div class="menu">
		<a href="paniek.php">er heerst paniek...</a><a href="onkunde.php">onkunde</a>
	</div>
	<h2>er heerst paniek...</h2>
    <?php
    	$huisdier['value'] = $_REQUEST['huisdier'];
		$persoon['value'] = $_REQUEST['persoon'];
		$land['value'] = $_REQUEST['land'];
		$verveeld['value'] = $_REQUEST['verveeld'];
		$speelgoed['value'] = $_REQUEST['speelgoed'];
		$spijbel['value'] = $_REQUEST['spijbel'];
		$kopen['value'] = $_REQUEST['kopen'];
		$bezigheid['value'] = $_REQUEST['bezigheid'];
	?>
	<p class="uitkomst">
		Er heerst paniek in het koninkrijk <?php print $land['value'] ?> koning <?php print $spijbel['value'] ?> is ten einde raad als koning <?php print $spijbel['value'] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php print $persoon['value'] ?> <br><br>
		"<?php print $spijbel['value'] ?>! het is een ramp! het is een schande!"<br><br>
		"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"<br><br>
		"Mijn <?php print $huisdier['value'] ?> is verdwenen! Zo maar, zonder waarschuwing en ik had net <?php print $speelgoed['value'] ?> voor hem gekocht"<br><br>
		"Majesteit uw <?php print $huisdier['value'] ?> komt vast vanzelf terug?"<br><br>
		"Ja, das leuk en aardig, maar hoe moet ik in de tussentijd <?php print $bezigheid['value'] ?> leren?"<br><br>
		"Maar sire, daar kunt u toch uw <?php print $kopen['value'] ?> voor gebruiken."<br><br>
		"<?php print $persoon['value'] ?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had."<br><br>
		"<?php print $verveeld['value'] ?>, sire."<br><br>
	</p>
	<footer class="footer"><p>deze website is gemaakt door Max Baardman<p></footer>
	</div>
</body>
</html>
<script>
</script>