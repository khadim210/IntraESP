<div id="cahier" class="container-fluid">

<form action="../controleur/Vacation_controller.php?control=Enseignement" method="POST">

<table class="table">
  <tr>
    <th>Matière</th>
    <th>Type</th>
    <th>Début</th>
    <th>Fin</th>
    <th>Contenu Cours</th>
    <th style="width: 5%;">Signature(Enseignant)</th>
  </tr>
  <tr>
    <td><select id="Matiere" class="transparent" name="idMatiere" style="width: 180px;" onchange="loadProfessor(this.value)">
    			
    		<?php for ($i = 0; $i < count($MatiereData[0]); $i++) { ?>
    			
    			<option value = '<?php echo $MatiereData[0][$i]['idMatiere'] ?>' > <?php echo $MatiereData[0][$i]['libMatiere'] ?> </option>
    			
    		<?php } ?>
    			
    			
    	</select>
    </td>
    
    <td><select class="transparent" style="width: 60px;" name="typeCours">
    			<option value="CM"> CM </option>
    			<option value="TP"> TP </option>
    			<option value="TD"> TD </option>
    			
    	</select>
    </td>
    
    <td><select class="transparent" style="width: 100%;" name="debutCours">
    			<option value="8">8h </option>
    			<option value="8.5">8h30 </option>
    			<option value="9">9h </option>
    			<option value="9.5">9h30 </option>
    			<option value="10">10h </option>
    			<option value="10.5">10h30 </option>
    			<option value="11">11h </option>
    			<option value="14.5">14h30 </option>
    			<option value="15">15h </option>
    			<option value="15.5">15h30 </option>
    			<option value="16">16h </option>
    			<option value="16.5">16h30 </option>
    			<option value="17">17h </option>
    			<option value="17.5">17h30 </option>
    			<option value="18">18h </option>
    			
    	</select>
    
    </td>
    <td><select class="transparent" style="width: 100%;" name="finCours">
    			<option value="8">8h </option>
    			<option value="8.5">8h30 </option>
    			<option value="9">9h </option>
    			<option value="9.5">9h30 </option>
    			<option value="10">10h </option>
    			<option value="10.5">10h30 </option>
    			<option value="11">11h </option>
    			<option value="11.5">11h30 </option>
    			<option value="12">12h </option>
    			<option value="14.5">14h30 </option>
    			<option value="15">15h </option>
    			<option value="15.5">15h30 </option>
    			<option value="16">16h </option>
    			<option value="16.5">16h30 </option>
    			<option value="17">17h </option>
    			<option value="17.5">17h30 </option>
    			<option value="18">18h </option>
    			<option value="18.5">18h30 </option>
    			
    	</select>
    
    </td>
    <td><textarea id="libCours" class="transparent" name="libelleCours" placeholder=" Exemple:Chapitre 1 :Introduction à l'Algorithme " style="width: 530px;" rows="10" cols="100"></textarea></td>
    <td> <ul class="inline"> <li> Enseignant : </li> <li> 
    	<select id="Professor" class="transparent" name="idEnseignant" onchange="loadMatiere(this.value)">
    	<?php for ($i = 0; $i < count($Enseignant); $i++) { ?>
    			
    			<option value = <?php echo $Enseignant[$i]['idAgent'] ?> > <?php echo $Enseignant[$i]['prenom'] ?> <?php echo $Enseignant[$i]['nom'] ?> </option>
    			
    		<?php } ?>
    	
    	</select> 
    </li>
    	<input name="idClasse" type="hidden" value = "<?php echo $_GET['idClasse'] ?>" >
     </ul>
     <ul class="inline transparent"> <li> Matricule : </li> <li > <input  name="matriculeEnseignant" type="text" class="transparent" placeholder="xxx xxx/x" > </li> </ul> <br> <center> <button class="btn btn-primary">Valider</button> </center> </td>
  </tr>
</table>

</form>

</div>
