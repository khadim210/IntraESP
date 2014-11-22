

<h3> <?php echo  $NomProfil ?>  </h3>

	

	<div class="tabbable tabs-left">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tabMotdePasse" data-toggle="tab"> Mot de Passe		</a></li>
			
			<li ><a href="#tabBanque" data-toggle="tab"> Banque		</a></li>
			
			<li ><a href="#tabDiver" data-toggle="tab"> Divers		</a></li>
				
		</ul>
		
		
	
		
		<div class="tab-content">
		
		
		<div class="tab-pane active" id="tabMotdePasse">
		
			<form action="../controleur/ConfigurationProfil_controller.php?control=Password" method="POST">
			
			<fieldset>
			
			<legend>Paramètre Mot de Passe</legend>
			
<div>			
			
<label> Nouveau Mot de Passe :</label>	<input id="firstPassword" name="password" type="password" style="height: 5%;"> <br> <label> Retapez Mot de Passe :</label>	<input id="secondPassword" name="password" type="password" style="height: 5%;"> <br> <button id="submitPassword" class="btn btn-primary"  type="submit"> Modifier</button> <span id="statusPassword"></span>
<input type="hidden" name="idAgent" value= "<?php echo  $_SESSION['idAgent'] ?>"  > 
			
</div>			
				
			
			</fieldset>
			
			
			</form>
		
		</div>
		
		<div class="tab-pane" id="tabBanque">
		
			<form action="">
			
			<fieldset>
			
			<legend>Paramètre Banque</legend>
			
			
			
<label> Libellé Banque :</label>	<input type="text"> <br> <button class="btn btn-primary"> Valider</button> 
			
			
			
			
			</fieldset>
			
			
			</form>
		
		
		
		</div>	<!-- Fin tab-Banque -->
	
		<div class="tab-pane" id="tabDiver">
		
		<form action="">
			
			<fieldset>
			
			<legend>Paramètre Divers</legend>
			
			
			
 
			
			
			
			
			</fieldset>
			
			
			</form>
		
		
		</div> <!-- Fin tab-Diver -->
		
				
	
		
			
		</div> <!-- Fin tab-content -->	
	</div> <!-- Fin Tabbable --> 
	        


