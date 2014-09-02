<?php 
// LA CLASSE COREOBJECT
// La mère de tout les objects
// Cette classe a pour but de réaliser des taches de bases:
// * Obtention de la valeur d'un attribut
// * fixer la valeur d'un attribut
// * transformation an format (String,Json) ceci sera utile vous verrai




Class CoreObject{

	protected   $bdd;
	protected   $table;

	// Le constructeur par défaut vide
	public function __construct(){
		
		$this->bdd = connectMysql();

	}

	// retourne le nom et valeurs des attributs
	 public function getProperties()
	{
		return $this->bdd;
	}

	// retourne la valeur d'un attribue donnée
	public function __get($attributeName)
	{
		
	}

	// Compte le nombre de ligne

	public function count() // Mais l'héritage ne marche pas (A revoir Soon)
	{
		$table = $this->table;

		$sql =	'SELECT count(*) FROM '.$table.'';

		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse[0];

	}

	public function listAll()
	{
		$table = $this->table;

		$sql =	'SELECT * FROM '.$table.'';

		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse;
	}

	public function Request($condition,$selector=null)
	{
		$table = $this->table;

		if (is_null($selector)) {

			$selector ='*';
		}

		$sql = 'SELECT '.$selector.' FROM '.$table.' WHERE '.$condition.'';

		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));

		$reponse = $request->fetchAll();

		return $reponse;
	}
	
	
	public function UniversalRequest($condition,$table,$selector=NULL){
		
		if (is_null($selector)) {
		
			$selector ='*';
		}
		
		$sql = 'SELECT '.$selector.' FROM '.$table.' WHERE '.$condition.'';
		
		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetchAll();
		
		return $reponse;
		
		$request->closeCursor();
	}
	
	public function RequestFetched($condition,$selector = null){
		
		$table = $this->table;
		
		if (is_null($selector)) {
		
			$selector ='*';
		}
		
		$sql = 'SELECT '.$selector.' FROM '.$table.' WHERE '.$condition.'';
		
		$request = $this->bdd->query($sql) or die(print_r($request->errorInfo()));
		
		$reponse = $request->fetch();
		
		return $reponse[0];
		
		
	}

	// Transformation en Chaine
	public function __toString()
	{
		(String)$this;
	}

	// Representation en JSON

	public function exportAsJSON()
	{
		# code...
	}

	
} // Fin class CoreObject

 function connectMysql()
	{

			try{
			 $bdd=new PDO('mysql:host=localhost;dbname=intraesp_test','root','');

			}
			catch(Exception $e){
				die('Erreur :'.$e->getMessage());
			}

		return $bdd;
	}


 ?>