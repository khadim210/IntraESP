<?php 

require_once('CoreObject.class.php');


/**
* 
*
*	precision libMois est du type :"jour-Mois" exemple "29-07"
**/
class Mois  extends CoreObject
{

private	$idMois;
private	$libMois;

protected $table="mois";

	function __construct($idMois=null)
	{
		parent::__construct();
		$this->idMois = $idMois;
	}


	// Avoir la valeur d'un champs sachant l'id 
	
	public function __get($attributeName)
	{
		parent::__get($attributeName);

		$request = $this->bdd->prepare("SELECT * FROM `mois` WHERE `idMois`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->idMois));

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
		$request = $this->bdd->query("SELECT count(*) FROM `mois`") or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse[0];
		
	}

	public function listAll()
	{
		$request = $this ->bdd->query("SELECT * FROM `mois`") or die(print_r($request->errorInfo()));

		$reponse = $request->fetch();

		return $reponse;
	}

	

	



} // Fin de la classe structure





 ?>