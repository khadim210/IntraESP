<?php
session_start();


require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');



if (isset($_POST['idMatiere'])) {
	
	$idMatiere = $_POST['idMatiere'];

	$a = new Agent();

	$condition = "af.idAgent = a.idAgent AND idMatiere =".$idMatiere;

	$table = "affectation af,agents a";

	$select = "a.idAgent,nom,prenom";

	$ProfessorData = $a->UniversalRequest($condition, $table,$select);
	
	if (!isset($ProfessorData[0])) {
		echo '<option>No Professor Match </option>';
	}
	
	for ($i = 0; $i < count($ProfessorData); $i++) {
			
		echo "<option value = '".$ProfessorData[$i]['idAgent']."' > ".$ProfessorData[$i]['prenom']." ".$ProfessorData[$i]['nom']." </option>";
	}

	
}

if (isset($_POST['idAgent'])) {

	$idAgent = $_POST['idAgent'];

	$a = new Agent();

	$condition = "af.idMatiere = m.idMatiere AND idAgent =".$idAgent;

	$table = "affectation af,matiere m";

	$select = "m.idMatiere,libMatiere";

	$MatiereData = $a->UniversalRequest($condition, $table,$select);
	
	if (!isset($MatiereData[0])) {
		echo '<option>No Subject Match </option>';
	}

	for ($i = 0; $i < count($MatiereData); $i++) {
			
		echo "<option value = '". $MatiereData[$i]['idMatiere']."' > ".utf8_encode($MatiereData[$i]['libMatiere'])."  </option>";
	}


}

