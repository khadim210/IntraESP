<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Historique extends CoreObject
{

private	$idHistorique;
private $idAgent;
private $idMatiere;
private $libMois;
private $CM;
private $TP;
private $TD;

protected $table="historiqueaffectation";

	function __construct($idHistorique=null)
	{
		parent::__construct();
		$this->Historique = $idHistorique;
	}



} // Fin de la classe structure





 ?>