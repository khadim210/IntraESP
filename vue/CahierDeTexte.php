<?php

session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');




if (isset($_GET['idClasse']) ) {
	
	$a = new Agent();
	
	
	
	$MatiereData = array();
	
	$idClasse= $_GET['idClasse'];
	
	$c = new Classe($idClasse);
	
	$request = "m.idClasse = ".$idClasse."";
	
	$table = "classe c , matiere m";
	
	$D = $a->UniversalRequest($request,$table,' DISTINCT idMatiere,libMatiere');
	
	array_push($MatiereData, $D);
	
	
	$idFormation = $c->__get('idFormation');
	
	$f = new Formation($idFormation);
	
	$idDepartement = $f->__get('idDepartement');
	
	$agent_per = $a->Request("idStructure =".$idDepartement,"idAgent,nom,prenom");
	
	$Ex = new AgentExterne();
	
	$condition = "(x.idStructure = ".$idDepartement." AND x.idAgent = a.idAgent)";
	
	$table = "agent_externe x,agents a";
	
	$select = "nom,prenom,x.idAgent";
	
	$Agent_Ex = $Ex->UniversalRequest($condition, $table,$select);
	
	$Enseignant = array_merge($agent_per,$Agent_Ex);
}

	

	$doc  = new Document("Cahier de Texte","","","../monJs/AjaxLib.js");
	
	$doc->userLevel = 5; // 5 pour le Responsable de Classe
	
	$doc->begin();
	
	$doc->header();
	
	
	
	
	$doc->beginRow();
	
	
	
	
	include_once ('../vue/CahierDeTexte_vue.php');
	
	
//	print_r($Enseignant);
	
	$doc->endRow();
	
	
	$doc->end();
	
	
	
	?>