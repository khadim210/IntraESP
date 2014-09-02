<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Structure extends CoreObject
{

private	$idStructure;
private	$codeStructure;
private	$idtypeStructure;
private	$libStructure;
private	$DateCreation;

protected  $table= 'structure';

	function __construct($idStructure=null)
	{
		parent::__construct();
		$this->idStructure = $idStructure;
	}

	public function __get($attributeName)
	{
		parent::__get($attributeName);

		$request = $this->bdd->prepare("SELECT * FROM `structure` WHERE `idStructure`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->idStructure));

		$reponse = $request->fetch();
		
		return $reponse[$attributeName];

	}

	

	
	

	



} // Fin de la classe structure





 ?>