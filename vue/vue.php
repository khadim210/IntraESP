<?php

session_start();

header("Location :TableauDeBord.php");

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_GET['idAgent']) AND  ($_GET['idAgent']) <> '' ) {

	$a= new Agent($_GET['idAgent']);
	
	$r= new Role();
	
	$c = new Classe();
	
	$idAgent = $_GET['idAgent'];
	
	$password = $a->__get("password");
	
	$matricule = $a->__get("matricule");
	
	$_SESSION['NomPrenom'] = "".$a->__get("prenom")." ".$a->__get("nom");
	
	if ($idAgent != '') {
		$_SESSION['Classe']=$r->RequestFetched('idAgent ='.$idAgent,'classe');
	}
	
	

	$libClasse = "'".$_SESSION['Classe']."'";
	
	$_SESSION['idClasse']=$c->RequestFetched('libClasse ='.$libClasse,'idClasse');
	
	$_SESSION['idAgent'] = $_GET['idAgent'];
	
	$_SESSION['idStructure'] = $a->__get('idStructure');
	
	switch ($_SESSION['idStructure']) {
	
		case 4:
			$libDept ='Dept G�nie Electrique';
			break;
	
		case 5:
			$libDept ='Dept Gestion';
			break;
		case 6:
			$libDept ='Dept G�nie Chimique & Biologie Appliqu�e';
			break;
		case 7:
			$libDept ='Dept G�nie M�canique';
			break;
	
		case 8:
			$libDept ='Dept G�nie Informatique';
			break;
	
		case 10:
			$libDept ='Dept G�nie Civil';
			break;
	
	
	}
	
	$_SESSION['Departement'] = $libDept;
	
	
}

$doc = new Document('Page d\'Acceuil',"","","","http-equiv='refresh' content='0;url=TableauDeBord.php' ");

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous �tes connect� avec succes !");

if ($matricule == $password) {
	$doc->Alert("warning", "Conseil ", "Pensez � modifier votre Mot de Passe car vous vous connectez avec le <strong> mot de passe par d�faut </strong>. Merci !");
}

$doc->breadcrumb($_SESSION['Departement'],$_SESSION['Classe']);

$doc->beginRow();

$doc->menu();


$doc->beginBigSection("Actualit�");
echo "Ceci est un D�mo D'Authentification Avec une Personalisation de L'interface suivant le  Niveau de l'utilisateur";
$doc->endBigSection();

$doc->endRow();



$doc->end();

 // Fin session Condition




?>