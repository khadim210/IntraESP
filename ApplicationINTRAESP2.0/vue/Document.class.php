<?php 
// CLASS DOCUMENT A.K.A PAGE

// La page sera dÃ©coupÃ©e en 4 parties:

// **	L'entete (header) -> header Logo
//					-> header menu (Accesible par tous)

// **	le menu Contextuel : diffÃ©rent en fonctiondu niveau d'accÃ¨s de l'utilisateur
// **	le sujet:relatif Ã  la page
// **	le bas de page(footer)

// Elle comporte deux attributs liÃ©s Ã  la session gÃ©rer par l'authentification des utilisateurs:
// * userId (int) : identifiant de l'utilisateur(lorsqu'il est  connectÃ©)
// * userLevel (int) : le niveau d'accÃ¨s de l'utilisateur connectÃ©




class Document{
	public  $userId;
	public  $userLevel;
	public  $title;

	// constructeur par dÃ©fault : appele htmlHeader

	public function __construct($title="",$script="",$css="",$dojoRequire="",$meta="")
	{
		$this->title = $title;
			
		echo '<html>
<head>
	<title>'.$this->title.'</title>
	<meta '.$meta.'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../MonCss/MonStyle.css" rel="stylesheet">
    <link href="'.$css.'" rel="stylesheet">
    <script src="../MonJs/moment.min.js"></script>
 	<script src="../bootstrap/js/jquery-1.11.1.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../MonJs/jquery.metisMenu.js"></script>
    <script src="../MonJs/MonJs.js"></script>
    <script src="../MonJs/jquery.dataTables.js"></script>
    <script src="../MonJs/fullcalendar.js"></script>
	<script src="../MonJs/lang-all.js"></script>
        		
    <script src="'.$dojoRequire.'"></script>
    		
    <script type="text/javascript">
    	
	'.$script.'
    		
   	</script>
    
    		
</head>
		';
		
		
				
	}

	// commencement du <body>

	public function begin($level=0)
	{
		switch ($level){
			case 1 :

			echo "";
				
				;
			break;
		}
	}

	// Retourne le <header>

	public function htmlHeader($css="",$dojoRequire="",$meta="")
	{
		echo '
				<html>
<head>
	<title>'.$this->title.'</title>
	<meta '.$meta.'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    <link href="'.$css.'" rel="stylesheet">
 	<script src="bootstrap/js/jquery-1.11.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="'.$dojoRequire.'"></script>
</head>
				
				
				';
	}

	// La partie Entete

