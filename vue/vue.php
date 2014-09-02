<?php

session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_GET['idAgent']) ) {

	$a= new Agent($_GET['idAgent']);

	$_SESSION['idAgent'] = $_GET['idAgent'];
	
}

$doc = new Document('Page');

$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get('nom'));

$doc->Alert("success", "Bravo ", "Vous vous êtes connecté avec succes !");

$doc->breadcrumb();

$doc->beginRow();

$doc->menu();


$doc->beginBigSection("Section");
echo "Ceci est un Démo D'Authentification Avec une Personalisation de L'interface suivant le  Niveau de l'utilisateur";
$doc->endBigSection();

$doc->endRow();


$doc->end();


?>