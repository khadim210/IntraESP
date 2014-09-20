<?php for ($i = 0; $i < count($Historique); $i++) { ?>

<div class="container">
<fieldset>
<legend><span class="label label-info"> <?php echo $Historique[$i]['libJour'] ?> - <?php echo $Historique[$i]['libMois'] ?> - <?php echo $Historique[$i]['libAnnee'] ?> </span></legend>

	<div class="container" style="">
	
	<ul class="inline"> <li> <h4>Nom</h4> </li> <li> <?php echo $Historique[$i]['nom'] ?> </li> <li> <h4>Prenom</h4> </li>  <li> <?php echo $Historique[$i]['prenom'] ?> </li> </ul>
	<ul class="inline"> <li> <h4>Classe</h4> </li> <li> <?php echo $Historique[$i]['libClasse'] ?> </li> <li> <h4>Matière</h4> </li>  <li> <?php echo $Historique[$i]['libMatiere'] ?> </li> </ul>
	<hr>
	<h3>Heures Effectuées</h3>
	<ul class="inline"> <li> <h4>CM :</h4> </li> <li> <h2> <?php echo $Historique[$i]['CM'] ?> </h2> </li> heure(s) <li> <h4>TP :</h4> </li>  <li> <h2> <?php echo $Historique[$i]['TP'] ?> </h2> </li> heure(s) <li> <h4>TD :</h4> </li>  <li> <h2> <?php echo $Historique[$i]['TD'] ?> </h2> </li> heure(s)</ul>
	<hr>
	</div>
</fieldset>
</div>



<?php } ?>
