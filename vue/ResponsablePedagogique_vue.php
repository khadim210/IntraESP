<?php if (isset($Responsable[0])) { ?>


<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tabRes_1" data-toggle="tab"><?php echo  $Responsable[0]['classe'] ?></a></li>
		<?php
		for ($i = 1; $i <= count($Responsable)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tabRes_'.$y.'" data-toggle="tab">'.$Responsable[$i]['classe'].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  

			<?php
					
					for ($i = 0; $i <= count($Responsable)-1; $i++) {
							
						$y = $i+1;
						
						$y = $i+1;
						
						if ($i == 0) {
							$active = 'active';
						}else{
							$active = '';
						}
							
						echo '<div class="tab-pane '.$active.'" id="tabRes_'.$y.'">';
					
			?>
			
			<div>
					
			<dl class="dl-horizontal">
					
			<dt>	<h4 class="">Nom  :</h4> </dt> <dd> <ul class="inline"> <li> <h1> <?php echo ($Responsable[$i]['nom'])  ?> </h1> </li>  </ul> </dd>
			
			<dt>	<h4 class="">Prénom  :</h4> </dt> <dd> <ul class="inline"> <li> <h1> <?php echo ($Responsable[$i]['prenom'])  ?> </h1> </li>  </ul> </dd>
			
			<dt>	<h4 class="">Téléphone  :</h4> </dt> <dd> <ul class="inline"> <li> <h1> <?php echo ($Responsable[$i]['telephone'])  ?> </h1> </li>  </ul> </dd>

			 </dl>
				
			</div>	<!-- Fin tab -->	
					<?php		
						echo '</div>';
					} // Fin first For
						
					
					?>			
			
			
			
			
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
<?php } ?>    