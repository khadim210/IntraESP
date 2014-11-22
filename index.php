<html>
<head>
	<title>Acceuil-IntraESP</title>
	<meta charset="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
 
</head>
<body>
  <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          <img class="" src="MonImage/logoIntraESP.png" width="120px">
                  
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>
    <div class="container">
    
    <?php if (isset($_GET['auth'])) {

    	if ($_GET['auth']=='fail') {  	?>
    
      <div class="alert alert-error">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
        <strong>Oups!</strong>
        Erreur d'authentification, RÃ©essayez !
    </div>
    
    <?php  }

    } ?>
    
 <?php   ' <div class="alert alert-block">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Erreur!</strong>
        Vous avez oubliez une ou deux cases,RÃ©essayez ! 
    </div>'
   ?>
    </div>
    
    <br>
        
        
    

<div class="container">

      <form class="form-signin" action="controleur/Authentificate_controller.php?control=login" method="POST">
        <h2 class="form-signin-heading">Authentification</h2>
        <center> <img src="MonImage/profilicon.png" class="img-rounded" width="100" height="100"> </center>
        <br>
        <input name="login" type="text" class="input-block-level" placeholder="Identifiant">
        <input name="motdepasse" type="password" class="input-block-level" placeholder="Mot de Passe">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Se Souvenir de moi
        </label>
        <button class="btn btn-large btn-primary" type="submit">Se Connecter</button>
        
        
        
        <h4 class="form-signin-heading">Demo Access</h4>
        <div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
		  <ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab">Directeur</a></li>
		    <li><a href="#tab2" data-toggle="tab">Chef de Département</a></li>
		    <li><a href="#tab3" data-toggle="tab">Responsable Pédagogique</a></li>
		    <li><a href="#tab4" data-toggle="tab">Responsable Classe</a></li>
		  </ul>
		  <div class="tab-content">
		    <div class="tab-pane active" id="tab1">
		      <label>Login:</label> <strong>M.ADJ</strong> 
		      <label>Password:</label><strong>passer</strong>
		    </div>
		    <div class="tab-pane" id="tab2">
		      <label>Login:</label><strong> S.LO</strong>
		      <label>Password:</label><strong>passer</strong>
		    </div>
		    <div class="tab-pane" id="tab3">
		      <label>Login:</label><strong> R.FAYE</strong>
		      <label>Password:</label><strong>passer</strong>
		    </div>
		    <div class="tab-pane" id="tab4">
		      <label>Lien:<a href="ResponsableClasse.php">ICI</a></label>
		      <label>Password:</label><strong>passer</strong>
		    </div>
		  </div>
		</div>
        
          
		        
      </form>
		
    </div> <!-- /container -->


    
    <center>
 <div id="footer">
  <div class="container">
    <p class="muted credit"> Copyright IntraESP 2014 By Tobin Frost @ Supadev </p>  
  </div>
</div>
</center>
<script src="bootstrap/js/jquery-1.11.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>