<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	$struct = new Structure();
	
	
	$D=$struct->Request("idtypeStructure = 1 AND libStructure NOT LIKE 'P%'",'libStructure,idStructure');
	
	$Ex = new AgentExterne();
	
	$condition = "(x.idStructure = ".$_SESSION['idStructure']." AND x.idAgent = a.idAgent) AND s.idStructure = a.idStructure AND a.idgrade = g.idGrade AND a.idTypeAgent = t.idTypeAgent";
	
	$table = "agent_externe x,agents a,structure s,grades g,Typeagent t";
	
	$select = "nom,prenom,libStructure,libGrade,libTypeagent,email,Telephone";
	
$FetchedData = $Ex->UniversalRequest($condition, $table,$select);
	
	
} // fin if isset
	
$Departement = array();
$idDepartement = array();

for ($i = 0; $i < count($D); $i++) {

	array_push($Departement, $D[$i]['libStructure']);
	array_push($idDepartement, $D[$i]['idStructure']);
}


	$doc  = new Document("Enseignants Externes","","../MonCss/DT_bootstrap.css","../MonJs/DT_bootstrap.js","charset=''");
	
	$doc->userLevel = $a->getLevel();
	
	$doc->begin();
	
	$doc->header($a->__get('nom'));
	
	$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");
	
	$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);
	
	$doc->beginRow();
	
	$doc->menu();
	
	
	$doc->beginBigSection("Ajout Agent Externe");
	
	$donne = array();
	
	foreach ($idDepartement as $value) {
	
		$request = '(s.idStructure = a.idStructure) AND( a.idStructure = '.$value.')';
		$table = "agents a, structure s";
		$data =$a->UniversalRequest($request,$table,'idAgent,nom,prenom');
	
		array_push($donne, $data);
	}
		
	include_once ('../vue/Enseignant_Externe_vue.php');
	
	$doc->endBigSection();
	
	
	$doc->beginBigSection("Liste Agents Externes");
	
	$Header = array("Nom","Prénom","Département","Fonction","TypeAgent","Email","Téléphone");
	
	$doc->DataTable($Header, $FetchedData);
	
	$doc->endBigSection();
	
	
	
	
	$doc->endRow();
	
	
	$doc->end();
	
	
	
	?>