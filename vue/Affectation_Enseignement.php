<?php

session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');




if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	$r= new Role();
	
	$libAgentClasse = $r->RequestFetched('idAgent ='.$_SESSION['idAgent'],'classe');
	
	$AgentClasse = "'".$libAgentClasse."'";

	$struct = new Structure();
	
	$idStructure = $a->__get('idStructure');
	
	$request  = 'idStructure = '.$idStructure;
	
	$agent_per = $a->Request($request);
	
	// Récuperation pats
	
	switch ($idStructure) {
		
		case 4:
		$libDept ='Dept Génie Electrique';
//		$condition = "agence = ".$libDept;
//		$table = 'agent_pats';
//		$agent_pats = $a->UniversalRequest($condition,$table,'PRENOMS,NOM');
		break;
		
		case 5:
		$libDept ='Dept Gestion';
		break;
		case 6:
		$libDept ='Dept Génie Chimique & Biologie Appliquée';
		break;
		case 7:
		$libDept ='Dept Génie Mécanique';
		break;

		case 8:
			$libDept ='Dept Génie Informatique';
		break;
		
		case 10:
			$libDept ='Dept Génie Civil';
		break;
		
		
	}

	// Récuperation Département
	
//	$condition = "`DEPT/SERVICE`=".$libDept;

//	$condition = "agence = ".$libDept;
	
//	$table = 'agent_pats';
	
//	$agent_pats =$pats->Request($condition);
	
//	$agent_pats = $a->UniversalRequest($condition,$table,'PRENOMS,NOM');

	// Récuperation pats
	

	$condition = "f.idDepartement = ".$a->__get('idStructure')." AND (a.idStructure = f.idDepartement)";
	
	$D = $a->UniversalRequest($condition, 'agents a , formation f','DISTINCT idFormation,libFormation');
	
	$FormationData = array($D);
		
	// Récuperation Formation

	$idFormation = array();
	
	for ($i = 0; $i <count($D); $i++) {
		
		array_push($idFormation, $D[$i]['idFormation']);
		
	}
		
	$ClasseData = array();
	
	$D1 = array();
	
	foreach ($idFormation as $value) {
		
//		$request = 'c.idFormation = f.idFormation AND (f.idFormation = '.$value.')';
//		$table = 'classe c , formation f';
//		$D1 = $a->UniversalRequest($request,$table ,'idClasse,libClasse'); // C'est ici que cela bloque
		
//		array_push($ClasseData, $D1);
		
	}
	
	foreach ($idFormation as $key => $value) {
//		$request = 'c.idFormation = f.idFormation AND (c.idFormation = '.$value.')';
//		$table = 'classe c , formation f';
//		$D1 = $a->UniversalRequest($request,$table ,'idClasse,libClasse'); // C'est ici que cela bloque
		
//		array_push($ClasseData, $D1);
	}
	
	for ($i = 0; $i < count($idFormation); $i++) {
		
		$request = 'c.idFormation = f.idFormation AND (c.idFormation = '.$idFormation[$i].')AND (libClasse ='.$AgentClasse.')';
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

	
	
	$MatiereData1 = array();
	$MatiereData2 = array();
	$MatiereData3 = array();
	
	foreach ($idClasse as $value) {
		
		$request = "m.idClasse = ".$value." AND idSemestre = 1";
		
		$table = "classe c , matiere m";
		
		$D2 = $a->UniversalRequest($request,$table,' DISTINCT idMatiere,libMatiere,CM,TP,TD');
		
		array_push($MatiereData1, $D2);
	}
	
	
	
	foreach ($idClasse as $value) {
	
		$request = "m.idClasse = ".$value." AND idSemestre = 2";
	
		$table = "classe c , matiere m";
	
		$D3 = $a->UniversalRequest($request,$table,' DISTINCT idMatiere,libMatiere,CM,TP,TD');
	
		array_push($MatiereData2, $D3);
	}
	
	foreach ($idClasse as $value) {
	
		$request = "m.idClasse = ".$value." AND idSemestre = 3";
	
		$table = "classe c , matiere m";
	
		$D4 = $a->UniversalRequest($request,$table,' DISTINCT idMatiere,libMatiere,CM,TP,TD');
	
		array_push($MatiereData3, $D4);
	}
	
	//$MatiereData = array($D2);
	
	// Récuperation Classe
	
	
	
	

} // Fin If statement




$doc = new Document('Affectation Enseignement');

$doc->userLevel = $a->getLevel();

//$doc->userLevel = 2;

//$doc->userLevel = 3; // Le Chef de Département

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");

$doc->breadcrumb($libDept,$libAgentClasse);

$doc->beginRow();

$doc->menu();




//$Data = "Ici devrait s'afficher l'interface d'Affectation";



//$Data = array();

$Data = 6;


$doc->beginBigSection("Affectation Enseignement Premier Semestre");

$header = array('Matière','CM','TD','TP','CM','TD','TP');

//$doc->Table("striped", $header,$MatiereData[0]);

//print_r($MatiereData[0][0]['libMatiere']);

include_once ('../vue/Affectation_Enseignement_vue1.php');

//print_r(($ClasseData[2]));
//print_r(count($ClasseData));
//print_r($idClasse);
//print_r(($MatiereData[0]));
//print_r($idFormation);
//echo "idFormation :";
//print_r($idFormation);
//echo "D1 :";
//print_r($D1);
//print_r($AgentClasse);



$doc->endBigSection();

$doc->beginBigSection("Affectation Enseignement Second Semestre");

$header = array('Matière','CM','TD','TP','CM','TD','TP');

//$doc->Table("striped", $header,$MatiereData[0]);

//print_r($MatiereData[0][0]['libMatiere']);

include_once ('../vue/Affectation_Enseignement_vue.php');

//print_r($ClasseData);
//print_r($idClasse);
//print_r(($MatiereData[0]));
//print_r(count($agent_per));
//echo "idFormation :";
//print_r($idFormation);
//echo "D1 :";
//print_r($D);


$doc->endBigSection();


$doc->beginBigSection("Affectation Enseignement Premier et Second Semestre");

$header = array('Matière','CM','TD','TP','CM','TD','TP');

//$doc->Table("striped", $header,$MatiereData[0]);

//print_r($MatiereData[0][0]['libMatiere']);

include_once ('../vue/Affectation_Enseignement_vue2.php');

//print_r($ClasseData[0]);
//print_r($idClasse);
//print_r(($MatiereData[0]));
//print_r(count($agent_per));
//echo "idFormation :";
//print_r($idFormation);
//echo "D1 :";
//print_r($D1);


$doc->endBigSection();



$doc->endRow();


$doc->end();


?>