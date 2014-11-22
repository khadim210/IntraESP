
	<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab"><?php echo  $Service[0] ?></a></li>
		<?php
		for ($i = 1; $i <= count($Service)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tab'.$y.'" data-toggle="tab">'.$Service[$i].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  <?php
					
					for ($i = 0; $i <= count($Service)-1; $i++) {
							
						$y = $i+1;
						
						if ($i == 0) {
							$active = 'active';
						}else{
							$active = '';
						}
							
						echo '<div class="tab-pane '.$active.'" id="tab'.$y.'">';
					
					?>
					<form action="../controleur/Affectation_Controller.php?control=Service" method="POST">
					<div>
					
					<!-- Debut modal -->
					
					<div id="modalService<?php echo $y ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Affectation Chef de Service</h3>
					</div>
					 <div class="modal-body" id="myModalLabel">
						<p>L'Agent selectionné sera Affecté au poste de Chef de <strong> <?php echo $Service[$i] ?> </strong> avec les privilèges et responsabilités qui accompagnent ce poste !</p>
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>	
						
											 
					
					</div>
					
					<!-- Fin modal -->
					
					
					
					
					<select name='idAgentServ'>
					
					<?php for ($z = 0; $z < count($donne[$i]); $z++) { ?>
					
					<option value="<?php echo $donne[$i][$z]['idAgent'] ?>" > <?php echo $donne[$i][$z]['nom'] ?> <?php echo $donne[$i][$z]['prenom']. ' ' ?> </option>
					
					<?php	
					}	
					?>
					
					</select>
					
					<div class="pull-right">
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalService<?php echo $y ?>"> Affecter</button>
					</div>
					</div>
					</form>		
					<?php		
						echo '</div>';
					}
						
					
					?>                  
					                  
                             
                  
                  
                  
		
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
                  