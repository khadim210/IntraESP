<?php

session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');




if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);

	$struct = new Structure();
	
	$idStructure = $a->__get('idStructure');
	
	$request  = 'idStructure = '.$idStructure;
	
	$agent_per = $a->Request($request);
	
	// Récuperation pats
	
	
	

	$condition = "f.idDepartement = ".$a->__get('idStructure')." AND (a.idStructure = f.idDepartement)";
	
	$D = $a->UniversalRequest($condition, 'agents a , formation f','DISTINCT idFormation,libFormation');
	
	$FormationData = array($D);
	
	$condition ="(a.idAgent= r.idAgent) and (a.idStructure = ".$_SESSION['idStructure'].") and (idtyperole = 4)";
	
	$table = "role r,agents a";
	
	$select ="classe,nom,prenom,telephone";
	
	$Responsable = $a->UniversalRequest($condition, $table,$select);
		
	// Récuperation Formation

	$idFormation = array();
	
	for ($i = 0; $i <count($D); $i++) {
		
		array_push($idFormation, $D[$i]['idFormation']);
		
	}
		
	$ClasseData = array();
	
	$D1 = array();
	
	
	
	
	for ($i = 0; $i < count($idFormation); $i++) {
		
		$request = 'c.idFormation = f.idFormation AND (c.idFormation = '.$idFormation[$i].')';
		$table = 'classe c , formation f';
		$D1 = $a->UniversalRequest($request,$table ,'idClasse,libClasse'); // C'est ici que cela bloque
		
		array_push($ClasseData, $D1);
		
	}
	
	
	
	$idClasse = array();
	$Classe = array();
	
	for ($i = 0; $i < count($D1); $i++) {
		
		//array_push($idClasse, $D1[$i]['idClasse']);
		//array_push($Classe, $D1[$i]['libClasse']);
		
	}
	
	for ($i = 0; $i < count($ClasseData); $i++) {
		
		for ($y = 0; $y < count($ClasseData[$i]); $y++) {

			array_push($idClasse, $ClasseData[$i][$y]['idClasse']);
			array_push($Classe, $ClasseData[$i][$y]['libClasse']);
			
		}
	}
	

	

} // Fin If statement




$doc  = new Document("Responsable Pédagogique","","../MonCss/DT_bootstrap.css","../MonJs/DT_bootstrap.js","charset=''");

$doc->userLevel = $a->getLevel();

//$doc->userLevel = 2;

//$doc->userLevel = 3; // Le Chef de Département

$doc->begin();

$doc->header($a->__get('nom'));

if (isset($_GET['mission'])) {
	if ($_GET['mission'] == 'success') {
		$doc->Alert("warning", "Félicitation ", "Affectation effectué avec succès !");
	}
}


$doc->breadcrumb($_SESSION['Departement']);

$doc->beginRow();

$doc->menu();




//$Data = "Ici devrait s'afficher l'interface d'Affectation";



//$Data = array();

$Data = 6;


$doc->beginBigSection("Affectation Responsable Pédagogique");



include_once ('../vue/Affectation_ResponsablePedagogique_vue.php');


$doc->endBigSection();


$doc->beginBigSection("Les Responsables Pédagogiques");

include_once ('../vue/ResponsablePedagogique_vue.php');



$doc->endBigSection();

$doc->endRow();


$doc->end();


?>