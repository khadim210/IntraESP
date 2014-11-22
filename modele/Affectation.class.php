<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Affectation  extends CoreObject
{

private	$idAffectation;
private	$idMatiere;
private $idAgent;
private $CM;
private $TP;
private $TD;


protected $table="affectation";


	function __construct($idAffectation=null)
	{
		parent::__construct();
		$this->idAffectation = $idAffectation;
	}


	// Avoir la valeur d'un champs sachant l'id 
	

	// Compte le nombre de ligne



	

	



} // Fin de la classe structure





 ?>