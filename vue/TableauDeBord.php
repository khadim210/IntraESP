<?php
session_start();

if (isset($_SESSION['idAgent'])) { // debut session condition

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if ( (isset($_GET['idAgent']) OR isset($_SESSION['idAgent'])) )  {

//	$a= new Agent($_GET['idAgent']) or

	$a= new Agent($_SESSION['idAgent']);
	$pats = new Pats();


	switch ($a->getLevel()) {
		case 3:
		$condition = "af.idMatiere = m.idMatiere AND m.idClasse = c.idClasse GROUP BY libClasse";
		$table = "affectation af ,matiere m,classe c";
		$select = "sum(af.CMEff),sum(af.TPEff),sum(af.TDEff),sum(m.CM),sum(m.TP),sum(m.TD),libClasse";	
		$stat =	$a->UniversalRequest($condition, $table,$select);
		
		
		
		$h = new Historique();
		
		$condition = "1 GROUP BY libMois,libAnnee";
		
		$select = "sum(CM),sum(TP),sum(TD),libAnnee,libMois";
		
		$stat1=$h->Request($condition,$select);
		
		break;
		
		default:
			;
		break;
	}
	
}

$doc  = new Document("Tableau de Bord","","../morris/morris.css","../morris/morris.js","charset=''");

$doc->userLevel = $a->getLevel();

$doc->embedScript("../MonJs/Raphael/raphael-min.js");

$doc->begin();

$doc->header($a->__get("nom"));

$doc->Alert("success", "Bravo", "Vous vous êtes connecté avec succès");

$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

//$doc->beginRow();

$doc->beginSection("Statistiques Générals");


include_once ('../vue/Statistique_vue.php');


//print_r(($stat1));



$doc->endSection();

//$doc->endRow();

$doc->beginRow();

switch ($a->getLevel()) {
	case 1:
	$doc->beginSmallSection("Agent", $a->count());
	;
	break;
	
	case 2:
	$doc->beginSmallSection("Agent", $a->count());
	;
	break;
	
	case 3:
	$request  = 'idStructure = '.$a->__get("idStructure");
	
	$count = $a->RequestFetched($request,'count(*)');
	
	$doc->beginSmallSection("Agent", $count);
	;
	break;
	
	case 4:
		$request  = 'idStructure = '.$a->__get("idStructure");
	
		$count = $a->RequestFetched($request,'count(*)');
	
		$doc->beginSmallSection("Agent", $count);
		;
		break;
	
	default:
		;
	break;
}


// La liste des Agents

$doc->endSmallSection();

$doc->beginSmallSection("P.A.T.S", $pats->count());

// La listes des PATS

$doc->endSmallSection();


$doc->endRow();



$doc->beginRow();

$doc->beginSmallSection("Banque",null);

// La listes des PATS

$doc->endSmallSection();

switch ($a->getLevel()) {
	case 1:
		$doc->beginSmallSection("Chef de Département",6);
	;
	break;
	
	case 2:
		$doc->beginSmallSection("Chef de Département",6);
		;
		break;
	case 3:
		$doc->beginSmallSection("Responsable Pédagogique",6);
		;
		break;
		
	default:
		;
	break;
}



// La listes des PATS

$doc->endSmallSection();



$doc->endRow();

$doc->beginScript();

switch ($a->getLevel()) {
	case 1:
		
		;
		break;

	case 2:
		
		;
		break;
	case 3:
		include_once ('../vue/StatDepartement.php');
		;
		break;

	default:
		;
		break;
}




$doc->endScript();

$doc->end();

}else{
	header('Location: ../');
} // Fin session Condition