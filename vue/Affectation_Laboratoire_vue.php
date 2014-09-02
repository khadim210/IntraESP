
	<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tablab1" data-toggle="tab"><?php echo  $Laboratoire[0] ?></a></li>
		<?php
		for ($i = 1; $i <= count($Laboratoire)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tablab'.$y.'" data-toggle="tab">'.$Laboratoire[$i].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  <div class="tab-pane active" id="tablab1">

                  <div>
					<select>
					
					<?php for ($i = 0; $i < count($donne[0]); $i++) { ?>
					
					<option value="<?php $donne[0][$i]['idAgent'] ?>" > <?php echo $donne[0][$i]['nom'] ?> <?php echo $donne[0][$i]['prenom'] ?> </option>
					
					<?php	
					}	
					?>
										
					</select>
					<div class="pull-right">
					<button class="btn btn-primary"> Affecter</button>
					</div>
				</div>
			</div>
					<?php
					
					for ($i = 1; $i <= count($Laboratoire)-1; $i++) {
							
						$y = $i+1;
							
						echo '<div class="tab-pane" id="tablab'.$y.'">';
					
					?>
					<div>
					<select>
					
					<?php for ($z = 0; $z < count($donne[$i]); $z++) { ?>
					
					<option value="<?php echo $donne[$i][$z]['idAgent'] ?>" > <?php echo $donne[$i][$z]['nom'] ?> <?php echo $donne[$i][$z]['prenom']. ' ' ?> </option>
					
					<?php	
					}	
					?>
					
					</select>
					
					<div class="pull-right">
					<button class="btn btn-primary"> Affecter</button>
					</div>
					</div>		
					<?php		
						echo '</div>';
					}
						
					
					?>                  
					                  
                             
                  
                  
                  
		
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
                  