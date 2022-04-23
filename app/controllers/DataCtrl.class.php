<?php

namespace app\controllers;

class DataCtrl {

	
public $database;

public function action_database() {			

	try {

		$this->database = getDB()->select("wynik","*");	


		} catch (\PDOException $ex) {
			getMessages()->addError("Błąd bazy danych: ".$ex->getMessage());
		}

    	$this->generateView();	

		}
	
	

public function generateView() {

        getSmarty()->assign('page_title','Kalkulator');
        getSmarty()->assign('page_description','Kalkulator oprocentowana kredytowego');

	    getSmarty()->assign('database', $this->database);
		getSmarty()->display('DataView.tpl');	
			
	}

}

?>