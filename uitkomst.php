<html>
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
	<h2>onkunde</h2>
    <?php
    	$kunnen['value'] = $_REQUEST['kunnen'];
		$persoon['value'] = $_REQUEST['persoon'];
		$getal['value'] = $_REQUEST['getal'];
		$vakantie['value'] = $_REQUEST['vakantie'];
		$beigenschap['value'] = $_REQUEST['beigenschap'];
		$seigenschap['value'] = $_REQUEST['seigenschap'];
		$overkomen['value'] = $_REQUEST['overkomen'];

		$kunnen['name'] = 'kunnen';
		$persoon['name'] = 'persoon';
		$getal['name'] = 'getal';
		$vakantie['name'] = 'vakantie';
		$beigenschap['name'] = 'beigenschap';
		$seigenschap['name'] = 'seigenschap';
		$overkomen['name'] = 'overkomen';
		
	?>
	<p class="uitkomst">er zijn veel mensen die niet kunnen <?php print $kunnen['value'] ?>. neem nou <?php print $persoon['value'] ?>. zelf met de hulp van een <?php print $vakantie['value'] ?> of <?php print $getal['value'] ?> kan <?php print $persoon['value'] ?> niet <?php print $kunnen['value'] ?>. dat heeft niet te maken met een gebrek aan <?php print $beigenschap['value'] ?>, maar met een teveel <?php print $seigenschap['value'] ?>. te veel <?php print $seigenschap['value'] ?> leidt tot <?php print $overkomen['value'] ?> en dat is niet goed als je wilt <?php print $kunnen['value'] ?>. helaas voor <?php print $persoon['value'] ?></p>
	<footer class="footer"><p>deze website is gemaakt door Max Baardman<p></footer>
	</div>
</body>
</html>
<script>
</script>