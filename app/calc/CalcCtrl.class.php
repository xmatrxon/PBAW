<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	    $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	    $this->form->opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
    }

    public function validate(){
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->opr))){
		return false;
	}

        if ($this->form->kwota == ""){
            $this->msgs->addError('Nie podano kwoty');
        }

        if ($this->form->lata == ""){
            $this->msgs->addError('Nie podano ilości lat');
        }

        if ($this->form->opr == ""){
            $this->msgs->addError('Nie podano oprocentowania');
        }

        if(!$this->msgs->isError()){
            if (! is_numeric($this->form->kwota)){
                $this->msgs->addError('Podana kwota nie jest liczbą całkowitą');
            }

            if (! is_numeric($this->form->lata)){
                $this->msgs->addError('Podane lata nie są liczbą całkowitą');
            }

            if (! is_numeric($this->form->opr)){
                $this->msgs->addError('Podane oprocentowanie nie jest liczbą całkowitą');
            }
        }
        return ! $this->msgs->isError();
    }

    public function process(){
        $this->getparams();

        if($this->validate()){
        $this->form->kwota = intval($this->form->kwota);
	    $this->form->lata = intval($this->form->lata);
	    $this->form->opr = intval($this->form->opr);

        $this->result->result = $this->form->kwota*($this->form->opr/100)*$this->form->lata;
        }
        
        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title','Kalkulator');
        $smarty->assign('page_description','Kalkulator oprocentowana kredytowego');
    
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);
        $smarty->assign('msgs',$this->msgs);

        $smarty->display($conf->root_path.'/app/calc/CalcView.tpl');
    }



}









