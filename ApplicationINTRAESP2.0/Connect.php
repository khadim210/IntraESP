<?php
try{
	 $bdd=new PDO('mysql:host=localhost;dbname=intraesp_test','root','');

	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}

	global $bdd;
?>	