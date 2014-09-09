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


	
} // Fin de la classe structure





 ?>