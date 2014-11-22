<p class="text-center text-info"> Veuillez Choisir un mot de passe pour le Responsable de Classe </p>
<fieldset>
<legend>Mot de Passe </legend>

<form action="../controleur/Configuration_controller.php?control=ResponsableClasse" method="POST">
<input type="hidden" name="idClasse" value="<?php echo $_SESSION['idClasse'] ?>">
<input type="hidden" name="idAgent" value="<?php echo $_SESSION['idAgent'] ?>">
<p class="text-center"> Mot de Passe:	<input name="motdepasse" style="height: 5%" type="password"> <button class="btn btn-primary" type="submit">Valider </button> </p>
</form>

<p class="text-left text-warning"> Exemple Mot de Passe : <?php echo $_SESSION['Classe'] ?> </p>

</fieldset>
