<?php 
session_start();

include('Connect.php');
include('MonFrameWork.php');

if($_GET["status"]){
  $status =$_GET["status"];  
}



 function SetRow($tab1,$tab2,$tab3,$tab4,$tab5,$tab6)
{
  
  for ($i=0; $i <count($tab1) ; $i++) { 
     
    echo "<tr class=''>"."<td>".utf8_encode($tab1[$i])."</td>"."<td width='15%'>".utf8_encode($tab2[$i])."</td>"."<td width='12%'>".utf8_encode($tab3[$i])."</td>"."<td width='20%'>".utf8_encode($tab4[$i])."</td>"."<td width='20%'>".utf8_encode($tab5[$i])."</td>"."<td>".utf8_encode($tab6[$i])."</td></tr>";  
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
$DisciplineAgent = array();
$indexAgent = array();

if ($status =="permanent") {
  $req = $bdd->query("SELECT NOM, PRENOMS, `Mle de Solde`, GRADE, DISCIPLINE,DEPARTEMENT FROM `agent_per` WHERE not isnull(`Mle de Solde`) AND `Mle de Solde` <> '_' ") or die(print_r($rep->errorInfo()));
}elseif ($status=="vacataire") {
  // S'il sont vacataires 
  $req = $bdd->query("SELECT NOM, PRENOMS, `Mle de Solde`, GRADE, DISCIPLINE,DEPARTEMENT FROM `agent_per` WHERE  isnull(`Mle de Solde`) OR `Mle de Solde` = '_'  ") or die(print_r($rep->errorInfo()));
}



     
      while ($donne = $req->fetch()) {

        array_push($NomAgent, $donne['NOM']);
        array_push($PrenomAgent, $donne['PRENOMS']);
        array_push($MatriculeAgent, $donne['Mle de Solde']);
        array_push($DisciplineAgent, $donne['DISCIPLINE']);
        array_push($GradeAgent, $donne['GRADE']);
        array_push($StructureAgent, $donne['DEPARTEMENT']);
        



        
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
    <div class="muted pull-left">Agents</div>
    <div class="pull-right">
      <?php // SetModalButton('Agents','Ajouter'); ?>
      <?php  //SetModalButton('Agents','Supprimer'); ?>
      <?php  //SetModalButton('Agents','Update') ;?>
      <?php // SetModal('Agents','Ajouter',$indexAgent); ?>
      <?php  //SetModal('Agents','Supprimer',$indexAgent); ?>      
      <?php // SetModal('Agents','Update',$indexAgent); ?>      

      </div>
  </div>
      <div class="block-content collapse in">
        <div class="span12">
        
                                    
                    <table  class="table table-striped table-bordered table-condensed" id="Tableau">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>Discipline</th>
                        <th>Grade</th>
                        <th>Structure</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php SetRow($NomAgent,$PrenomAgent,$MatriculeAgent,$DisciplineAgent,$GradeAgent,$StructureAgent);  ?>
                      
                    </tbody>
                  </table>
      </div>
  </div>
      

                
          

                    
                    
          

    

    <!-- Debut Modal nvFormation -->
    <div class="modal hide fade" role="dialog" id="nvFormation" aria-labelledby="nvFormationLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="nvFormationLabel">Nouvelle Formation</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="NomFormation"> Formation</label>
                  <div class="controls">
                  <input type="text" id="NomFormation" size="12" placeholder="Formation">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="CycleFormation">Cycle</label>
                  <div class="controls">
                  
                  <select id="CycleFormation" >

                    <option>Cycle 1</option>
                    <option>Cycle 2</option>
                    <option>Cycle 3</option>
                    <option>Cycle 4</option>
                    <option>Cycle 5</option>
                    <option>Cycle 6</option>

                  </select>
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="inputEmail">Heure </label>
                  <div class="controls">
                  
                    <input class="span2" id="nbHeure" type="number">
                    
                  
                  </div>
                  </div>
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Creer</button>
    
          </form>
          </div>
        
      

    </div> <!-- Fin Modal nvFormation -->

          <!-- Début Modal Mis à jour  -->

<div class="modal hide fade" role="dialog" id="UpdateFormation" aria-labelledby="UpdateFormationLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="UpdateFormationLabel">Mis à jour Formation</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="NvNomFormation"> Formation</label>
                  <div class="controls">
                  <input type="text" id="NvNomFormation" size="12" placeholder="Nouvelle Formation" value="NomFormation">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="NvCycleFormation">Cycle</label>
                  <div class="controls">
                  
                  <select id="NvCycleFormation" >

                    <option>Cycle 1</option>
                    <option>Cycle 2</option>
                    <option>Cycle 3</option>
                    <option>Cycle 4</option>
                    <option>Cycle 5</option>
                    <option>Cycle 6</option>

                  </select>
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" >Heure </label>
                  <div class="controls">
                  
                    <input class="span2" id="NvnbHeure" type="number" value="30">
                    
                  
                  </div>
                  </div>
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Mettre à jour</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Mis à jour  -->

<!-- Début Modal Suppression Département  -->

<div class="modal hide fade" role="dialog" id="DeleteDepartement" aria-labelledby="DeleteDepartementLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="DeleteDepartementLabel">Supprimer Département</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                  <div class="control-group">
                  <label class="control-label" for="NvCycleFormation">Département</label>
                  <div class="controls">
                  
                  <select id="DeletedDepartement" >

                    <option id="dep1">Département 1</option>
                    <option id="dep2">Département 2</option>
                    <option id="dep3">Département 3</option>
                    <option id="dep4">Département 4</option>
                    <option id="dep5">Département 5</option>
                    <option id="dep6">Département 6</option>

                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression Département  -->


<!-- Début Modal Modifier Département  -->

<div class="modal hide fade" role="dialog" id="UpdateDepartement" aria-labelledby="UpdateDepartementLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="UpdateDepartementLabel">Modifier Département</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                

                  <div class="control-group">
                  <label class="control-label" for="NvCycleFormation">Département à Modifier</label>
                  <div class="controls">
                  
                  <select id="UpdatedDepartement" >

                    <option id="dep1">Département 1</option>
                    <option id="dep2">Département 2</option>
                    <option id="dep3">Département 3</option>
                    <option id="dep4">Département 4</option>
                    <option id="dep5">Département 5</option>
                    <option id="dep6">Département 6</option>

                  </select>
                  </div>
                  </div>

                  <div class="control-group">
                  <label class="control-label" for="NvNomDepartement">Nouveau Nom Département</label>
                  <div class="controls">
                  <input type="text" id="NvNomDepartement" size="12" placeholder="Nouveau Département" value="Nom Département">
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-warning" data-dismiss="modal">Mettre à jour</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression Département  -->






              <!-- Début Modal Suppression  -->

<div class="modal hide fade" role="dialog" id="DeleteFormation" aria-labelledby="DeleteFormationLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="DeleteFormationLabel">Suppression Formation</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                  <h4>Voulez vous Supprimer Cette Formation</h4>
                 
           </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression  -->




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