<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Matiere extends CoreObject
{

private	$idMatiere;
private $codeMatiere;
private $idClasse;
private $libMatiere;
private $coefMatiere;
private $CM;
private $TP;
private $TD;

protected $table="matiere";

	function __construct($idMatiere=null)
	{
		parent::__construct();
		$this->idMatiere = $idMatiere;
	}



} // Fin de la classe structure





 ?>