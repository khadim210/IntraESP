<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Role extends CoreObject
{

private	$idRole;
private	$idAgent;
private $idTypeRole;

protected $table="role";


	function __construct($idRole=null)
	{
		parent::__construct();
		$this->idRole = $idRole;
	}


	// Avoir la valeur d'un champs sachant l'id 
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);

		$request = $this->bdd->prepare("SELECT * FROM `role` WHERE `idRole`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->idRole));

		$reponse = $request->fetch();
		
		return $reponse[$attributeName];

	}

	public function __set($a,$b)
	{
		# code...
	}

	// Compte le nombre de ligne

	public function count()
	{
		return parent::count();	
	}

	public function listAll()
	{
		return parent::listAll();

		
	}

	

	



} // Fin de la classe structure





 ?>