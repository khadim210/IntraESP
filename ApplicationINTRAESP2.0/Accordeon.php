

<?php 

 function SetAccordeon($Structure,$Tab)
{
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$Structure.'">'
                        .$Structure.' 
                      </a>
                    </div>
                    <div id="Ac'.$Structure.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
            <caption> <h3>Liste des '.$Structure.' </h3> </caption>
            <thead>
            <tr>
              <th>Nom '.$Structure.' </th>
              
              <th></th>
              
            </tr>
            </thead>
              <tbody>
';

for ($i=0; $i <count($Tab) ; $i++) { 
  # code...
echo '
            <tr>
              <td>'.utf8_encode($Tab[$i]).'</td>
              <td><button class="btn btn-danger" data-toggle="modal" href="#DeleteFormation" title="Supprimer"> <i class="icon-remove" ></i> </button>  <button class="btn btn-warning" data-toggle="modal" href="#UpdateFormation" title="Modifier"> <i class="icon-edit" ></i> </button></td>
            </tr>              
';
    } // fin For
    echo '

</tbody>
            </table>

            <!-- Fin  Table des formations -->


                      </div>
                    </div>
                  </div>

    ';
} // Fin Fonction SetAccordeon
 ?>



 <?php
function SetModal($Chaine,$Option,$Item)
{
  if ($Option ="Ajouter") {
    
  echo '
          <div class="modal hide fade" role="dialog" id="nv'.$Chaine.'" aria-labelledby="nv'.$Chaine.'Label" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="nv'.$Chaine.'Label">Nouveau '.$Chaine.'</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="Nom'.$Chaine.'"> '.$Chaine.'</label>
                  <div class="controls">
                  <input type="text" id="Nom'.$Chaine.'" size="12" placeholder="'.$Chaine.'">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="Item'.$Chaine.'">Options '.$Chaine.'</label>
                  <div class="controls">
                  
                  <select id="Item'.$Chaine.'" >';

                  for ($i=0; $i <count($Item) ; $i++) { 
                     echo '<option value="'.$Item[$i].'">'.$Item[$i].'</option>';                    
                  }
          echo '          

                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Creer</button>
    
          </form>
          </div>
        
      

    </div> <!-- Fin Modal nv'.$Chaine.' -->


  ';
  }elseif ($Option =="Update") {

    echo '
        <!-- Début Modal Mis à jour  -->

<div class="modal hide fade" role="dialog" id="Update'.$Chaine.'" aria-labelledby="Update'.$Chaine.'Label" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="Update'.$Chaine.'Label">Mis à jour '.$Chaine.'</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="NvNom'.$Chaine.'"> '.$Chaine.'</label>
                  <div class="controls">
                  <input type="text" id="NvNomFormation" size="12" placeholder="Nouveau '.$Chaine.'">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="NvItem'.$Chaine.'">Option '.$Chaine.'</label>
                  <div class="controls">
                  
                  <select id="NvItem'.$Chaine.'" >';

                    for ($i=0; $i <count($Item) ; $i++) { 
                     echo '<option value="'.$Item[$i].'">'.$Item[$i].'</option>';                    
                  }

echo '                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Mettre à jour</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Mis à jour  -->


    ';
    
  }elseif ($Option =="Supprimer") {
    echo '
          <div class="modal hide fade" role="dialog" id="Delete'.$Chaine.'" aria-labelledby="Delete'.$Chaine.'Label" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="Delete'.$Chaine.'Label">Supprimer '.$Chaine.'</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                  <div class="control-group">
                  <label class="control-label" for="Deleted'.$Chaine.'">'.$Chaine.'</label>
                  <div class="controls">
                  
                  <select id="Deleted'.$Chaine.'" >';

                    for ($i=0; $i <count($Item) ; $i++) { 
                     echo '<option value="'.$Item[$i].'">'.$Item[$i].'</option>';                    
                  }

echo '                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression Département  -->
    ';
  }   // Fin If
} // fin Fonction SetModal




  ?>