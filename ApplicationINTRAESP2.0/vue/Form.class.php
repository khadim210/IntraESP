<?php 

/*
classe chargÃ©e de gÃ©rer le formulaire, dont :
*initialisation des champs
*vÃ©riï¬�cation que les champs requis sont saisis




*/


class Form {

	// nom du formulaire
	protected $name;
	// l'action lors de l'envoi
	protected $action;
	// methode (POST ou GET)
	protected $method;
	// tableau des champs
	protected $fieldsets=array();
	// javascript
	protected $js;
	/** constructeur
	* @param $name nom du formulaire
	* @param $action l'action lors de l'envoi
	* @param $method post ou get
	* @param $js javascript */
	function construct($name,$action,$method="POST",$js=""){
		
		$this->action = $action;
		$this->name = $name;
		$this->method = $method;
		$this->js = $js;
		
	}
	// ajouter un nouveau champ
	function add_fieldset($fieldset){
		
		array_push($this->fieldsets, $fieldset);

	}
	/** genere formulaire
	* @param $highlight highlight obligatoire pour les champs vides (true
	* ou false) */
	function generate($title=false,$highlight=false){

		echo '<form class="form" action ='.$this->action.' method='.$this->method.'>';
		echo '';
		foreach ($this->fieldsets as $value) {
			echo $value;
		}	
		
		echo '</form>';
	}
	// Cette fonction vÃ©rifie si les champs sont vide ou pas 
	// il retourne null si tout est ok
	function check(){

	}
}


 ?>