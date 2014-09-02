

<?php 

 function SetAccordeon($Structure,$Description,$Tab)
{
  
   $lien = str_ireplace(' ', '', $Structure);
   $lien = str_ireplace("'", '', $lien);
  
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$lien.'">'
                        .$Structure.' 
                      </a>
                    </div>
                    <div id="Ac'.$lien.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
            <caption> <h3>'.$Structure.' </h3> </caption>
            <thead>
            <tr>
              <th>'.$Description.' '.$Structure.' </th>
              
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
              <td> <button class="btn btn-warning" data-toggle="modal" href="#Consulter'.$Structure.'" title="Consulter"> <i class="icon-search" ></i> </button></td>
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

 function SetAccordeonBis($Structure,$Description,$Tab)
{
  
   $lien = str_ireplace(' ', '', $Structure);
   $lien = str_ireplace("'", '', $lien);
  
echo '
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac'.$lien.'">'
                        .$Structure.' 
                      </a>
                    </div>
                    <div id="Ac'.$lien.'" class="accordion-body collapse" >
                      <div class="accordion-inner">
                        <!-- Debut  Table des formations -->
                    
          <table class="table table-hover table-condensed">
            <caption> <h3>'.$Structure.' </h3> </caption>
            <thead>
            <tr>
              <th>'.$Description.' '.$Structure.' </th>
              
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
              <td> <button class="btn btn-warning" data-toggle="modal" href="#Consulter'.$Structure.'" title="Consulter"> <i class="icon-search" ></i> </button></td>
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
  /////////////////// FONCTION SETMODAL /////////////////////

function SetModal($Chaine,$Option,$Item)
{
  if ($Option =="Ajouter") {
    
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
                  <input type="text" id="NvNomFormation" size="12" placeholder="Nouveau Nom '.$Chaine.'">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="NvItem'.$Chaine.'">Option '.$Chaine.'</label>
                  <div class="controls">
                  
                  <select id="NvItem'.$Chaine.'" >';

                    for ($i=0; $i <count($Item) ; $i++) { 
                     echo '<option value="'.utf8_encode($Item[$i]).'">'.utf8_encode($Item[$i]).'</option>';                    
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
                     echo '<option value="'.utf8_encode($Item[$i]).'">'.utf8_encode($Item[$i]).'</option>';                    
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

  <?php

    /////////////////// FONCTION SETMODALBUTTON /////////////////////

  function SetModalButton($Chaine,$Option)
  {
    if ($Option == "Ajouter") {
      echo ' <button class="btn btn-primary " data-toggle="modal" href="#nv'.$Chaine.'" title="Ajouter '.$Chaine.'"> <i class="icon-plus"></i> '.$Option.'  </button> ';
    }elseif ($Option == "Supprimer") {
      echo ' <button class="btn btn-danger" data-toggle="modal" href="#Delete'.$Chaine.'" title="Supprimer '.$Chaine.'"> <i class="icon-trash"></i> '.$Option.'  </button> ';
    }elseif ($Option == "Update") {
      echo ' <button class="btn btn-warning" data-toggle="modal" href="#Update'.$Chaine.'" title="Modifier '.$Chaine.'"> <i class="icon-pencil"></i> Modifier  </button> ';
    }
  }
	
  /////////////////// FONCTION SETROW /////////////////////
  
  function SetRow($tab1=null, $tab2=null, $tab3=null, $tab4=null, $tab5=null, $tab6=null){
	
	for ($i=0; $i <count($tab1) ; $i++) {
	echo "<tr class=''>"."<td>".utf8_encode($tab1[$i])."</td>"."<td>".utf8_encode($tab2[$i])."</td>"."<td width='12%'>".utf8_encode($tab3[$i])."</td>"."<td>".utf8_encode($tab4[$i])."</td>"."<td width='15%'>".utf8_encode($tab5[$i])."</td>"."<td>".utf8_encode($tab6[$i])."</td>"."<td>".utf8_encode($tab7[$i])."</td></tr>";
	}
	
  /////////////////// FONCTION BIGSETROW /////////////////////
  
  function BigSetRow(array $tab){
	
	for ($i=0; $i <count($tab) ; $i++) {
	echo "<tr class=''>"."<td>".utf8_encode($tab[$i][0])."</td>"."<td>".utf8_encode($tab[$i][1])."</td>"."<td width='12%'>".utf8_encode($tab[$i][2])."</td>"."<td>".utf8_encode($tab[$i][3])."</td>"."<td width='15%'>".utf8_encode($tab[$i][4])."</td>"."<td>".utf8_encode($tab[$i][5])."</td>"."<td>".utf8_encode($tab[$i][6])."</td></tr>";
	}
		
	}
}  
  
   ?>