<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	$h = new Historique();
		

	$table = "historiqueaffectation h,agents a,classe c,matiere m";
	
	$select = "nom,prenom,libMatiere,libClasse,libJour,libMois,libAnnee,h.CM,h.TP,h.TD";
	
	$condition = "(h.idAgent = a.idagent) AND (h.idMatiere = m.idMatiere) AND (h.idClasse = c.idClasse) AND(a.idStructure =".$_SESSION['idStructure'].")";
	
$Historique = $h->UniversalRequest($condition, $table,$select);
	
}

$doc = new Document('Historique');

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");

$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();


$doc->beginBigSection("Historique de Vacation");

	include_once ('../vue/Historique_vue.php');


$doc->endBigSection();

$doc->endRow();


$doc->end();



?>