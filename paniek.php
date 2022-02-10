<!DOCTYPE html>
<html lang="nl">
<head>
	<link rel="stylesheet" type="text/css" href="madlibs.css">
	<meta charset="utf-8"/>
	<title>mad libs</title>
</head>
<body>
	<h1>mad libs</h1>
	<div class="blok">
	<div class="menu">
		<a href="paniek.php">er heerst paniek...</a><a href="onkunde.php">onkunde</a>
	</div>
		<h2>paniek</h2>
	    <form action="/madLibs/uitkomstPaniek.php">
	    	<div class="fields">
				<label for="huisdier">Welk dier zou je nooit als huisdier willen hebben?</label>
				<input type="text" id="huisdier" name="huisdier" class="input" required ><br>
			</div>
			<div class="fields">
				<label for="persoon">Wie is de belangrijkste persoon in je leven?</label>
				<input type="text" id="persoon" name="persoon" class="input" required><br> 
			</div>
			<div class="fields">
				<label for="land">In welk land zou je graag willen wonen?</label>
				<input type="text" id="land" name="land" class="input" required><br>
			</div>
			<div class="fields">
				<label for="verveeld">Wat doe je als je je verveeld?</label>
				<input type="text" id="verveeld" name="verveeld" class="input" required><br>
			</div>
			<div class="fields">
				<label for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
				<input type="text" id="speelgoed" name="speelgoed" class="input" required><br>
			</div>
			<div class="fields">
				<label for="spijbel">Bij welke docent spijbel je het liefste?</label>
				<input type="text" id="spijbel" name="spijbel" class="input" required><br>
			</div>
			<div class="fields">
				<label for="kopen">als je $100.000- had wat zou je dan kopen?</label>
				<input type="text" id="kopen" name="kopen" class="input" required><br>
			</div>
			<div class="fields">
				<label for="bezigheid">wat is je favoriete bezigheid?</label>
				<input type="text" id="bezigheid" name="bezigheid" class="input" required><br>
			</div>

			<input class="submit" type="submit" value="versturen">
		</form>
		<footer class="footer"><p>deze website is gemaakt door Max Baardman<p></footer>
	</div>
</body>
</html>

