<?php ?>
<tbody>
<tr>
<td >Matière1</td>

<td>CM</td>
<td>TD</td>
<td>TP</td>

<td >
<select >
<option>Enseignant1</option>
<option>Enseignant2</option>
<option>Enseignant3</option>
<option>Enseignant4</option>
<option>Enseignant5</option>
<option>Enseignant6</option>
<option>Enseignant7</option>
<option>Enseignant8</option>
</select>
</td>
<td>  <input style="width:30%;" type="text">  </td>
<td>  <input style="width:30%;" type="text">  </td>
<td>  <input style="width:30%;" type="text">  </td>
</tr>





















	<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab"><?php echo  $Classe[0] ?></a></li>;
		<?php
		for ($i = 1; $i <= count($Classe)-1; $i++) {
			
			$y = $i+1;
				
			echo '<li><a href="#tab'.$y.'" data-toggle="tab">'.$Classe[$i].'</a></li>';
			
		}?>
		
		</ul>
		
         <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
<table class="table table-striped table-condensed">
          <thead>
            <tr>
              <th width="25%"> Matière <?php echo $Classe[0] ?> <?php echo $MatiereData[0]['libMatiere']; ?>
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
		
		</tbody>
        </table>			
				
			</div> <!-- Fin tab1 -->

			
			
			
			
			
		</div> <!-- Fin tab-content -->
		
	</div> <!-- Fin Tabbable -->
                  