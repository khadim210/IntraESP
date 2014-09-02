<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Grade extends CoreObject
{

private	$idGrade;
private	$libGrade;
private $idTypeAgent;


	function __construct($idGrade=null)
	{
		$this->idGrade = $idGrade;
		
		parent::__construct();
		
	}


	// Avoir la valeur d'un champs sachant l'id 
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);

		$request = $this->bdd->prepare("SELECT * FROM `grades` WHERE `idGrade`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->idGrade));

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
		$request = $this->bdd->query("SELECT count(*) FROM `grades`") or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse[0];
		
	}

	public function listAll()
	{
		$request = $this ->bdd->query("SELECT * FROM `grades`") or die(print_r($request->errorInfo()));

		$reponse = $request->fetch();

		return $reponse;
	}

	

	



} // Fin de la classe structure





 ?>