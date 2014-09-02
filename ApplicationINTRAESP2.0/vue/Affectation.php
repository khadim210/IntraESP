<?php

session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

require_once ('../vue/Tabbable.class.php');

require_once ('../vue/FormFieldSelect.class.php');

require_once ('../vue/FormFieldText.class.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	$struct = new Structure();


	$D=$struct->Request("idtypeStructure = 1 AND libStructure NOT LIKE 'P%'",'libStructure,idStructure');
	
	$D1 =$struct->Request("idtypeStructure = 3",'libStructure,idStructure');
	
	$D2 =$struct->Request("idtypeStructure = 2",'libStructure,idStructure');
	
	
}

$Departement = array();
$Laboratoire = array();
$Service = array();

$idDepartement = array();
$idLaboratoire = array();
$idService = array();

for ($i = 0; $i < count($D); $i++) {
	
	array_push($Departement, $D[$i]['libStructure']);
	array_push($idDepartement, $D[$i]['idStructure']);
}


for ($i = 0; $i < count($D1); $i++) {

	array_push($Laboratoire, $D1[$i]['libStructure']);
	array_push($idLaboratoire, $D1[$i]['idStructure']);
}

for ($i = 0; $i < count($D2); $i++) {

	array_push($Service, $D2[$i]['libStructure']);
	array_push($idService, $D2[$i]['idStructure']);
}


$doc = new Document('Affectation');

$doc->userLevel = $a->getLevel();

//$doc->userLevel = 2;

//$doc->userLevel = 3; // Le Chef de Département

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");

$doc->breadcrumb();

$doc->beginRow();

$doc->menu();




//$Data = "Ici devrait s'afficher l'interface d'Affectation"; 

$header = array('1','2','3','4');


//$Data = array();

$Data = 6;


$doc->beginBigSection("Affectation Chef de Département");

$donne = array();

foreach ($idDepartement as $value) {
	
	$request = '(s.idStructure = a.idStructure) AND( a.idStructure = '.$value.')';
	$table = "agents a, structure s";
	$data =$a->UniversalRequest($request,$table,'idAgent,nom,prenom');
	
	array_push($donne, $data);
}


include_once ('../vue/Affectation_Departement_vue.php');


$doc->endBigSection();


$doc->beginBigSection("Affectation Chef de Laboratoire");

$donne = array();

foreach ($idLaboratoire as $value) {
	
	$request = '(s.idStructure = a.idStructure) AND( a.idStructure = '.$value.')';
	$table = "agents a, structure s";
	$data =$a->UniversalRequest($request,$table,'idAgent,nom,prenom');
	
	array_push($donne, $data);
}

include_once ('../vue/Affectation_Laboratoire_vue.php');



$doc->endBigSection();




$doc->beginSection("Affectation Chef de Service");

$donne = array();

foreach ($idService as $value) {
	
	$request = '(s.idStructure = a.idStructure) AND( a.idStructure = '.$value.')';
	$table = "agents a, structure s";
	$data =$a->UniversalRequest($request,$table,'idAgent,nom,prenom');
	
	array_push($donne, $data);
}

include_once ('../vue/Affectation_Service_vue.php');

$doc->endSection();



$doc->endRow();


$doc->end();


?>