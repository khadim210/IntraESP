<?php 

if (is_numeric($_GET["idAgent"])) {
	
	echo $_GET['login'].'<br>';
	echo $_GET['motdepasse'].'<br>';
	echo $_GET['idAgent'].'<br>';

	echo " Authentification test Succeded !";
}else{

	echo " Authentification test Failed !";
}




 ?>