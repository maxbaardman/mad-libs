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
		<h2>onkunde</h2>
	    <form action="/madlibs/uitkomstOnkunde.php">
	    	<div class="fields">
				<label for="kunnen">Wat wil je kunnen?</label>
				<input type="text" id="kunnen" name="kunnen" class="input" required ><br>
			</div>
			<div class="fields">
				<label for="persoon">Met welke persoon kan je goed opschieten?</label>
				<input type="text" id="persoon" name="persoon" class="input" required><br> 
			</div>
			<div class="fields">
				<label for="getal">Wat is je favoriete getal?</label>
				<input type="text" id="getal" name="getal" class="input" required><br>
			</div>
			<div class="fields">
				<label for="vakantie">Wat heb je altijd bij je als je op vakantie gaat?</label>
				<input type="text" id="vakantie" name="vakantie" class="input" required><br>
			</div>
			<div class="fields">
				<label for="beigenschap">Wat is je beste persoonlijke eigenschap?</label>
				<input type="text" id="beigenschap" name="beigenschap" class="input" required><br>
			</div>
			<div class="fields">
				<label for="seigenschap">Wat is je slechte persoonlijke eigenschap?</label>
				<input type="text" id="seigenschap" name="seigenschap" class="input" required><br>
			</div>
			<div class="fields">
				<label for="overkomen">Wat is het ergste wat je kan overkomen?</label>
				<input type="text" id="overkomen" name="overkomen" class="input" required><br>
			</div>

			<input class="submit" type="submit" value="versturen">
		</form>
		<footer class="footer"><p>deze website is gemaakt door Max Baardman<p></footer>
	</div>
</body>
</html>
