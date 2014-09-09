<?php 

/*

LA CLASS FORMFIELDSELECT

gÃ¨re les champs de type select
dÃ©rivÃ©e en :
**	FormFieldPassword pour les mots de passe
**	FormFieldEmail pour les emails


*/

include_once ('../vue/FormField.class.php');

class FormFieldSelect extends FormField {
	protected $options;
function __construct($name,$label,$required,$message,$options) {
	parent::__construct($name,$label,FORM_FIELD_SELECT,$required,$message);
	$this->options=$options;
}

	function generate() {
		parent::generate();
		$option = '';
		foreach ($this->options as $key => $value) {
			$option = $option .'<option value='.$key.'>'.$value.'</option>';
		}
		
		return '<select>'.$option.'</select>';
		
	}

	function get_options() {
		return $this->options;
	}
	function get_option_value($key) {
		return $this->options[$key];
	}
	function check() {
	if ($this->required==true) {
			if (empty($this->value)) return $this;
			if ($this->value==-32768) return $this;
		}
		return null;
	}
}


/*

*****************************************
*										*
* EXEMPLE D'UTILISATION DE LA CLASSE 	*
*										*
*****************************************

$options=array(1=>"rouge", 2=>"vert", 3=>"bleu");
$fields=new FormFieldSelect("couleur","",true,"couleur prÃ©fÃ©rÃ©e",$options);



*/




 ?>