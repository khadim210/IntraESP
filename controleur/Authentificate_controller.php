<?php 
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');




/**
* 
*
*
*/
class Authentificate_controller extends Controller
{
	
	public  $login;

	public  $motdepasse;
	
	public  $idAgent;

	public  $request;

	function __construct()
	{
		parent::__construct();

	}

//	Redefinition de l'algorithme d'exécution
	protected function execute()
	{	

		$this->destination = "vue.php?";

		$this->repertoire = "vue";

		if (isset($_POST['login'])) {

			$this->login = $_POST['login'];

		}
		

		$this->motdepasse = $_POST['motdepasse'];

		$prenom = substr($this->login, 0,1);

		$nom = substr($this->login, 2);


		$a = new Agent();
		
		$prenom = $prenom.'%';

		$this->request ="prenom LIKE '".$prenom."' AND nom = '".$nom."' AND matricule= '".$this->motdepasse."'";

		$reponse = $a->Request($this->request,'idAgent');
		
		//$this->idAgent = $reponse[0]['idAgent'];
		
		$this->idAgent = $reponse[0]['idAgent'];
	
	
	
		$this->repost_data['login'] = $this->login;
		
		$this->repost_data['motdepasse'] = $this->motdepasse;
		
		$this->repost_data['idAgent'] = $this->idAgent;
		
		

		

		

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
	
	$auth = new Authentificate_controller();
	
	$auth->process();


}else{
	
	echo "Houston we have a Problem !!";
	
}



 ?>