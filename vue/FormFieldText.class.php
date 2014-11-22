<?php 

// LA CLASS  FORMFIELDTEXT 
// Elle g�n�re les champs de type text	
// dérivée en :

// **	FormFieldPassword pour les mots de passe
// **	FormFieldEmail pour les emails


class FormFieldText extends FormField {
// Taille du text
protected $size;
// longueur max
protected $maxlength;
// constructeur
function construct($name,$label,$required,$message,$size,$maxlength) {

	// red�finition du constructeur comme en java

	parent:: construct($name,$label,FORM_FIELD_TEXT,$required,$message);

	$this->size=$size;
	$this->maxlength=$maxlength;
	}
}

 ?>