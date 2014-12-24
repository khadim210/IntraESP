<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent'])) {

	$a= new Agent($_SESSION['idAgent']);
	
	$condition= "a.idAgent = r.idAgent and idTypeRole= 3 and a.idStructure = s.idStructure ";
	
	$table = "role r,agents a,structure s";
	
	$select = "idRole,nom,prenom,libStructure,telephone";
	
$ChefDeDept = $a->UniversalRequest($condition, $table,$select);
	
	
}

$doc = new Document('Responsabilité',"","","","");

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

if (isset($_GET['demission'])) {
	if ($_GET['demission'] == 'success') {
		$doc->Alert("success", "Félicitation ", "Démission effectué avec succès !");
	}
}


$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");


$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();



$doc->beginBigSection("Chef de Département");

include_once ('../vue/ResponsabiliteChefDeDept_vue.php');

$doc->endBigSection();


$doc->endRow();
$doc->end();

 // Fin session Condition

?>