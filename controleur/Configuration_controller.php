<?php 
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');




/**
* 
*
*
*/
class Configuration_controller extends Controller
{
	
	

	public $idClasse;
	
	public $idAgent;
	
	public $motdepasse;
	
	public  $request;

	function __construct()
	{
		parent::__construct();

	}

//	Redefinition de l'algorithme d'exécution
	protected function execute()
	{	

		$control = $_GET['control'];
		
		switch ($control) {
			case 'ResponsableClasse':

				$this->destination = "Enseignant.php?PWsetting=success";
				
				$this->repertoire = "vue";
				
				if (isset($_POST['idClasse'])) {
				
					$this->idClasse = $_POST['idClasse'];
				
				}
				
				
				$this->motdepasse = $_POST['motdepasse'];
				
				$this->idAgent = $_POST['idAgent'];
				
				$r = new Role();
				
				$ExistingPassWord = $r->RequestFetched("ClassePassword  ='".$this->motdepasse."'",'ClassePassword');
				
				if (isset($ExistingPassWord)) {
					$this->destination = "Enseignant.php?PWsetting=fail";
				}else{
				
					$condition = "idAgent = ".$this->idAgent;
				
					$setting = "ClassePassword  ='".$this->motdepasse."'";
				
					$r->update($condition,$setting);
				}
				
				
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
	
	$conf = new Configuration_controller();
	
	$conf->process();


}else{
	
	echo "Houston we have a Problem !!";
	
}



 ?>