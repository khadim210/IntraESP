
	<div class="tabbable">
		
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tabdep1" data-toggle="tab"><?php echo  $Departement[0] ?></a></li>
		<?php
		for ($i = 1; $i <= count($Departement)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tabdep'.$y.'" data-toggle="tab">'.$Departement[$i].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  
					<?php
					
					for ($i = 0; $i <= count($Departement)-1; $i++) {
							
						$y = $i+1;
						
						if ($i == 0) {
							$active = 'active';
						}else{
							$active = '';
							}
							
						echo '<div class="tab-pane '.$active.'" id="tabdep'.$y.'">';
					
					?>
					<form action="../controleur/Affectation_Controller.php?control=Departement" method="POST"  >
					<div>
					
					<!-- Debut modal -->
					
					<div id="modalDepartement<?php echo $y ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Affectation Chef de D�partement</h3>
					</div>
					 <div class="modal-body" id="myModalLabel">
						<p>L'Agent selectionn� sera Affect� au poste de Chef de D�partement de <strong> <?php echo $Departement[$i] ?> </strong> avec les privil�ges et responsabilit�s qui accompagnent ce poste !</p>
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>	
						
											 
					
					</div>
					
					<!-- Fin modal -->
					
					
					<!-- Ici �tait le debut premier formulaire -->
					
					<select name='idAgentdept'>
					
					<?php for ($z = 0; $z <count($donne[$i]); $z++) { ?>
					
					<option  value="<?php echo $donne[$i][$z]['idAgent'] ?>" > <?php echo $donne[$i][$z]['nom'] ?> <?php echo $donne[$i][$z]['prenom']. ' ' ?> </option>
					
					<?php	
					}	
					?>
					
					</select>
					
					<div class="pull-right">
					<button  class="btn btn-primary" data-toggle="modal" data-target="#modalDepartement<?php echo $y ?>"> Affecter</button>
					
					
					</div>
					</div>		
					</form>
					<?php		
						echo '</div>';
					}
						
					
					?>                  
					                  
                             
                  
                  
                  
		
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
                  