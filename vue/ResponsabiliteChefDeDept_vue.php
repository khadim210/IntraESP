<table id="" class="table table-striped table-condensed" cellpadding="0" cellspacing="-1" border="0" >
  <thead>
            <tr>
            	
              <th>Nom 
              </th>
              <th>Pr�nom
              </th>
              <th>D�partement
              
              
              <th>T�l�phone
              </th>
              <th>
              </th>
              
            </tr>
          </thead>


<?php  for ($i = 0; $i < count($ChefDeDept); $i++) { ?>
	
	<form action="../controleur/Affectation_Controller.php?control=Responsabilite" method="POST">	
		
		<!-- Debut modal -->
				
				<div id="modalMiseAjour_<?php echo $i ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Mise � Jour</h3>
					</div>
					 <div class="modal-body" id="myModalLabel">
						<p>Voulez vous mettre � jour les param�tres d'affectation de  <strong> <?php echo $ChefDeDept[$i][2] ?> <?php echo $ChefDeDept[$i][1] ?>  </strong> Enseignant de <strong> <?php echo "" ?> </strong> avec les Cons�quences et responsabilit�s qu'engage cette action  ?</p>
					
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>	
				
				</div>
				
				<div id="modalDemission_<?php echo $i ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>D�mission</h3>
					</div>
					 <div class="modal-body" id="myModalLabel1">
						<p>Voulez vous d�mettre  <strong> <?php echo $ChefDeDept[$i][2] ?> <?php echo $ChefDeDept[$i][1] ?>  </strong> de son poste de Chef de D�partement de <strong> <?php echo $ChefDeDept[$i]['libStructure'] ?> </strong> avec les Cons�quences et responsabilit�s qu'engage cette action  ?</p>
						
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>
				</div>	
				
				
		<!-- Fin modal -->
		



		
		<tr> <input name="idRole" type="hidden" value="<?php echo $ChefDeDept[$i]['idRole']?>"> <td><?php echo $ChefDeDept[$i]['nom']?> </td> <td><?php echo $ChefDeDept[$i]['prenom']?> </td> <td> <?php echo $ChefDeDept[$i]['libStructure'] ?></td> <td><?php echo $ChefDeDept[$i]['telephone']?> </td> <td> <span class="demission"> <button id="demission" data-toggle="modal" data-target="#modalDemission_<?php echo $i ?>" class="btn btn-block btn-danger demission"> D�mettre <i class="icon-remove-circle"></i> </button> </span> </td>  </tr>
		
		
		
		</form>
<?php } ?>

</table>


