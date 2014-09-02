<?php 

session_start();

include('Connect.php');

include('MonFrameWork.php');



$TypeStructures = array();
$Structures = array();
// Chaque formation devrait avoir sa propre liste formation
// Formation 
$Departement = array();

// Fin des structures

$FormationGElectrique = array();
$FormationGestion = array();
$FormationGChimique = array();
$FormationGMecanique = array();
$FormationGInformatique = array();
$FormationGCivil = array();

$req = $bdd->query("SELECT  libStructure FROM  `structure` s  WHERE s.idtypeStructure  in (SELECT DISTINCT idTypeStructure  FROM typestructure WHERE libTypeStructure ='Departement') AND libStructure<>'Polyvalent'") or die(print_r($req->errorInfo()));
    while ($donne = $req->fetch()) {

      array_push($Departement, $donne['libStructure']);

     }
$req->closeCursor();


$req = $bdd->query("SELECT  libStructure,libFormation FROM  `structure` s ,`Formation` f WHERE s.idtypeStructure  in (SELECT DISTINCT idTypeStructure  FROM typestructure WHERE libTypeStructure ='Departement') AND libStructure<>'Polyvalent'  AND (s.idStructure = f.idDepartement)") or die(print_r($req->errorInfo()));
     
      while ($donne = $req->fetch()) {

        if ($donne['libStructure']==utf8_decode('Génie Electrique')) {

          array_push($FormationGElectrique,$donne['libFormation']);

        }elseif ($donne['libStructure']==utf8_decode('Gestion')) {

          array_push($FormationGestion,$donne['libFormation']);

        }elseif ($donne['libStructure']==utf8_decode('Génie Chimique')) {

          array_push($FormationGChimique,$donne['libFormation']);

        }elseif ($donne['libStructure']==utf8_decode('Génie Mécanique')) {

          array_push($FormationGMecanique,$donne['libFormation']);

        }elseif ($donne['libStructure']==utf8_decode('Génie Informatique')) {

          array_push($FormationGInformatique,$donne['libFormation']);

        }elseif ($donne['libStructure']==utf8_decode('Génie Civil')) {

          array_push($FormationGCivil,$donne['libFormation']);

        }

        
        
      }
      $req->closeCursor();

$Formations = array($FormationGElectrique,$FormationGestion,$FormationGChimique,$FormationGMecanique,$FormationGInformatique,$FormationGCivil);


?>

<html>
<head>
  <title>Gestion Formation-IntraESP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    
 
</head>
<body>
  <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="MonImage/logoIntraESP.png" width="100px">
              </li>
              
              <li class="">
                <a href="TableauDebord.php">Tableau de Bord</a>
              </li>
              <li class="active">
                <a href="">Paramètrage</a>
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
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  Mr/Madame <button class=""><i class="icon-off"></i></button> </p>
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>
    

    <div class="container">
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Bravo!</strong>
        Bienvenue , vous vous êtes authentifier avec succés !
    </div>

    </div>
    
    <br>
        
    

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
<?php include ('PanelNavigation_Side.php'); ?>

    </div> <!--Fin Span3 de navigation -->
    <div class="span9">
      


      <div class="hero-unit">

<div class="block"> <!-- Debut  Block -->
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Département</div>
    <div class="pull-right">
      <?php  SetModalButton('Département','Ajouter'); ?>
      <?php SetModalButton('Département','Supprimer'); ?>
      <?php  SetModalButton('Département','Update') ;?>
      <?php  SetModal('Département','Ajouter',$Departement); ?>
      <?php SetModal('Département','Supprimer',$Departement); ?>      
      <?php  SetModal('Département','Update',$Departement); ?>      

      </div>
  </div>
      <div class="block-content collapse in">
      

                
          <!-- Debut  Accordion -->

                <div class="accordion" id="Accord_Departement">

                    <!-- Config  Accordion -->
                    <?php 
                    for ($i=0; $i <count($Departement) ; $i++) { 
                      SetAccordeon(utf8_encode($Departement[$i]),"Liste des Formations  ",$Formations[$i]);
                    }
                      
                     ?>
                  

                  


                </div>
                  
          <!-- Fin  Accordion -->
          </div>
          

    

    
    









    </div> <!-- hero unit -->
  <!-- Fin  Block -->
</div>
    </div> <!-- fin span9-->

  </div>
</div>

      
<center>
 <div id="footer">
  <div class="container">
    <p class="muted credit"> Copyright IntraESP 2014 By Tobin Frost @ Supadev </p>
  </div>
</div>
</center>
<script src="bootstrap/js/jquery-1.11.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="MonJs/jquery.metisMenu.js"></script>
<script src="MonJs/MonJs.js"></script>
</body>
</html>