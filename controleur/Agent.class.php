<?php 


require_once('Controller.class.php');
require_once('modele/Agent.class.php');

/**
*	Class Controller Agent 
*	(Controller de la Classe Métier Agent de Modele/Agent.class.php) 
*
*
*
*/
class Agent_controller extends Controller
{
	
	

	function __construct()
	{
		
		# code...

	}

	public function getLevel()
	{
		# code...
	}

	// Définition de l'algorithme d'éxécution 
	public function execute()
	{
		parent::execute();
		// Nouvel algorithme de d'éxécution
	}

	public function repost($url)
	{
		parent::repost();
		// Nouvel algorithme de repost()
	}
}

 ?>