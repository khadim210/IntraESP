<html>
<head>
	<title>Acceuil-IntraESP</title>
	<meta charset="utf-8">
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
      <div class="alert alert-error">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
        <strong>Oups!</strong>
        Erreur d'authentification, Réessayez !
    </div>
    <div class="alert alert-block">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Erreur!</strong>
        Vous avez oubliez une ou deux cases,Réessayez ! 
    </div>

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