	public function header($AgentName=null)
	{
		switch ($this->userLevel) {
			case 1: // level 1 pour le directeur de l'école
		echo ' <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="../MonImage/logoIntraESP.png" width="100px">
              </li>
              
              <li class="">
                <a href="TableauDeBord.php">Tableau de Bord</a>
              </li>
              <li class="">
                <a href="Parametrage.php">Paramètrage</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Outils <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="Calendrier.php"><i class="icon-calendar"></i> Calendrier</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Agents <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-user"></i> Liste des Agents</a>
                  </li>
                  <li>
                    <a href=""><i class="icon-search"></i> Recherche</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  '.$AgentName.' <a href="../controleur/Deconnexion_Controller.php?control=logout"> <button class=""><i class="icon-off"></i></button> </a> </p>
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>
';
			;
			break;
			case 2: // level 2 pour le directeur des études
	echo '  <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="../MonImage/logoIntraESP.png" width="100px">
              </li>
              
              <li class="">
                <a href="TableauDeBord.php">Tableau de Bord</a>
              </li>
              <li class="">
                <a href="ConfigAgent.php">Paramètrage</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Outils <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-calendar"></i> Calendrier</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Agents <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-user"></i> Liste des Agents</a>
                  </li>
                  <li>
                    <a href=""><i class="icon-search"></i> Recherche</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  '.$AgentName.' <a href="../controleur/Deconnexion_Controller.php?control=logout"> <button class=""><i class="icon-off"></i></button> </a> </p>
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>


';
	;
				
	break;
			case 3: // level 3 pour le responsable pédagogique
			echo '  <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="../MonImage/logoIntraESP.png" width="100px">
              </li>
              
              <li class="">
                <a href="TableauDeBord.php">Tableau de Bord</a>
              </li>
              <li class="">
                <a href="Affectation_Enseignement.php">Affectation d\'Enseignement</a>
              </li>
              <li class="">
                <a href="Vacation.php">Vacation</a>
              </li>
              
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Mes Enseignants <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-wrench"></i> gérer Enseignants</a>
                  </li>
                  <li>
                    <a href=""><i class="icon-search"></i> Lister Enseignants</a>
                  </li>
                </ul>
              </li>

               <li class="">
                <a href="#">Mon Profil</a>
              </li> 

            </ul>
          </div>
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  '.$AgentName.' <a href="../controleur/Deconnexion_Controller.php?control=logout"> <button class=""><i class="icon-off"></i></button> </a> </p>
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>



			';	
				;
				break;
				
				case 4: // level 4 pour le responsable pédagogique
				
				echo '  <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="../MonImage/logoIntraESP.png" width="100px">
              </li>
              
              <li class="">
                <a href="TableauDeBord.php">Tableau de Bord</a>
              </li>
                            <li class="">
                <a href="Affectation.php">Affectation d\'Enseignement</a>
              </li>
              <li class="">
                <a href="Vacation.php">Vacation</a>
              </li>
              
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Mes Enseignants <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-wrench"></i> gérer Enseignants</a>
                  </li>
                  <li>
                    <a href=""><i class="icon-search"></i> Lister Enseignants</a>
                  </li>
                </ul>
              </li>

               <li class="">
                <a href="#">Mon Profil</a>
              </li> 

            </ul>
          </div>
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  '.$AgentName.' <a href="../controleur/Deconnexion_Controller.php?control=logout"> <button class=""><i class="icon-off"></i></button> </a> </p>
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>



				';
					
					;
				break;
			default:
				echo '<header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="../MonImage/logoIntraESP.png" width="100px">
              </li>
              
              

               <li class="">
                <a href="#">Mon Profil</a>
              </li> 

            </ul>
          </div>
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  '.$AgentName.' <a href="../controleur/Deconnexion_Controller.php?control=logout"> <button class=""><i class="icon-off"></i></button> </a> </p>
						
                  
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>
  ';
				;
			break;
		}
	}

	// La partie menu contextuel

