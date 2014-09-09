<?php 

/*
 LA CLASS CONTROLLER

classe abstraite comportant les attributs suivants :

 * action (string) : action à exécuter
 * destination (string) : page de destination après exécution du traitement
 * repertoire(string) : chemin menant vers la page de destination
 * repost_data(array) : regroupe les données à renvoyer (encore)

 PS: seul les fonctions protected peuvent être réeutilisation par la classe fille
 	donc la classe fille devra definir l' algorigthme d' execution :execute() et la politique de reposter les données : repost()

*/



abstract class Controller {
		// action à exécuter
		protected $action;
		// page de destination php
		protected $destination;
		// repertoire de la page de destination
		protected $repertoire;
		// donnée à reposter (si necessaire)
		protected $repost_data;
		// constructeur
		public function __construct(){

		$this->action=""; 

		$this->destination="index.php";

		$this->repost_data=array();

		$this->repertoire = "vue";

		}

		// process : déroule l'algorigthme avec la redirection
		public function process() {

		$this->action=$_GET['control']; 
		$this->execute();
		$url='http://'.$_SERVER['HTTP_HOST'].'/Application INTRAESP 2.0/'.$this->repertoire.'/'.$this->destination;
		if (count($this->repost_data)==0) header('Location: '.$url);
		else $this->repost($url);

		

		}
		
		// algorithme d'exécution

		protected function execute(){

		}
		// reposter les données à $this->destination
		protected function repost($url){

		}


}



/*

*****************************************
*										*
* 	EXEMPLE D'UTILISATION DE LA CLASSE 	*
*										*
*****************************************

<li><a href=’controleur/uneclasse_controller.php?action=create’>ajouter</a></li>
<form name=’user_login’ action=’controleur/uneclasse_controller.php?action=login’>

*/



 ?>