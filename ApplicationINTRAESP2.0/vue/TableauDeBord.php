<?php
session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if ( (isset($_GET['idAgent']) OR isset($_SESSION['idAgent'])) )  {

//	$a= new Agent($_GET['idAgent']) or

	$a= new Agent($_SESSION['idAgent']);
	$pats = new Pats();

//	$_SESSION['idAgent'] = $_GET['idAgent'];

}

$doc = new Document('Tableau De Bord');

$doc->userLevel = $a->getLevel();


$doc->begin();

$doc->header($a->__get("nom"));

$doc->Alert("success", "Bravo", "Vous vous êtes connecté avec succès");

$doc->breadcrumb();

//$doc->beginRow();

$doc->beginSection("Statistiques Générals");

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

$doc->end();