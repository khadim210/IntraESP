<?php
session_start();
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class ResetPassword_Controller extends Controller {
	
	
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Redéfinition de l'algorithme d'exécution

	protected function execute(){
		
		session_destroy();
		
		$this->destination="";
		
		$this->repertoire = ".";
					
		$a = new Agent();
		
		$all = $a->listAll();
		
		for ($i = 0; $i < count($all); $i++) {
			
			$a->update('idAgent ='.$all[$i]['idAgent'],"password ='".$all[$i]['matricule']."'");
			
		}
		
		
			
			

	}
	


}// fin de la classe

$res = new ResetPassword_Controller();

$res->process();

