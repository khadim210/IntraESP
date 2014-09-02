<?php 



/**
*	LA CLASSE ADMINISTRATEUR
*
*
*
*/
class Administrateur extends Agent
{
	
	public $userlevel;
	private $login;
	private $password;

	function __construct()
	{
		
	}

	public function getLevel()
	{
		return $this->userlevel;
	}
}

 ?>