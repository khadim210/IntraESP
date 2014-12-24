<?php 

include('Connect.php');
include('MonFrameWork.php');

if($_GET["status"]){
  $status =$_GET["status"];  
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
    <div class="span9">
      


      

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
      

                
          

                    
                    
          

    

    
  <!-- Fin  Block -->
</div>
    </div> <!-- fin span9-->

  </div>
</div>

      
