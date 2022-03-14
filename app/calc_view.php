<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator odsetek</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<h1>Kalkulator odsetek</h1>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="kwota">Kwota: </label>
	<input id="kwota" type="text" name="kwota" value="<?php out($kwota) ?>" /><br />
	<label for="lata">Ile lat: </label>
	<input id="lata" type="text" name="lata" value="<?php out($lata) ?>" /><br />
	<label for="opr">Oprocentowanie: </label>
	<input id="opr" type="text" name="opr" value="<?php out($opr) ?>" /><br />
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Miesięczne odsetki: '.$result,' zł'; ?>
</div>
<?php } ?>

</body>
</html>