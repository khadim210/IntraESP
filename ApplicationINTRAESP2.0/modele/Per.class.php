<?php 

require_once('Agent.class.php');
require_once('Connect.class.php');




/**
*
*
* 
**/
class Per extends Agent
{
	
private $bdd;
protected $table = "agent_per";

	function __construct(){
	
		$base= new Connect();
		$this->bdd= $base->getBdd();

	}



}


 ?>