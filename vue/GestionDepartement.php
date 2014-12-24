<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent'])) {

	$a= new Agent($_SESSION['idAgent']);
	
	
	
}

$doc = new Document('Gestion Enseignant',"","","","");

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");


$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();

include_once ('../GestionDepartement.php');

$doc->endRow();



$doc->end();

 // Fin session Condition

?>