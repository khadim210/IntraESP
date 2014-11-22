<?php 


include('Connect.php');

include('MonFrameWork.php');

$status =$_GET["status"];

 



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

if ($status =="permanent") {
  $req = $bdd->query("SELECT NOM, PRENOMS, MledeSolde, GRADE, FONCTIONS,agence FROM `agent_pats` WHERE not isnull(MledeSolde) AND MledeSolde <> '_' ") or die(print_r($req->errorInfo()));
}elseif ($status=="vacataire") {
  // S'il sont vacataires ils n'ont donc pas de matricule pour le moment
  $req = $bdd->query("SELECT NOM, PRENOMS, MledeSolde, GRADE, FONCTIONS,agence FROM `agent_pats` WHERE  isnull(MledeSolde) OR MledeSolde = '_'  ") or die(print_r($req->errorInfo()));
}

     
      while ($donne = $req->fetch()) {

        array_push($NomAgent, $donne['NOM']);
        array_push($PrenomAgent, $donne['PRENOMS']);
        array_push($MatriculeAgent, $donne['MledeSolde']);
        array_push($FonctionAgent, $donne['FONCTIONS']);
        array_push($GradeAgent, $donne['GRADE']);
        array_push($StructureAgent, $donne['agence']);
        
        
      }
      $req->closeCursor();

  

?>
    <div class="span9">
      


      

<div class="block"> <!-- Debut  Block -->
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Agents</div>
    <div class="pull-right">
      <?php //  SetModalButton('Agents','Ajouter'); ?>
      <?php //SetModalButton('Agents','Supprimer'); ?>
      <?php // SetModalButton('Agents','Update') ;?>
      <?php // SetModal('Agents','Ajouter',$indexAgent); ?>
      <?php // SetModal('Agents','Supprimer',$indexAgent); ?>      
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
                        <th>Fonction</th>
                        
                        <th>Grade</th>
                        <th>Structure</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php SetRow($NomAgent,$PrenomAgent,$MatriculeAgent,$FonctionAgent,$GradeAgent,$StructureAgent);  ?>
                      
                    </tbody>
                  </table>
      </div>
  </div>
      

                
          

                    
                    
          

    

      <!-- Fin  Block -->
</div>
    </div> <!-- fin span9-->

  </div>
</div>

      
