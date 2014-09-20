<table class="table table-striped table-condensed ">
  <thead>
            <tr>
            	
              <th>Nom 
              </th>
              <th>Prénom
              </th>
              <th>CM
              </th>
              <th>TP
              </th >
              <th>TD
              </th>
              <th >Matière
              </th>
              <th>Classe
              </th>
              <th>
              </th>
              <th>
              </th>
            </tr>
          </thead>


<?php  for ($i = 0; $i < count($Data); $i++) { ?>
	
	<form action="../controleur/Affectation_Controller.php?control=Enseignant" method="POST">	
		
		<!-- Debut modal -->
				
				<div id="modalMiseAjour_<?php echo $i ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Mise à Jour</h3>
					</div>
					 <div class="modal-body" id="myModalLabel">
						<p>Voulez vous mettre à jour les paramètres d'affectation de  <strong> <?php echo $Data[$i][2] ?> <?php echo $Data[$i][1] ?>  </strong> Enseignant de <strong> <?php echo $Data[$i][6] ?> </strong> avec les Conséquences et responsabilités qu'engage cette action  ?</p>
					
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>	
				
				</div>
				
				<div id="modalDemission_<?php echo $i ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Démission</h3>
					</div>
					 <div class="modal-body" id="myModalLabel1">
						<p>Voulez vous démettre  <strong> <?php echo $Data[$i][2] ?> <?php echo $Data[$i][1] ?>  </strong> de son fonction d' enseignant de <strong> <?php echo $Data[$i][6] ?> </strong> avec les Conséquences et responsabilités qu'engage cette action  ?</p>
						
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>
				</div>	
				
				
		<!-- Fin modal -->
		



		
		<tr> <input class="action" name="action" type="hidden" value="">  <input name="idAffectation" type="hidden" value="<?php echo $Data[$i][0] ?>"><td > <?php echo $Data[$i][1] ?> </td> <td> <?php echo $Data[$i][2] ?>  </td> <td>  <input name="CM" type="number" value="<?php echo $Data[$i][3] ?>" style="width:28% ; height: 100%;">  </td> <td> <input name="TP" type="number" value="<?php echo $Data[$i][4] ?>" style="width:28% ; height: 100%;">  </td> <td> <input name="TD" type="number" value="<?php echo $Data[$i][5] ?>" style="width:28% ; height: 100%;">  </td> <td> <?php echo $Data[$i][6] ?> </td> <td> <?php echo $Data[$i][7] ?> </td> <td> <span class="demission"> <button id="demission" data-toggle="modal" data-target="#modalDemission_<?php echo $i ?>" class="btn btn-danger demission"> Démettre <i class="icon-remove-circle"></i> </button> </span> </td> <td> <span class="update"> <button  data-toggle="modal" data-target="#modalMiseAjour_<?php echo $i ?>" class="btn btn-warning"> Mettre à jour <i class="icon-wrench"></i> </button> </span> </td> </tr>
		
		<input type="hidden" name="idMatiere" value="<?php echo $Data[$i][8] ?>">
		<input type="hidden" name="idClasse" value="<?php echo $Data[$i][9] ?>">
		<input type="hidden" name="idAgent" value="<?php echo $Data[$i][10] ?>">
		<input type="hidden" name="CMAffecte" value="<?php echo $Data[$i][3] ?>">
		<input type="hidden" name="TPAffecte" value="<?php echo $Data[$i][4] ?>">
		<input type="hidden" name="TDAffecte" value="<?php echo $Data[$i][5] ?>">
		
		</form>
<?php } ?>

</table>