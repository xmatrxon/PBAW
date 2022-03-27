<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


function getParams(&$form){
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['opr'] = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}


function validate(&$form, &$infos, &$msgs, &$hide_intro){
	if (!(isset($form['kwota']) && isset($form['lata']) && isset($form['opr']))){
		return false;
	}

$infos [] = 'Przekazano parametry.';

if ($form['kwota'] == ""){
	$msgs [] = 'Nie podano kwoty';
}

if ($form['lata'] == ""){
	$msgs [] = 'Nie podano ilości lat';
}

if ($form['opr'] == ""){
	$msgs [] = 'Nie podano oprocentowania';
}

if (count ($msgs) == 0) {

if (! is_numeric($form['kwota'])){
	$msgs [] = 'Podana kwota nie jest liczbą całkowitą';
}

if (! is_numeric($form['lata'])){
	$msgs [] = 'Podane lata nie są liczbą całkowitą';
}

if (! is_numeric($form['opr'])){
	$msgs [] = 'Podane oprocentowanie nie jest liczbą całkowitą';
}

}

if (count($msgs) > 0) return false;
else return true;
}


function process(&$form, &$infos, &$msgs, &$result){

	$infos [] = 'Parametry poprawne. Wykonuję obliczenia';


	$form['kwota'] = floatval($form['kwota']);
	$form['lata'] = floatval($form['lata']);
	$form['opr'] = floatval($form['opr']);

	$result = $form['kwota']*($form['opr']/100)*$form['lata'];
	
}

$form = null;
$infos = array();
$messages = array();
$result = null;

getParams($form);
if (validate($form,$infos,$messages,$hide_intro)){
	process($form,$infos,$messages,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_description','Kalkulator oprocentowana kredytowego');
$smarty->assign('page_title','Kalkulator');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.tpl');