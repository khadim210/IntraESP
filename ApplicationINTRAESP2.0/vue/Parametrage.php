<?php
session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

include ('../MonFrameWork.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
		
	$FetchedData = $a->UniversalRequest("(a.idStructure = s.idStructure  AND a.idTypeAgent = t.idTypeAgent   AND a.idGrade = g.idGrade)  OR ( isnull(a.idTypeAgent))","agents a, structure s, typeagent t,grades g","nom, prenom, matricule, Fonction, libTypeAgent,libGrade,libStructure");
}



$Header  = array("Nom","Prénom","Matricule","Fonction","Type","Grade","Structure");

$doc  = new Document("Menu Paramètrage","","../MonCss/DT_bootstrap.css","../MonJs/DT_bootstrap.js","charset=''");

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get("nom"));

$doc->Alert("success", "Bravo", "Vous vous êtes connecté avec succès");

$doc->beginRow();



$doc->menu();

$doc->beginBigSection("Agents");

$doc->DataTable($Header, $FetchedData);

$doc->endBigSection();

$doc->endRow();

$doc->end();