	public function menu()
	{
		switch ($this->userLevel) {
			case 1: // Cas du directeur 
			
			echo '  <div class="span3">   
	  <div class="well sidebar-nav">
        <ul class="nav nav-list" id="side-menu">
          <li class="nav-header">
            Paramètrage
          </li>

          <li class="">
            <a href="" >
            <i class="icon-chevron-right"></i> Agents
            </a>
            <ul class="" style="height:0px;" >
              <li ><a href="../ConfigPERS.php?status=permanent">P.E.R.S (Permanent)</a></li>
              <li ><a href="../ConfigPERS.php?status=vacataire">P.E.R.S (Vacataire)</a></li>
              <li><a href="../ConfigPATS.php?status=permanent">P.A.T.S (Permanent)</a></li>
              <li><a href="../ConfigPATS.php?status=vacataire">P.A.T.S (Vacataire)</a></li>
            </ul>
          </li>
          <li class="">
            <a href="#">
            <i class="icon-chevron-right"></i> Banques
            </a>
            
          </li>

          <li>
            <a href="../GestionStructure.php">
            <i class="icon-chevron-right"></i> Structures
            </a>
            <ul class="nav nav-list">
              <li class="">
                <a href="">
             Département
            </a>
                      <ul class="">
                        <li>
                          <a href="../GestionDepartement.php">
                          Confuration Départements 
                      </a>
                        </li>
                        <li>
                          <a href="">
                          Programmes
                      </a>
                        </li>
                        <li>
                          <a href="">
                       Matières
                      </a>
                        </li>

                      </ul>

              </li>
              <li>
                <a href="GestionLaboratoire.php">
              Laboratoires
                </a>
              </li>

              <li class="">
                <a href="GestionService.php">
              Services
                </a>
              </li>

            </ul>
            
          </li>

          



          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Chef de Départements
            </a>
          </li>

          <li>
            <a href="Affectation.php">
            <i class="icon-chevron-right"></i> Affectations
            </a>
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Archivage
            </a>
          </li>
          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Paramètrage Avancé
            </a>
            <ul>
              <li>
                <a href=""> Montant Seuil
              </a>
              </li>
              <li>
                <a href=""> Année Académique
                </a>
              </li>
              <li>
                <a href=""> Status
                </a>
              </li>
            </ul>
          </li>



        </ul>

      </div>
	</div>
			
			'
					
			;
				
				;
			break;
			
			case 2: // Cas du directeur des études

			echo '<div class="span3">   
	  <div class="well sidebar-nav">
        <ul class="nav nav-list" id="side-menu">
          <li class="nav-header">
            Paramètrage
          </li>

          <li class="">
            <a href="" >
            <i class="icon-chevron-right"></i> Agents
            </a>
            <ul class="" style="height:0px;" >
              <li ><a href="../ConfigPERS.php?status=permanent">P.E.R.S (Permanent)</a></li>
              <li ><a href="../ConfigPERS.php?status=vacataire">P.E.R.S (Vacataire)</a></li>
              <li><a href="../ConfigPATS.php?status=permanent">P.A.T.S (Permanent)</a></li>
              <li><a href="../ConfigPATS.php?status=vacataire">P.A.T.S (Vacataire)</a></li>
            </ul>
          </li>
          <li class="">
            <a href="#">
            <i class="icon-chevron-right"></i> Banques
            </a>
            
          </li>

          <li>
            <a href="../GestionStructure.php">
            <i class="icon-chevron-right"></i> Structures
            </a>
            <ul class="nav nav-list">
              <li class="">
                <a href="">
             Département
            </a>
                      <ul class="">
                        <li>
                          <a href="../GestionDepartement.php">
                          Confuration Départements 
                      </a>
                        </li>
                        <li>
                          <a href="">
                          Programmes
                      </a>
                        </li>
                        <li>
                          <a href="">
                       Matières
                      </a>
                        </li>

                      </ul>

              </li>
              <li>
                <a href="GestionLaboratoire.php">
              Laboratoires
                </a>
              </li>

              <li class="">
                <a href="GestionService.php">
              Services
                </a>
              </li>

            </ul>
            
          </li>

          



          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Responsables Pédagogiques
            </a>
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Affectations
            </a>
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Archivage
            </a>
          </li>
          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Paramètrage Avancé
            </a>
            <ul>
              <li>
                <a href=""> Montant Seuil
              </a>
              </li>
              <li>
                <a href=""> Année Académique
                </a>
              </li>
              <li>
                <a href=""> Status
                </a>
              </li>
            </ul>
          </li>



        </ul>

      </div>
	</div>
			';
				
				
				;
				
			break;
			
			case 3: // Cas du chef de département
			
			echo '';	
				
				;
			
			break;
			
			case 4: // Cas du Responsable pédagogique
			
			echo '';	
				
				;
			
			break;
			
			
			default:
				;
			break;
		}
	}

	// la fin du <body>

	public function end()
	{
		echo '
<center>
 <div id="footer">
  <div class="container">
    <p class="muted credit"> Copyright IntraESP 2014 By Tobin Frost @ Supadev </p>
  </div>
</div>
</center>';
	}
	
	
public function beginSpan9() {

	echo '<div class="span9"> <!--  Début Span9 -->';
	
	}

public function endSpan9(){
	echo '</div> <!--  Fin Span9 -->';
}	

public function beginSpan3() {

	echo '<div class="span3"> <!--  Début Span3 -->';

}

public function endSpan3(){
	echo '</div> <!--  Fin Span3 -->';
}

public function beginSpan6() {

	echo '<div class="span6"> <!--  Début Span6 -->';

}

public function endSpan6(){
	echo '</div> <!--  Fin Span6 -->';
}




