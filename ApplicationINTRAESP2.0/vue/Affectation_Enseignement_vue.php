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
                  <div class="tab-pane active" id="tabS2_1">
          
  <div>
					
	<form action="">
					
		<table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th width="25%"> Matières <?php echo $Classe[0] ?> 
              </th>
              <th>CM
              </th>
              <th>TD
              </th>
              <th>TP
              </th >
              <th>Enseignant
              </th>
              <th >CM
              </th>
              <th>TD
              </th>
              <th>TP
              </th>
            </tr>
          </thead>
					       <tbody>
					       
					<?php for ($z = 0; $z <count($MatiereData2[0]); $z++) { ?>
					
				 <tr class=''> <td width='' > <?php echo $MatiereData2[0][$z][1] ?> </td><td><?php echo $MatiereData2[0][$z][2] ?></td><td ><?php echo $MatiereData2[0][$z][3] ?></td><td> <?php echo $MatiereData2[0][$z][4] ?> </td><td width=''> 
				 
				 <select> <?php for ($i = 0; $i < count($agent_per); $i++) { ?>
				 
				 	<option value="<?php echo $agent_per[$i]['idAgent'] ?>"> <?php echo $agent_per[$i]['nom'] ?> <?php echo $agent_per[$i]['prenom'] ?> </option>
				 	
				 <?php	
				 } ?> </select> 
				 
				 
				 </td><td> <input style="width:30%" type="text" > </td><td> <input style="width:30%" type="text" > </td><td> <input style="width:30%" type="text" > </td></tr>	
					
					<?php	
					}	
					?>
					       
					       </tbody>
        </table>
					
					
					</form>
					
					<div class="pull-right">
					<button class="btn btn-primary"> Affecter</button>
					</div>
</div>
		
				
			</div> <!-- Fin tab1 -->

			<?php
					
					for ($i = 1; $i <= count($Classe)-1; $i++) {
							
						$y = $i+1;
							
						echo '<div class="tab-pane" id="tabS2_'.$y.'">';
					
			?>
			
			<div>
				
				<form action="">
					
		<table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th width="25%"> Matières <?php echo $Classe[$i] ?> 
              </th>
              <th>CM
              </th>
              <th>TD
              </th>
              <th>TP
              </th >
              <th>Enseignant
              </th>
              <th >CM
              </th>
              <th>TD
              </th>
              <th>TP
              </th>
            </tr>
          </thead>
          		<tbody>
					
					
					<?php for ($z = 0; $z <count($MatiereData2[$i]); $z++) { ?>
					
				<tr class=''> <td width='' > <?php echo $MatiereData2[$i][$z][1] ?> </td><td><?php echo $MatiereData2[$i][$z][2] ?></td><td ><?php echo $MatiereData2[$i][$z][3] ?></td><td> <?php echo $MatiereData2[$i][$z][4] ?> </td><td width=''> 
				
				<select> <?php for ($r = 0; $r < count($agent_per); $r++) { ?>
				 
				 	<option value="<?php echo $agent_per[$r]['idAgent'] ?>"> <?php echo $agent_per[$r]['nom'] ?> <?php echo $agent_per[$r]['prenom'] ?> </option>
				 	
				 <?php	
				 } ?> </select>
				
				 </td><td> <input style="width:30%" type="text" > </td><td> <input style="width:30%" type="text" > </td><td> <input style="width:30%" type="text" > </td></tr>	
					
					<?php	
					}	
					?>
					
			 </tbody>
        </table>
					
					
					</form>		
					
					<div class="pull-right">
					<button class="btn btn-primary"> Affecter</button>
					</div>
			</div>	<!-- Fin tab -->	
					<?php		
						echo '</div>';
					} // Fin first For
						
					
					?>			
			
			
			
			
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
    