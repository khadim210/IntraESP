<?php 


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

        if ($donne['libStructure']==('G�nie Electrique')) {

          array_push($FormationGElectrique,$donne['libFormation']);

        }elseif ($donne['libStructure']==('Gestion')) {

          array_push($FormationGestion,$donne['libFormation']);

        }elseif ($donne['libStructure']==('G�nie Chimique')) {

          array_push($FormationGChimique,$donne['libFormation']);

        }elseif ($donne['libStructure']==('G�nie M�canique')) {

          array_push($FormationGMecanique,$donne['libFormation']);

        }elseif ($donne['libStructure']==('G�nie Informatique')) {

          array_push($FormationGInformatique,$donne['libFormation']);

        }elseif ($donne['libStructure']==('G�nie Civil')) {

          array_push($FormationGCivil, $donne['libFormation']);

        }

        
        
      }
      $req->closeCursor();

$Formations = array($FormationGElectrique,$FormationGestion,$FormationGChimique,$FormationGMecanique,$FormationGInformatique,$FormationGCivil);


?>

    <div class="span9">
      


   

<div class="block"> <!-- Debut  Block -->
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">D�partement</div>
    <div class="pull-right">
      <?php  SetModalButton('D�partement','Ajouter'); ?>
      <?php SetModalButton('D�partement','Supprimer'); ?>
      <?php  SetModalButton('D�partement','Update') ;?>
      <?php  SetModal('D�partement','Ajouter',$Departement); ?>
      <?php SetModal('D�partement','Supprimer',$Departement); ?>      
      <?php  SetModal('D�partement','Update',$Departement); ?>      

      </div>
  </div>
      <div class="block-content collapse in">
      

                
          <!-- Debut  Accordion -->

                <div class="accordion" id="Accord_Departement">

                    <!-- Config  Accordion -->
                    <?php 
                    for ($i=0; $i <count($Departement) ; $i++) { 
                      SetAccordeon(($Departement[$i]),"Liste des Formations  ",$Formations[$i]);
                    }
                      
                     ?>
                  

                  


                </div>
                  
          <!-- Fin  Accordion -->
          </div>
          

    

    
    









   
  <!-- Fin  Block -->
</div>
    </div> <!-- fin span9-->

  