	// debut d'une section

	public function beginBigSection($title)
	{
		switch ($this->userLevel) {
			case 1:
				$this->beginSpan9();
				echo '
			
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
				
        </div>
        <div class="block-content collapse in">';
				

			;
			break;
			
			case 2: // Cas du Directeur des Etudes
				$this->beginSpan9();
				echo '
			<div class="">
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
				
        </div>
        <div class="block-content collapse in">';
				

				;
			break;
			
			case 3: 
				echo '
			<div class="">
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
				
        </div>
        <div class="block-content collapse in">';
				; 
			break;
			
			case 4:
				echo '
			<div class="">
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
			
        </div>
        <div class="block-content collapse in">';
				;
				break;
			
			default:
				echo '
			
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
		
        </div>
        <div class="block-content collapse in">';
				
				;
			break;
		}
			}

	// fin d'une section

	public function endBigSection()
	{
		echo '</div>
      </div>
	</div>
	
    </div> <!--  Fin Section -->';
	}
	
	public function beginSection($title){
		
		echo '
			
				<div class="container-fluid"> <!--  Début Section -->
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">'.$title.'</div>
		
        </div>
        <div class="block-content collapse in">';
			
	}
	
	
	public function endSection(){
		echo '
      </div>
	</div>
	</div>
    </div> <!--  Fin Section -->';
	}
	
	public function beginSmallSection($title,$info) {
		echo '  <div class="span6"> <!--  Début Span6 -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">'.$title.'
        </div>
        <div class="pull-right">
          <span class="badge badge-info">'.$info.'</span>
        </div>
      </div>
      <div class="block-content collapse in">
	';
	}
	
	public function endSmallSection() {
		echo '</div>
    </div>
  </div> <!--  Fin Span6 -->';
	}
	
	public function beginRow() {
		echo '<div class="container-fluid"> <!--  Début Row -->
      <div class="row-fluid">';
	}
	
	public function endRow() {
		echo '</div>
    </div> <!--  Fin Row -->';
	}
	
	
	public function beginContainer() {
		echo '<div class="container">';
	}
	
	public function endContainer() {
		echo '</div>';
	}
	
	
	public function Alert($type,$title,$message) {
		echo '
			<div class="container">
				<div class="alert alert-'.$type.'">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>'.$title.'!</strong>
        '.$message.'
    			</div>
        	</div>';
	}
	
	public function DataTable(array $Header,array $FetchedData){
		echo '
        <div class="span12">
        
                                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tableau">
                    <thead>
                      <tr>
	';
		foreach ($Header as $value) {
			
			echo '<th>'.$value.'</th>';
		}
		
		echo '</tr>
                    </thead>
                    <tbody>';
		
		BigSetRow($FetchedData);
		
		
		
		
		echo '</tbody>
                  </table>
      
  </div>';
	}
	
		
	public function beginTabbable(Array $A,$Data){
		
		echo '
			<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">'.$A[0].'</a></li>';
		
		for ($i = 1; $i <= count($A)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tab'.$y.'" data-toggle="tab">'.$A[$i].'</a></li>';
			
		}
		
		echo '</ul>';
		echo '
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">';
			
//		 $Data;
		
		echo '</div>';
		
		for ($i = 1; $i <= count($A)-1; $i++) {
			
			$y = $i+1;
			
			echo '<div class="tab-pane" id="tab'.$y.'">';

			 $Data;
			
			echo '</div>';
		}
			
		
		
	}
	
function endTabbable() {
	
	echo '</div>';
	echo '</div>';
}	
	
