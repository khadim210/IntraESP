<?php
session_start();
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class TypeFormation_Controller extends Controller {
	
	
	
	
	
	function __construct() {
		
		parent::__construct();
	}

// Redéfinition de l'algorithme d'exécution

	protected function execute(){
		
		session_destroy();
		
		$this->destination="";
		
		$this->repertoire = ".";
					
		$f = new Formation();
		
		$all = $f->listAll();
		
		for ($i = 0; $i < count($all); $i++) {
			
			if (($all[$i]['libFormation'][0].$all[$i]['libFormation'][1] == 'Li')  or ($all[$i]['libFormation'][0].$all[$i]['libFormation'][1] == 'DS') or ($all[$i]['libFormation'][0].$all[$i]['libFormation'][1] == 'Ma')) {
				
			$set = "idTypeFormation = 2";
			}else{

				$set = "idTypeFormation = 1";
			}
			
			$f->update('idFormation ='.$all[$i]['idFormation'],$set);
			
		}
		
		
			
			

	}
	


}// fin de la classe

$type = new TypeFormation_Controller();

$type->process();

