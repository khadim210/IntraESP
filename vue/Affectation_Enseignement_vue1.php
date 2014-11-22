<?php if (isset($Classe[0])) { ?>
<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab"><?php echo  $Classe[0] ?></a></li>
		<?php
		for ($i = 1; $i <= count($Classe)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tab'.$y.'" data-toggle="tab">'.$Classe[$i].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  			<?php
					
					for ($i = 0; $i <= count($Classe)-1; $i++) {
							
						$y = $i+1;
						
						if ($i == 0) {
							$active = 'active';
						}else{
							$active = '';
						}
							
						echo '<div class="tab-pane '.$active.'" id="tab'.$y.'">';
					
			?>
			
			<div>
				
				
					
		<table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th width="25%"> Matières <?php echo $Classe[$i] ?> 
              </th>
              <th>CM
              </th>
              <th>TP
              </th>
              <th>TD
              </th >
              <th>Enseignant
              </th>
              <th >CM
              </th>
              <th>TP
              </th>
              <th>TD
              </th>
              <th>
              </th>
            </tr>
          </thead>
          		<tbody>
					
					
					<?php for ($z = 0; $z <count($MatiereData1[$i]); $z++) { ?>
				<form action="../controleur/Affectation_Controller.php?control=Enseignement" method="POST"  >
				
				<!-- Debut modal -->
				
				<div id="modalEnseignement<?php echo $z ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Affectation Enseignement</h3>
					</div>
					 <div class="modal-body" id="myModalLabel">
						<p>L'Enseignant selectionné sera verra Affecté comme Enseignant de <strong> <?php echo $MatiereData1[$i][$z][1] ?> </strong> dans la Classe <strong> <?php echo $Classe[$i] ?> </strong> avec les privilèges et responsabilités qui accompagnent cette Affectation !</p>
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>
				
				
				
				</div>
				<!-- Fin modal -->
				
				
				
				
					
				<tr class=''>   <input name="idMatiere" type="hidden" value ="<?php echo  $MatiereData1[$i][$z][0]  ?>" > <td width='' > <?php echo $MatiereData1[$i][$z][1] ?> </td><td id="CM_initial"><?php echo $MatiereData1[$i][$z][2] ?></td><td id="TD_initial" ><?php echo $MatiereData1[$i][$z][3] ?></td><td id="TP_initial"> <?php echo $MatiereData1[$i][$z][4] ?> </td><td width=''> 
				
				<select name="idAgent"> <?php for ($r = 0; $r < count($merge); $r++) { ?>
				 
				 	<option  value="<?php echo $merge[$r]['idAgent'] ?>"> <?php echo $merge[$r]['nom'] ?> <?php echo $merge[$r]['prenom'] ?> </option>
				 	
				 <?php	
				 } ?> </select>
				
				</td><td> <input id="CM_affected" name="CM" type="number" style="width:30% ; height: 100%;" value="0"> </td><td> <input id="TD_affected" value="0" name="TP" type="number" style="width:30% ; height: 100%;" > </td><td> <input value="0" id="TP_affected" name="TD" type="number" style="width:30% ; height: 100%;" > </td>
				
				<td>
					<div class="pull-right">
						<button  class="btn btn-primary" data-toggle="modal" data-target="#modalEnseignement<?php echo $z ?>"> Affecter</button>
					</div>
				</td>
				</tr>	
					
				</form>	
					<?php	
					}	
					?>
					
			 </tbody>
        </table>
					
					
							
					
					
					</div>	<!-- Fin tab -->
						
					<?php		
						echo '</div>';
					} // Fin first For
						
					
					?>			
			
			
			
			
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
    
<?php } ?>    