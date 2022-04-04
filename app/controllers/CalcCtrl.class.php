<?php namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
	    $this->form->lata = getFromRequest('lata');
	    $this->form->opr = getFromRequest('opr');
    }

    public function validate(){
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->opr))){
		return false;
	}

        if ($this->form->kwota == ""){
            getMessages()->addError('Nie podano kwoty');
        }

        if ($this->form->lata == ""){
            getMessages()->addError('Nie podano ilości lat');
        }

        if ($this->form->opr == ""){
            getMessages()->addError('Nie podano oprocentowania');
        }

        if(!getMessages()->isError()){
            if (! is_numeric($this->form->kwota)){
                getMessages()->addError('Podana kwota nie jest liczbą całkowitą');
            }

            if (! is_numeric($this->form->lata)){
                getMessages()->addError('Podane lata nie są liczbą całkowitą');
            }

            if (! is_numeric($this->form->opr)){
                getMessages()->addError('Podane oprocentowanie nie jest liczbą całkowitą');
            }
        }
        return ! getMessages()->isError();
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

        getSmarty()->assign('page_title','Kalkulator');
        getSmarty()->assign('page_description','Kalkulator oprocentowana kredytowego');
    
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('CalcView.tpl');
    }



}









