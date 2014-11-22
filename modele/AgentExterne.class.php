<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class AgentExterne extends CoreObject
{

private	$idAgentExterne;
private $idAgent;
private $idStructure;

protected $table="agent_externe";

	function __construct($idAgentExterne=null)
	{
		parent::__construct();
		$this->idAgentExterne = $idAgentExterne;
	}



} // Fin de la classe structure





 ?>