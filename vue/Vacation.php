<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	$r= new Role();
	
	$Classe = "'".$_SESSION['Classe']."'";

	switch ($a->getLevel()) {
		case 4:
			$condition = "((a.idStructure = ".$_SESSION['idStructure']." AND (af.idAgent = a.idAgent)) AND (af.idMatiere = m.idMatiere) AND (c.idClasse = m.idClasse) AND (c.libClasse=".$Classe."))";
		break;
		
		case 3:
			$condition = "((a.idStructure = ".$_SESSION['idStructure']." AND (af.idAgent = a.idAgent)) AND (af.idMatiere = m.idMatiere) AND (c.idClasse = m.idClasse) )";		
		break;
		
		default:
			;
		break;
	}
	
	
	
	
	$table = "agents a ,affectation af,matiere m,classe c";
	
	$DataAffectation = $a->UniversalRequest($condition, $table,"nom ,prenom,af.CM,af.TP,af.TD,m.CM,m.TP,m.TD,libMatiere,libClasse");
	
		
	
}

$doc = new Document('Vacation');

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");

$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();


$doc->beginBigSection("Vacation Du Mois Courant");

include_once ('../vue/Vacation_vue.php');


$doc->endBigSection();

$doc->endRow();


$doc->end();



?>