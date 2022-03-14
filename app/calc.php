<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota, &$lata, &$opr){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}

//walidacja parametrów
function validate(&$kwota, &$lata, &$opr, &$messages){
	if (!(isset($kwota) && isset($lata) && isset($opr))){
		return false;
	}

if ($kwota == ""){
	$messages [] = 'Nie podano kwoty';
}

if ($lata == ""){
	$messages [] = 'Nie podano ilości lat';
}

if ($opr == ""){
	$messages [] = 'Nie podano oprocentowania';
}

if (count ($messages) != 0) return false;

if (! is_numeric($kwota)){
	$messages [] = 'Podana kwota nie jest liczbą całkowitą';
}

if (! is_numeric($lata)){
	$messages [] = 'Podane lata nie są liczbą całkowitą';
}

if (! is_numeric($opr)){
	$messages [] = 'Podane oprocentowanie nie jest liczbą całkowitą';
}

if (count($messages) !=0) return false;
else return true;
}

//wykonywanie obliczeń
function process(&$kwota, &$lata, &$opr, &$messages, &$result){
	global $role;

	$kwota = intval($kwota);
	$lata = intval($lata);
	$opr = intval($opr);

	if ($role == 'admin'){
		$result = $kwota*($opr/100)*$lata;
	} else{
		$messages [] = 'Tylko administrator może wykonać działanie';
	}
	
}

$kwota = null;
$lata = null;
$opr = null;
$result = null;
$messages = [];

getParams($kwota, $lata, $opr);
if (validate($kwota, $lata, $opr, $messages)){
	process($kwota, $lata, $opr, $messages, $result);
}

include 'calc_view.php';