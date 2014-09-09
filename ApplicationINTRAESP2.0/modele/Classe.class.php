<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Classe extends CoreObject
{

private	$idClasse;
private	$libClasse;
private	$codeClasse;
private	$idFormation;

protected $table="classe";

	function __construct($idClasse=null)
	{
		parent::__construct();
		$this->idClasse = $idClasse;
	}

	function listClasse() {
		parent::listAll();
		
		$sql = "SELECT * FROM ".$this->table." WHERE idFormation = ".$this->idFormation;
		
		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse;
		
		
	}
	// Avoir la valeur d'un champs sachant l'id 
	

} // Fin de la classe structure





 ?>