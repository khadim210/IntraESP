<?php 
// LA CLASS FORMFIELD A.K.A LES CHAMPS DE FORMULAIRE

// C'est la classe de base pour la construction des formulaires

// dérivée en :

// **	FormFieldText, FormFieldEmail, FormFieldPassword

// **	FormFieldTextArea

// **	FormFieldSelect, FormFieldRadio, FormFieldCheckbox

define("FORM_FIELD_TEXT",1);
define("FORM_FIELD_SELECT",4);
define("FORM_FIELD_TEXTAREA",3);
define("FORM_FIELD_PASSWORD",2);




abstract class FormField 
{
	// nom des champs 
	protected $name;
	// le label visible
	protected $label;
	// type du champs
	protected $type;
	// Si champs obligatoire(boolean)
	protected $required;
	// message à afficher sous le champs
	protected $message;
	// valeurs entrée par l'utilisateur
	protected $value;

	
	function __construct($name,$label,$type,$required,$message)
	{
		$this->name =$name;
		$this->label =$label;
		$this->type = $type;
		$this->required = $required;
		$this->message = $message;
		
	}
	
	function redefine() {
		
		switch ($this->type) {
			
			case 1:
			return '<input name='.$this->name.' type="text">';
			break;
			
			case 2:
			return '<input name='.$this->name.' type="password">';
			break;
			
				
			
		}
	}

	function generate() {
		$this->redefine();
	}

	// Cette fonction vérifie si les champs sont vides ou pas 
	// il retourne null si tout est ok

	public function check()
	{
		# code...

	//	return null;
	}
}


 ?>