	public function Calendrier(){
		echo '<div class="span2">
          <div id="external-events">
            <h5> Evénements</h5>
                                    <div class="external-event">Evénement1</div>
                                    <div class="external-event">Evénement2</div>
                                    <div class="external-event">Evénement3</div>
                                    <div class="external-event">Evénement4</div>
                                    <div class="external-event">Evénement5</div>
                                    <div class="external-event">Evénement6</div>
                                    <div class="external-event">Evénement7</div>
                                    <div class="external-event">Evénement8</div>
                                    <div class="external-event">Evénement9</div>
                                    <div class="external-event">Evénement10</div>
                                    <div class="external-event">Evénement11</div>
                                    <div class="external-event">Evénement12</div>
                                    <div class="external-event">Evénement13</div>
                                    <div class="external-event">Evénement14</div>
                                    <div class="external-event">Evénement15</div>
                                    <p>
                                    <input type="checkbox" id="drop-remove" /> <label for="drop-remove">Annuler Affectations</label>
                                    </p>
          </div>
        </div>
				
				<div class="span10"> <!-- Debut  Calendrier -->
            <div id="calendrier">
            </div>
        </div> <!-- Fin  Calendrier -->';
	}
	
public function breadcrumb($name=null) {
		switch ($this->userLevel) {
			case 4:
		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction des Etudes</a> <span class="divider">/</span> </li>
        <li class="active">Formation</li>
      </ul>
    </div>';
			;
			break;
			case 3:
		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction des Etudes</a> <span class="divider">/</span> </li>
        <li class="active">'.$name.'</li>
      </ul>
    </div>';
				;
			break;
			
			case 2:

		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li><a href="#">Direction</a> <span class="divider">/</span> </li>
        <li class="active">Direction des Etudes</li>
      </ul>
    </div>';		
				
				; 
			
			break;
			case 1:

		echo '<div class="container">
      <!-- Debut breadcrumb  -->
      <ul class="breadcrumb">
        <li><a href="#">Acceuil</a> <span class="divider">/</span> </li>
        <li class="active">Direction</li>
      </ul>
    </div>';
				
				; 
			
			break;
			default:
				;
			break;
		}
	}

	public function Table($type,$header,$data){
		
		echo '<table class="table table-'.$type.' table-bordered">
                    <thead>
                      <tr>
	';
		foreach ($header as $value) {
			
			echo '<th>'.$value.'</th>';
		}
		
		echo '</tr>
                    </thead>
                    <tbody>';
		
		BigSetRow($data);
		
		
		
		echo '</tbody>
		</table>';
		
	}
	

} // Fin de la classe




function BigSetRow(array $tab){

	for ($i=0; $i <count($tab) ; $i++) {
		echo "<tr class=''>"."<td>".($tab[$i][0])."</td>"."<td>".($tab[$i][1])."</td>"."<td width='12%'>".($tab[$i][2])."</td>"."<td>".($tab[$i][3])."</td>"."<td width=''>".($tab[$i][4])."</td>"."<td>".($tab[$i][5])."</td>"."<td>".($tab[$i][6])."</td></tr>";
	}

}

function BigSetRowBis(array $tab){

	for ($i=0; $i <count($tab) ; $i++) {
		echo "<tr class=''>"."<td>".($tab[$i][0])."</td>"."<td>".($tab[$i][1])."</td>"."<td width='12%'>".($tab[$i][2])."</td>"."<td>".($tab[$i][3])."</td>"."<td width=''>".($tab[$i][4])."</td>"."<td>".($tab[$i][5])."</td>"."<td>".($tab[$i][6])."</td>"."<td>".($tab[$i][7])."</td></tr>";
	}

}







/*

*****************************************
*										*
* EXEMPLE D'UTILISATION DE LA CLASSE 	*
*										*
*****************************************

session start();
 require once(â€™config.phpâ€™);
 require once(â€™/Document.class.phpâ€™);
 $page=new Document();
 if (!$page->begin(0)) die();
 $page->beginSection("Bienvenue!");
 bla bla bla
 $page->endSection();
 $page->end();


*/

 ?>
