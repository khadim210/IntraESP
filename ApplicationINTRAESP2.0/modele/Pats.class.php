<?php 

require_once('Agent.class.php');
require_once('Connect.class.php');


/**
* 
*
*
**/


class Pats extends Agent
{

 protected $bdd;
 protected $table ="agent_pats";

	function __construct()
	{
	$base= new Connect();
	$this->bdd= $base->getBdd();
	}


} // Fin de la classe Agent





 ?>