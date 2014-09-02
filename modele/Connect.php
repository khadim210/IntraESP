<?php
	

	 function Connect()
{
//	global $bdd;

	try{
	 $bdd=new PDO('mysql:host=localhost;dbname=intraesp_test','root','');
	 return $bdd;
	}
	catch(Exception $e){
		die('Erreur :'.$e->getMessage());
	}

	
}

	
?>	