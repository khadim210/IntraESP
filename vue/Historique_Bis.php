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

$Data = array();
	for ($i = 0; $i < count($Historique); $i++) {

		

			array_push($Data,array($Historique[$i]['libJour']."-".$Historique[$i]['libMois']."-".$Historique[$i]['libAnnee'],$Historique[$i]['prenom']." ".$Historique[$i]['nom'],$Historique[$i]['libClasse'],$Historique[$i]['libMatiere'],$Historique[$i]['CM'],$Historique[$i]['TP'],$Historique[$i]['TD']));
		
	
		
	}

}

$doc  = new Document("Historique","","../MonCss/DT_bootstrap.css","../MonJs/DT_bootstrap.js","charset=''");

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");

$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();

$Header =array("Date","Prenom Nom","Classe","Matière","CM","TP","TD") ;

$doc->beginBigSection("Historique de Vacation");


$doc->DataTable($Header, $Data);


$doc->endBigSection();

$doc->endRow();


$doc->end();



?>