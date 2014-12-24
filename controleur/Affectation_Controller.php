<?php
require_once ('../lib/autoload2.inc.php');
require_once('Controller.class.php');

class Affectation_Controller extends Controller {
	
	private $userLevel;
	
	
	
	function __construct() {
		
		parent::__construct();
	}

protected function execute(){
	
	$this->repertoire = 'vue';
	
	$this->destination = 'Affectation.php?mission=success';
		
	$r = new Role();
	
	$af = new Affectation();
	
	$h = new Historique();
	
	$ag = new AgentExterne();
		
	switch ($_GET['control']) {
		
		case 'Departement':
	$this->repertoire = 'vue';
			
	$this->destination = 'Affectation.php?mission=success';
						
	$r->insert('idAgent,idTypeRole',''.$_POST['idAgentdept'].',3');
	
		break;
		
		case 'Externe':
			$this->repertoire = 'vue';
				
			$this->destination = 'Enseignant_Externe.php?mission=success';
		
			$idAgent = $_POST['idAgentdept'];
			
			$idStructure = $_POST['idStructureDept'];
			
			$ag->insert('idAgent,idStructure',''.$idAgent.','.$idStructure);
		
		break;
		
		
		case 'Laboratoire':
			
	$this->repertoire = 'vue';
			
	$this->destination = 'Affectation.php?mission=success';
						
	$r->insert('idAgent,idTypeRole',''.$_POST['idAgentLab'].',6');
	
		break;
		
		case 'Service':
			
	$this->repertoire = 'vue';
			
	$this->destination = 'Affectation.php?mission=success';
			
	$r->insert('idAgent,idTypeRole',''.$_POST['idAgentServ'].',7');
	
		break;
		
		case 'ResponsablePedagogique':
			
	$this->repertoire = 'vue';
				
	$this->destination = 'Affectation_ResponsablePedagogique.php?mission=success';
	
	$idagent = $_POST['idAgentResponsable'];
	
	$classe = $_POST['Classe'];
	
	$classe = "'".$classe."'";
	
	$condition = "classe=".$classe."";
	
	$idRole = $r->RequestFetched($condition,'idRole');
	
	if (isset($idRole)) {
		$this->destination = 'Affectation_ResponsablePedagogique.php?mission=fail';
	}else{
	
	$values = "".$idagent.",4,".$classe."";
	
	$r->insert('idAgent,idTypeRole,classe',$values);
	}
			
		break;
		
		case 'Enseignement': // Affectation d'Enseignement
				
	$this->repertoire = 'vue';

	$this->destination = 'Affectation_Enseignement.php?mission=success';
		
	$idAgent = $_POST['idAgent'];
		
	$idMatiere = $_POST['idMatiere'];
	
	if (isset($_POST['CM'])) {
		$CM = $_POST['CM'];	
	}else{
		$CM = 0;
	}
	
	if (isset($_POST['TP'])) {
		$TP = $_POST['TP'];
	}else{
		$TP = 0;
	}
	
	if (isset($_POST['TD'])) {
		$TD = $_POST['TD'];
	}else{
		$TD = 0;
	}
		
	
			
	$values = "".$idMatiere.",".$idAgent.",".$CM.",".$TP.",".$TD.",".$CM.",".$TP.",".$TD;

	$af->insert('idMatiere,idAgent,CM,TP,TD,CMAff,TPAff,TDAff',$values);
	
//	$r->insert('idAgent,idTypeRole,classe',$values);
				
		break;
		
		case 'Enseignant':
				
	$this->repertoire = 'vue';
		
	
		
	$idAffectation = $_POST['idAffectation'];
		
	$CM = $_POST['CM'];
	
	$TP = $_POST['TP'];

	$TD = $_POST['TD'];
	
	$idMatiere = $_POST['idMatiere'];
	
	$idClasse = $_POST['idClasse'];
	
//	$libMois =  "".idate("Y")."'-'".idate("m") ;

	$libJour =  "".date("d")."" ;
	
	$libMois =  "".date("m")."" ;
	
	$libAnnee =  "".date("Y")."" ;
	
	$idAgent = $_POST['idAgent'];
	
	$CMset = $_POST['CMAffecte']-$_POST['CM'];
	
	$TPset = $_POST['TPAffecte']-$_POST['TP'];
	
	$TDset = $_POST['TDAffecte']-$_POST['TD'];
	
	$CMEff = $_POST['CMAffecte']+$CMset;
	
	$TPEff = $_POST['TPAffecte']+$TPset;
	
	$TDEff = $_POST['TDAffecte']+$TDset;
	
	if (isset($_POST['action'])) {
		
		if ($_POST['action']=='update') {
			
			$setting = "CM =".$CM.",TP =".$TP.",TD =".$TD.",CMEff =".$CMEff.",TPEff =".$TPEff.",TDEff =".$TDEff;
			
			$condition = "idAffectation =".$idAffectation."";
			
			$af->update($condition,$setting);
			
			$values = "".$idAgent.",".$idMatiere.",".$idClasse.",".$libJour.",".$libMois.",".$libAnnee.",".$CMset.",".$TPset.",".$TDset;
			
			$h->insert("idAgent,idMatiere,idCLasse,libJour,libMois,libAnnee,CM,TP,TD",$values);
			
			$this->destination = 'Enseignant.php?update=success';
			
		}
		
		if ($_POST['action']=='delete') {
			
			$condition = "idAffectation =".$idAffectation."";
			
			$af->delete($condition);
			
			$this->destination = 'Enseignant.php?demission=success';
		}
		
	}
					
		break;	

	case 'Responsabilite':
		
		if (isset($_POST['idRole'])) {

			$idRole =$_POST['idRole']; 
			
			$condition = "idRole =".$idRole."";
				
			$r->delete($condition);
				
			$this->destination = 'Responsabilite.php?demission=success';
		}
		
	break;
		
		default:
			;
		break;
	}
	
	
	
}

protected function repost($url){
	;
}


}

if (isset($_GET['control'])){
	echo $_GET['control'] ;
	echo '<br>' ;
	echo 'POST :' ;
	echo print_r($_POST) ;
	
	
	$aff = new Affectation_Controller();
	
	$aff->process();
	
	
	
}else {
	echo "Houston we have a problem";
}