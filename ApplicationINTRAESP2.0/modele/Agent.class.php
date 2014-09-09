<?php 

require_once('CoreObject.class.php');


/**
* 
*
*
**/
class Agent extends CoreObject
{

private	$id;
private	$nom;
private	$prenom;
private	$matricule;
private	$Fonction;
private	$idTypeAgent;
private	$idGrade;
private	$idStructure;
private	$telephone;
private	$email;

// Redéfinition de l'attribut table
// et Cela dans tout les classes héritées de CoreObject

protected  $table= 'agents';

function __construct($id=null)
	{
		parent::__construct();
		$this->id = $id;
	}

	public function __get($attributeName)
	{
		parent::__get($attributeName);

		$request = $this->bdd->prepare("SELECT * FROM `agents` WHERE `idAgent`=?") or die(print_r($req->errorInfo()));
		
		$request -> execute(array($this->id));

		$reponse = $request->fetch();
		
		return $reponse[$attributeName];

	}
	public function __set($a,$b)
	{
		# code...
	}

	
	
	// Savoir S'il est PATS OU PAS

	public function isPats()
	{
		
		$request = $this->bdd->prepare("SELECT MledeSolde FROM `agent_pats` pats WHERE pats.MledeSolde in (SELECT matricule FROM `agents` a WHERE idAgent=? ) ") or die(print_r($request->errorInfo()));

		$request -> execute(array($this->id));
		
		$reponse = $request->fetch();

		
		if (isset($reponse)) {
			return true;
		}else{
			return false;
		}
	}

	// Savoir s'il est Administrateur

	public function isAdministrateur()
	{

		return false;
	}

	// Savoir s'il est Responsable Pédagogique

	public function isResponsable()
	{

		return false;
	}
	
	public function isEnseignant(){
		
		
		return false;
	}

	public function getLevel() {
		
		$request = $this->bdd->prepare("SELECT level FROM typerole t  WHERE t.idTypeRole in (SELECT idTypeRole FROM role r WHERE idAgent = ?)  ") or die(print_r($request->errorInfo()));
		
		$request->execute(array($this->id));
		
		$reponse =$request->fetch();
		
		return $reponse[0];
	}


} // Fin de la classe Agent





 ?>