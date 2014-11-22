<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	$r= new Role();
	
	$Classe = "'".$_SESSION['Classe']."'";

	$condition = "( ((h.idAgent = a.idAgent) AND  (h.idAgent = ".$_SESSION['idAgent'].")) AND (h.idMatiere = m.idMatiere) AND (c.idClasse = h.idClasse) ) GROUP BY h.idMatiere,h.idClasse";
	
	$table = "historiqueaffectation h,agents a ,Matiere m,Classe c";
	
	$DataAffectation = $a->UniversalRequest($condition, $table,"nom ,prenom,sum(h.CM),sum(h.TP),sum(h.TD),m.CM,m.TP,m.TD,libMatiere,libClasse");
	

	if (isset($_SESSION['NomPrenom'])) {
		
		$NomProfil = $_SESSION['NomPrenom'];
	}
	
}

$doc = new Document('Profil');

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");




$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();


$doc->beginBigSection("Mon Profil");


include_once ('../vue/Profil_vue.php');


$ClasseFiltered = array_chunk($DataAffectation, 1) ;


//print_r($DataAffectation);




$doc->endBigSection();

$doc->endRow();


$doc->end();



?>