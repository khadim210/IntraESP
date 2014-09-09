<?php
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class Affectation_Controller extends Controller {
	
	private $userLevel;
	
	
	
	function __construct() {
		
		parent::__construct();
	}

protected function execute(){
	
	$this->repertoire = 'vue';
	
	$this->destination = 'Affectation.php?mission=success';
		
	$r = new Role();
	
		
	switch ($_GET['control']) {
		
		case 'Departement':
	$this->repertoire = 'vue';
			
	$this->destination = 'Affectation.php?mission=success';
						
	$r->insert('idAgent,idTypeRole',''.$_POST['idAgentdept'].',3');
	
		break;
		
		case 'Laboratoire':
			
	$this->repertoire = 'vue';
			
	$this->destination = 'Affectation.php?mission=success';
						
	$r->insert('idAgent,idTypeRole',''.$_POST['idAgentLab'].',6');
	
		break;
		
		case 'Service':
			
	$this->repertoire = 'vue';
			
	$this->destination = 'Affectation.php?mission=success';
			
	$r->insert('idAgent,idTypeRole',''.$_POST['idAgentServ'].',7');
	
		break;
		
		case 'ResponsablePedagogique':
			
	$this->repertoire = 'vue';
				
	$this->destination = 'Affectation_ResponsablePedagogique.php?mission=success';
	
	$idagent = $_POST['idAgentResponsable'];
	
	$classe = $_POST['Classe'];
	
	$classe = "'".$classe."'";
	
	$values = "".$idagent.",4,".$classe."";
	
	$r->insert('idAgent,idTypeRole,classe',$values);
			
		break;
		
		default:
			;
		break;
	}
	
	
	
}

protected function repost($url){
	;
}


}

if (isset($_GET['control'])){
	echo $_GET['control'] ;
	echo '<br>' ;
	echo 'POST :' ;
	echo print_r($_POST) ;
	if (isset($_POST['Classe'])) {
	echo print $_POST['Classe']	;
	}else{
	echo 'Classe non défini';	
	}
	
	$aff = new Affectation_Controller();
	
	$aff->process();
}else {
	echo "Houston we have a problem";
}