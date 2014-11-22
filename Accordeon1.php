

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
                    
          <table class="table table-hover">
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