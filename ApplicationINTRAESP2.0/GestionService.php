<?php 

session_start();

include('Connect.php');

include('MonFrameWork.php');



$TypeStructures = array();
$Structures = array();
// Chaque formation devrait avoir sa propre liste formation


$SousStructure = array();





$req = $bdd->query("SELECT  libStructure FROM  `structure` s WHERE s.idtypeStructure  in (SELECT DISTINCT idTypeStructure  FROM typestructure WHERE libTypeStructure ='Service')") or die(print_r($req->errorInfo()));
     
      while ($donne = $req->fetch()) {

        
        array_push($Structures, $donne['libStructure']);

        

        
        
      }
      $req->closeCursor();



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

<?php include ('PanelNavigation_Up.php'); ?>
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
    <div class="muted pull-left">Services</div>
    <div class="pull-right">
      <?php  SetModalButton('Service','Ajouter'); ?>
      <?php SetModalButton('Service','Supprimer'); ?>
      <?php  SetModalButton('Service','Update') ;?>
      <?php  SetModal('Service','Ajouter',$Structures); ?>
      <?php SetModal('Service','Supprimer',$Structures); ?>      
      <?php  SetModal('Service','Update',$Structures); ?>      

      </div>
  </div>
      <div class="block-content collapse in">
      

                
          <!-- Debut  Accordion -->

                <div class="accordion" id="Accord_Departement">

                    <!-- Config  Accordion -->
                    <?php for ($i=0; $i <count($Structures) ; $i++) { 
                      SetAccordeon(utf8_encode($Structures[$i])," Description du Laboratoire  ",$SousStructure);
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
