<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Formation extends CoreObject
{

private	$idFormation;
private	$idDepartement;
private	$libFormation;
private	$duree;
private $codeFormation;

protected $table="formation";

	function __construct($idFormation=null)
	{
		parent::__construct();
		$this->idFormation = $idFormation;
	}

	public function __get($attributeName)
	{
		parent::__get($attributeName);
	
		$request = $this->bdd->prepare("SELECT * FROM `".$this->table."` WHERE `idFormation`=?") or die(print_r($req->errorInfo()));
	
		$request -> execute(array($this->idFormation));
	
		$reponse = $request->fetch();
	
		return $reponse[$attributeName];
	
	}
	
	
} // Fin de la classe structure





 ?>