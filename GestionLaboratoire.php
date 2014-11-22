<?php 



include('Connect.php');

include('MonFrameWork.php');



$TypeStructures = array();
$Structures = array();
// Chaque formation devrait avoir sa propre liste formation


$SousStructure = array();





$req = $bdd->query("SELECT  libStructure FROM  `structure` s WHERE s.idtypeStructure  in (SELECT DISTINCT idTypeStructure  FROM typestructure WHERE libTypeStructure ='Laboratoire')") or die(print_r($req->errorInfo()));
     
      while ($donne = $req->fetch()) {

        
        array_push($Structures, $donne['libStructure']);

        

        
        
      }
      $req->closeCursor();



?>


    <div class="span9">
      


    
<div class="block"> <!-- Debut  Block -->
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Laboratoire</div>
    <div class="pull-right">
      <?php  SetModalButton('Laboratoire','Ajouter'); ?>
      <?php SetModalButton('Laboratoire','Supprimer'); ?>
      <?php  SetModalButton('Laboratoire','Update') ;?>
      <?php  SetModal('Laboratoire','Ajouter',$TypeStructures); ?>
      <?php SetModal('Laboratoire','Supprimer',$Structures); ?>      
      <?php  SetModal('Laboratoire','Update',$Structures); ?>      

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
          

    

    
    









    
  <!-- Fin  Block -->
</div>
    </div> <!-- fin span9-->

