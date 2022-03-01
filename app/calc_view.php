<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator odsetek</title>
</head>
<body>
<h1>Kalkulator odsetek</h1>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="kwota">Kwota: </label>
	<input id="kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br />
	<label for="lata">Ile lat: </label>
	<input id="lata" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" /><br />
	<label for="opr">Oprocentowanie: </label>
	<input id="opr" type="text" name="opr" value="<?php if (isset($opr)) print($opr); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: lime; width:300px;">
<?php echo 'Miesięczne odsetki: '.$result,' zł'; ?>
</div>
<?php } ?>

</body>
</html>