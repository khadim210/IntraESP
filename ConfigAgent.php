<?php 
session_start();

include('Connect.php');
include('MonFrameWork.php');

 function SetRow($tab1,$tab2,$tab3,$tab4,$tab5,$tab6,$tab7)
{
  
  for ($i=0; $i <count($tab1) ; $i++) { 
    echo "<tr class=''>"."<td>".utf8_encode($tab1[$i])."</td>"."<td>".utf8_encode($tab2[$i])."</td>"."<td width='12%'>".utf8_encode($tab3[$i])."</td>"."<td>".utf8_encode($tab4[$i])."</td>"."<td width='15%'>".utf8_encode($tab5[$i])."</td>"."<td>".utf8_encode($tab6[$i])."</td>"."<td>".utf8_encode($tab7[$i])."</td></tr>";  
  }
}

$NomAgent = array();
$PrenomAgent = array();
$MatriculeAgent = array();
$FonctionAgent = array();
$TypeAgent = array();
$GradeAgent = array();
$StructureAgent = array();
$TelAgent = array();
$EmailAgent = array();
$indexAgent = array();

$req = $bdd->query("SELECT DISTINCT nom, prenom, matricule, Fonction, libTypeAgent,libGrade,libStructure,telephone,email FROM `agents` a, `structure` s, `typeagent` t,`grades` g WHERE (a.idStructure = s.idStructure  AND a.idTypeAgent = t.idTypeAgent   AND a.idGrade = g.idGrade)  OR ( isnull(a.idTypeAgent))") or die(print_r($rep->errorInfo()));
     
      while ($donne = $req->fetch()) {

        array_push($NomAgent, $donne['nom']);
        array_push($PrenomAgent, $donne['prenom']);
        array_push($MatriculeAgent, $donne['matricule']);
        array_push($FonctionAgent, $donne['Fonction']);
        array_push($TypeAgent, $donne['libTypeAgent']);
        array_push($GradeAgent, $donne['libGrade']);
        array_push($StructureAgent, $donne['libStructure']);
        



        
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
    <link href="MonCss/DT_bootstrap.css" rel="stylesheet">
 
</head>
<body>
  <header>

<?php include ('PanelNavigation_Up.php'); ?>    </header>
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
    <div class="muted pull-left">Agents</div>
    <div class="pull-right">
      <?php //  SetModalButton('Agents','Ajouter'); ?>
      <?php  //SetModalButton('Agents','Supprimer'); ?>
      <?php // SetModalButton('Agents','Update') ;?>
      <?php // SetModal('Agents','Ajouter',$indexAgent); ?>
      <?php  // SetModal('Agents','Supprimer',$indexAgent); ?>      
      <?php // SetModal('Agents','Update',$indexAgent); ?>      


      </div>
  </div>
      <div class="block-content collapse in">
        <div class="span12">
        
                                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tableau">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>Fonction</th>
                        <th>Type</th>
                        <th>Grade</th>
                        <th>Structure</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php SetRow($NomAgent,$PrenomAgent,$MatriculeAgent,$FonctionAgent,$TypeAgent,$GradeAgent,$StructureAgent);  ?>
                      
                    </tbody>
                  </table>
      </div>
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
<script src="MonJs/jquery.dataTables.js"></script>


<script src="MonJs/DT_bootstrap.js"></script>
<script src="MonJs/jquery.metisMenu.js"></script>
<script src="MonJs/MonJs.js"></script>

</body>
</html>