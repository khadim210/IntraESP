<?php 
/*

classe abstraite qui regroupe plusieurs champs corrÃ©lÃ©s

dÃ©rivÃ©e en :

FormFieldSetInputs : pour les champs Ã  saisir
FormFieldSetButtons : pour les boutons
*/


abstract class FormFieldSet {
// array of fields that compose the fieldset
	protected $fields;
	// constructeur
	function construct() {
		$this->fields=array();
	}
	// ajout nouveau champs
	function add_field($field){
		
		array_push($this->fields, $field);

	}
	// genere une partie du formulaire
	function generate(){
		
	//	echo  '<fieldset>';
		foreach ($this->fields as $value) {
			echo $value;
		}
	//	echo '</fieldset>';
		
	}
	// Configure les valeurs des champs depuis le tableau donnÃ©
	function set($array){
		
		foreach ($array as $key => $value) {
			;
		}
	}
	// Configure les valeurs des champs depuis $_POST
	function get_fields_from_post(){
	}
	// Cette fonction vÃ©rifie si les champs sont vide ou pas 
	// il retourne null si tout est ok
	function check(){

	}
}


 ?>