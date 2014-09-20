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
      

    </div>
    
    <br>
        
        
    

<div class="container">

      <form class="form-signin" action="controleur/Authentificate_controller.php?control=vacation" method="POST">
        <h2 class="form-signin-heading">Authentification</h2>
        <p class="text-center text-info">Connection en tant que Responsable de Classe </p>
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