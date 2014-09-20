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

	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `classe` WHERE `idClasse`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->idClasse));
	
		$reponse = $request->fetch();
	
		return $reponse[$attributeName];
	
	}
	
	

} // Fin de la classe structure





 ?>