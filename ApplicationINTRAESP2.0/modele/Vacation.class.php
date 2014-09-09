<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Vacation extends CoreObject
{

private	$idAffectation;
private	$idMois;

protected $table="vacation";


	function __construct($idAffectation=null)
	{
		parent::__construct();
		$this->idAffectation = $idAffectation;
	}


	// Avoir la valeur d'un champs sachant l'id 
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);

		$request = $this->bdd->prepare("SELECT * FROM `vacation` WHERE `idAffectation`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->idAffectation));

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