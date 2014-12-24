<?php 
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');




/**
* 
*
*
*/
class ConfigurationProfil_controller extends Controller
{
	
	
	private $newPassword;
	
	private $idAgent;
	
	
	function __construct()
	{
		parent::__construct();

	}

//	Redefinition de l'algorithme d'exécution
	protected function execute()
	{	

		$control = $_GET['control'];
		
		switch ($control) {
			case 'Password':

				$this->destination = "ConfigurationProfil.php?SetPassword=success";
				
				$this->repertoire = "vue";
				
				if (isset($_POST['password'])) {
				
					$this->newPassword = $_POST['password'];
				
				}
				
				if (isset($_POST['idAgent'])) {
				
					$this->idAgent = $_POST['idAgent'];
				
				}
				
				
				
				$a = new Agent();
				
				
				
				$a->update('idAgent ='.$this->idAgent,"password ='".$this->newPassword."'");
				
				
				
				
				
				
				
			break;
			
				
			
			default:
				;
			break;
		}
		
		
				
		

		

		

	}

	protected function repost($url)
	{
		$dataArray = $this->repost_data;
		
		foreach ($dataArray as $key => $value) {
			
			$url=$url.'&'.$key.'='.$value;
		}

		// Redirection Apres ajout des paramètres entrées

		header('Location: '.$url);
	}


	
} // Fin de la classe Athentificate_controller



if (isset($_GET['control'])) {
	
	$Conf = new ConfigurationProfil_controller();
	
	$Conf->process();

	print_r($_POST);


}else{
	
	echo "Houston we have a Problem !!";
	
}



 ?>