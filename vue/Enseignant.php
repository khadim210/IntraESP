<?php
session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
	
	
$Classe = "'".$_SESSION['Classe']."'";	
	$condition = "((a.idStructure = ".$_SESSION['idStructure']." AND (a.idAgent = af.idAgent)) AND (af.idMatiere = m.idMatiere) AND (c.idClasse = m.idClasse) AND (c.libClasse=".$Classe."))";
	
	$table = "agents a ,affectation af,Matiere m,Classe c";
	
	$Data = $a->UniversalRequest($condition, $table,"idAffectation,nom ,prenom,af.CM,af.TP,af.TD,libMatiere,libClasse,m.idMatiere,c.idClasse,af.idAgent");
	
	
}


$doc = new Document('Gerer Enseignement',"","","../MonJs/G_E.js");

$doc->userLevel = $a->getLevel();


$doc->begin();

$doc->header($a->__get('nom'));

if (isset($_GET['demission'])) {
	if ($_GET['demission'] == 'success') {
		$doc->Alert("success", "F�licitation ", "D�mission effectu� avec succ�s !");
	}
}

if (isset($_GET['update'])) {
	if ($_GET['update'] == 'success') {
		$doc->Alert("success", "F�licitation ", "Mise � jour effectu� avec succ�s !");
	}
}

if (isset($_GET['PWsetting'])) {
	if ($_GET['PWsetting'] == 'success') {
		$doc->Alert("success", "F�licitation ", "Mot de Passe d�finie avec succ�s !");
	}else{
		$doc->Alert("error", "Oups ", "Ce mot de passe existe d�j� !, Choisir un autre mot de passe");
	}
}




$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->Alert("Danger", "Hint ", "D�crementer l'heure effectu�e par l'enseignant.");

$doc->beginRow();

$doc->beginBigSection("Mes Enseignants");

$Header  = array("Nom","Pr�nom","CM","TP","TD","Matiere","Classe");

include_once ('../vue/Enseignant_vue.php');

//print_r($Data[1]);

$doc->endBigSection();


$doc->beginBigSection("Responsable de Classe");

include_once ('../vue/Config_ResponsableClasse_vue.php');

//print_r($_SESSION);

$doc->endBigSection();


$doc->endRow();


$doc->end();
