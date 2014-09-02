<?php 
require_once ('lib/autoload.inc.php');
require_once('Controller.class.php');



/**
* 
*
*
*/
class Authentificate_controller extends Controller
{
	
	protected $action;
	
	protected $destination;
	
	protected $repertoire;

	protected $repost_data;

	private $idAgent;

	function __construct()
	{
		parent::__construct();
	}

//	Redefinition de l'algorithme d'exécution
	public function execute()
	{	
		$login = $_POST['login'];
		
		$motdepasse = $_POST['motdepasse'];

		$prenom = substr($login, 0);

		$nom = substr($login, 2);

		$a = new Agent();

		$condition ='prenom LIKE '.$prenom.'% AND nom ='.$nom.' AND matricule='.$motdepasse.'';

		$idAgent = $a->Request($condition,'idAgent');

	}

	public function repost($url)
	{
		# code...
	}

	
}

 ?>