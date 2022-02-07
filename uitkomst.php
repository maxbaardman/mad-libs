<html>
<head>
<meta charset="utf-8"/>
<title>mad libs</title>
<style>
</style>
</head>
<body>
	<h1>mad libs</h1>
    <?php
	    function redirect($url, $statusCode = 303)
		{
		   header('Location: ' . $url, true, $statusCode);
		   die();
		}

    	$errors = array();

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

		$fields=[$kunnen, $persoon, $getal, $vakantie, $beigenschap, $seigenschap, $overkomen];

		foreach ($fields as $field) {
			if(empty($field['value'])){
				$errors[] = $field['name'];
			}
		}
		

		if(count($errors) != null){
			//redirect('/madLibs/madLibs.php');
		}

	?>
	<p>Wat wil je kunnen? <?php print $kunnen['value'] ?></p>
</body>
</html>
<script>
</script>