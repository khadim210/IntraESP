<?php 
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');




/**
* 
*
*
*/
class Vacation_controller extends Controller
{
	
	public  $idMatiere;

	public $idClasse;
	
	public  $typeCours;
	
	public  $idAgent;
	
	public $debutCours;
	
	public $finCours;
	
	public $libelleCours;

	public  $request;

	function __construct()
	{
		parent::__construct();

	}

//	Redefinition de l'algorithme d'exécution
	protected function execute()
	{	

		$control = $_GET['control'];
		
		switch ($control) {
			case 'Enseignement':

				$this->destination = "CahierDeTexte.php?idClasse=".$_POST['idClasse'];
				
				$this->repertoire = "vue";
				
				if (isset($_POST['idClasse'])) {
					$this->idClasse = $_POST['idClasse'];
				}
				
				if (isset($_POST['idMatiere'])) {
				
					$this->idMatiere = $_POST['idMatiere'];
				
				}
				
				if (isset($_POST['typeCours'])) {
				
					$this->typeCours = $_POST['typeCours'];
				
				}
				
				if (isset($_POST['debutCours'])) {
				
					$this->debutCours = $_POST['debutCours'];
				
				}
				
				if (isset($_POST['finCours'])) {
				
					$this->finCours = $_POST['finCours'];
				
				}
				
				if (isset($_POST['libelleCours'])) {
				
					$this->libelleCours = "'".$_POST['libelleCours']."'";

				
				}
				
				if (isset($_POST['idEnseignant'])) {
				
					$this->idAgent = $_POST['idEnseignant'];
				
				}
				
				if (isset($_POST['matriculeEnseignant'])) {
				
					$this->matriculeEnseignant = $_POST['matriculeEnseignant'];
				
				}
				
				$libJour =  "'".date("d")."'" ;
				
				$libMois =  "'".date("m")."'" ;
				
				$libAnnee =  "'".date("Y")."'" ;
				
				$h = new Historique();
				
				$af = new Affectation();
				
				$condition = "idMatiere =".$this->idMatiere." AND idAgent =".$this->idAgent;
				
				$select = "idAffectation,CM,TP,TD";
				
				$Affectation = $af->Request($condition,$select);
				
				$CM =  $Affectation[0]['CM'];
				
				$TP = $Affectation[0]['TP'];
				
				$TD = $Affectation[0]['TD'];
				
				$idAffectation = $Affectation[0]['idAffectation'];
				
				$af = new Affectation($idAffectation);
				
				
				
				if ($this->typeCours == 'CM') {
					$heure =  $this->finCours - $this->debutCours;
					$setting = "".$heure.",0,0";
					$CM = $CM-$heure;
				}
				if ($this->typeCours == 'TP') {
					$heure =  $this->finCours - $this->debutCours;
					$setting = "0,".$heure.",0";
					$TP = $Affectation['TP']-$heure;
				}
				if ($this->typeCours == 'TD') {
					$heure =  $this->finCours - $this->debutCours;
					$setting = "0,0,".$heure."";
					$TD = $Affectation['TD']-$heure;
				}
				
	$this->request = $values = "".$this->idAgent.",".$this->idMatiere.",".$this->idClasse.",".$libJour.",".$libMois.",".$libAnnee.",".$setting.",".$this->libelleCours;
				
				$h->insert("idAgent,idMatiere,idClasse,libJour,libMois,libAnnee,CM,TP,TD,libelleCours",$values);
				
				
				$condition = "idAffectation =".$idAffectation."";
				
				$setting = "CM =".$CM.",TP =".$TP.",TD =".$TD."";
				
				
				$af->update($condition,$setting);
				
		
				
			break;
				
			
			default:
				;
			break;
		}
		
		
				
		

		

		

	}

	protected function repost($url)
	{
		$dataArray = $this->repost_data;
		
		foreach ($dataArray as $key => $value) {
			
			$url=$url.'&'.$key.'='.$value;
		}

		// Redirection Apres ajout des paramètres entrées

		header('Location: '.$url);
	}


	
} // Fin de la classe Athentificate_controller



if (isset($_GET['control'])) {
	
	$vac = new Vacation_controller();
	
	$vac->process();
	
	

	print_r($_POST);


}else{
	
	echo "Houston we have a Problem !!";
	
}



 ?>