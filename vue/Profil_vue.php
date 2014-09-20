<div class="hero-unit"> <!-- Debut unit-hero -->

<h3> <?php echo  $NomProfil ?>  </h3>

	<?php if (isset($DataAffectation[0])) {?>

	<div class="tabbable tabs-left">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tabClasse1" data-toggle="tab">	<?php echo $DataAffectation[0][9];?>
			
			</a>
			</li>
		<?php 
		$ClasseList = array();
		for ($z = 1; $z <= count($DataAffectation)-1; $z++) {
					
				$y = $z+1;

		echo '<li><a href="#tabClasse'.$y.'" data-toggle="tab">'.$DataAffectation[$z][9].'</a></li>';

		array_push($ClasseList, $DataAffectation[$z][9]);
		
		}
		
		for ($z = 0; $z < count($DataAffectation); $z++) {
				
			array_push($ClasseList, $DataAffectation[$z][9]);
		}
		
		$ClasseList = array_unique($ClasseList);
		
		?>
		
		</ul>
		
		
	
		
		<div class="tab-content">
		
		<?php 
		for ($z = 0; $z <= count($DataAffectation)-1; $z++) {
			
				$y = $z+1;
				
				if ($z == 0) {
					$active = 'active';
				}else{
					$active = '';
				}
			
				foreach ($ClasseList as $value) {
				
				
					if ($value == $DataAffectation[$z][9]) {
						$index = $z	;
					}
				}
				
//				$index = $z	;
				
				echo '<div class="tab-pane '.$active.'" id="tabClasse'.$y.'">';
			
						
		?>
		
	
		
		<dl class="dl-horizontal">
		
		
		
	<div class="container" style="background-color:#fafafa;">
	
	<dt>	<h4 class="">Matière :</h4> </dt> <dd>  <h3> <?php echo ($DataAffectation[$index][8])  ?>  </h3>  </dd>
		
	<dt>	<h4 class="">Heures CM  :</h4> </dt> <dd> <ul class="inline"> <li> <h1> <?php echo ($DataAffectation[$index][2])  ?> / <?php if (isset($DataAffectation[$index][5])) { echo ($DataAffectation[$index][5]); } else echo "0"; ?> </h1> </li> <li> heure(s) </li> </ul> </dd>
	
	<dt>	<h4 class="">Heures TP  :</h4> </dt> <dd> <ul class="inline"> <li> <h1> <?php echo ($DataAffectation[$index][3])  ?> /  <?php if (isset($DataAffectation[$index][6])) { echo ($DataAffectation[$index][6]); } else echo "0"; ?> </h1> </li> <li> heure(s) </li> </ul> </dd>
	
	<dt>	<h4 class="">Heures TD  :</h4> </dt> <dd> <ul class="inline"> <li> <h1> <?php echo ($DataAffectation[$index][4])  ?> / <?php if (isset($DataAffectation[$index][7])) { echo ($DataAffectation[$index][7]); } else echo "0"; ?> </h1> </li> <li> heure(s) </li> </ul> </dd>
		
	</div>	
		
		
		
		
		
		</dl>
				
	
		
		<?php echo '</div>';
		}
		?>	
		</div> <!-- Fin tab-content -->	
	</div> <!-- Fin Tabbable --> 
	<?php } ?>        
</div> <!-- Fin unit-hero -->

