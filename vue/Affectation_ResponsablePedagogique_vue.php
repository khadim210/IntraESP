<?php if (isset($Classe[0])) { ?>


<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tabS2_1" data-toggle="tab"><?php echo  $Classe[0] ?></a></li>
		<?php
		for ($i = 1; $i <= count($Classe)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tabS2_'.$y.'" data-toggle="tab">'.$Classe[$i].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  

			<?php
					
					for ($i = 0; $i <= count($Classe)-1; $i++) {
							
						$y = $i+1;
						
						$y = $i+1;
						
						if ($i == 0) {
							$active = 'active';
						}else{
							$active = '';
						}
							
						echo '<div class="tab-pane '.$active.'" id="tabS2_'.$y.'">';
					
			?>
			<form action="../controleur/Affectation_Controller.php?control=ResponsablePedagogique" method="POST">
			<div>
					<!-- Debut modal -->
					
					<div id="modalClasse<?php echo $y ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					 <h3>Affectation Responsable Pédagogique</h3>
					</div>
					 <div class="modal-body" id="myModalLabel">
						<p>L'Agent selectionné sera Affecté au poste de Responsable Pédagogique de la classe <strong> <?php echo $Classe[$i] ?> </strong> avec les privilèges et responsabilités qui accompagnent ce poste !</p>
					 </div>
					
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
					<button type="submit" class="btn btn-primary"  >Appliquer</button>
					</div>
					
					<!-- Debut Spécification de la Classe -->
					
					<input name ="Classe" type="hidden" value="<?php echo  $Classe[$i] ?>">
					
					<!-- Fin Spécification de la Classe -->
					
					</div>		
					<!-- Fin modal -->
			
			
					<select name='idAgentResponsable'> <?php for ($r = 0; $r < count($agent_per); $r++) { ?>
				 
				 	<option value="<?php echo $agent_per[$r]['idAgent'] ?>"> <?php echo $agent_per[$r]['nom'] ?> <?php echo $agent_per[$r]['prenom'] ?> </option>
				 	
				 <?php	
				 } ?> </select>
				
					
					<div class="pull-right">
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalClasse<?php echo $y ?>"> Affecter</button>
					</div>
				</form>
			</div>	<!-- Fin tab -->	
					<?php		
						echo '</div>';
					} // Fin first For
						
					
					?>			
			
			
			
			
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
<?php } ?>    