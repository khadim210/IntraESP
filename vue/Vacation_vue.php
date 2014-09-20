<table class="table table-striped table-condensed"	>
  <thead>
            <tr>
            	
              <th>Nom 
              </th>
              <th>Prénom
              </th>
              <th>Heure(s) CM Restante(s)
              </th>
              <th>Heure(s) TP Restante(s)
              </th >
              <th>Heure(s) TD Restante(s)
              </th>
              <th >Matière
              </th>
              <th>Classe
              </th>
              
            </tr>
          </thead>


<?php  for ($i = 0; $i < count($DataAffectation); $i++) { ?>
		
		<tr> <td> <?php echo $DataAffectation[$i][0] ?> </td> <td > <?php echo $DataAffectation[$i][1] ?> </td> <td> <center> <?php echo (($DataAffectation[$i][2])) ?> </center> </td> <td> <center> <?php echo (($DataAffectation[$i][3])) ?> </center> </td> <td> <center> <?php echo (($DataAffectation[$i][4]))  ?> </center> </td> <td style="width:28% ; height: 100%;"> <?php echo $DataAffectation[$i][8] ?>   </td>  <td> <?php echo $DataAffectation[$i][9] ?> </td>  </tr>
		
		
<?php } ?>

</table>

<div class="pull-right">

<a href="../vue/Historique_Bis.php" class="btn btn-primary">Voir détails Historique</a> <a href="../vue/Historique.php" class="btn btn-primary">Historique de Vacation</a>

</div>