<html>
<head>
	<title>Matières -IntraESP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.11.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
</head>
<body>
  <header>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
          <img class="" src="MonImage/logoIntraESP.png" width="120px">
          <p class="navbar-text pull-right">  Bonjour  Mr/Madame <button class=""><i class="icon-off"></i></button> </p>
          
        </div>
      </div>
    </div>
    </header>
    <br>
    <br>

    <div class="container">
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Bravo!</strong>
        Bienvenue , vous vous êtes authentifier avec succés !
    </div>

    </div>
    
    <br>
        
    

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header">
            Gestion Formation
          </li>
          <li >
            <a href="#">
            <i class="icon-chevron-right"></i> Formations
            </a>
            <ul class=" nav nav-list">
              <li class="active">
                <a href="#">
             Matières
            </a>
              </li>

            </ul>
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Responsables Pédagogiques
            </a>
          </li>

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Affectations
            </a>
          </li>



        </ul>

      </div>

    </div> <!--Fin Span3 de navigation -->
    <div class="span9">
      <div class="hero-unit">
        <div class="row">
          <div class="span9">
            <div class="accordion" div="Accord_formation">

               <!-- Debut Accordeon1-->


              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_formation" href="#1Formation">
                    Formation1 <li class="icon-chevron-right"></li>
                  </a>
                </div>
                <div id="1Formation" class="accordion-body collapse in" >
                  <div class="accordion-inner">
                    Liste des Matières1 blabla blajegfsdgfsdgfhjdf
                    dfdfsfsdfsdfsjkhdkjgfdjgfjfgdgfdfuykdsgkfhdfq
                    dfdfdfsgfyuotefoafebvvjvkhifhdifuydfdsfdfdfd
                  </div>
                </div>
              </div>

              <!-- Fin Accordeon1-->

              <!-- Debut Accordeon1-->


              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_formation" href="#2Formation">
                    Formation2 <li class="icon-chevron-right"></li>
                  </a>
                </div>
                <div id="2Formation" class="accordion-body collapse" >
                  <div class="accordion-inner">
                    Liste des Matières1 blabla bla
                  </div>
                </div>
              </div>

              <!-- Fin Accordeon1-->

              <!-- Debut Accordeon1-->


              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_formation" href="#3Formation">
                    Formation3 <li class="icon-chevron-right"></li>
                  </a>
                </div>
                <div id="3Formation" class="accordion-body collapse" >
                  <div class="accordion-inner">
                    Liste des Matières1 blabla bla
                  </div>
                </div>
              </div>

              <!-- Fin Accordeon1-->

            </div>
          </div>
          

        </div>
    <button class="btn btn-primary pull-right" data-toggle="modal" href="#nvFormation"> <i class="icon-plus"></i> Ajouter une Formation </button>

    <!-- Debut Modal nvFormation -->
    <div class="modal hide fade" role="dialog" id="nvFormation" aria-labelledby="nvFormationLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="nvFormationLabel">Nouvelle Formation</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="NomFormation"> Formation</label>
                  <div class="controls">
                  <input type="text" id="NomFormation" size="12" placeholder="Formation">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="CycleFormation">Cycle</label>
                  <div class="controls">
                  
                  <select id="CycleFormation" >

                    <option>Cycle 1</option>
                    <option>Cycle 2</option>
                    <option>Cycle 3</option>
                    <option>Cycle 4</option>
                    <option>Cycle 5</option>
                    <option>Cycle 6</option>

                  </select>
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="inputEmail">Heure </label>
                  <div class="controls">
                  
                    <input class="span2" id="nbHeure" type="number">
                    
                  
                  </div>
                  </div>
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Creer</button>
    
          </form>
          </div>
        
      

    </div> <!-- Fin Modal nvFormation -->

          <!-- Début Modal Mis à jour  -->

<div class="modal hide fade" role="dialog" id="UpdateFormation" aria-labelledby="UpdateFormationLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="UpdateFormationLabel">Mis à jour Formation</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  <div class="control-group">
                  <label class="control-label" for="NvNomFormation"> Formation</label>
                  <div class="controls">
                  <input type="text" id="NvNomFormation" size="12" placeholder="Nouvelle Formation" value="NomFormation">
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" for="NvCycleFormation">Cycle</label>
                  <div class="controls">
                  
                  <select id="NvCycleFormation" >

                    <option>Cycle 1</option>
                    <option>Cycle 2</option>
                    <option>Cycle 3</option>
                    <option>Cycle 4</option>
                    <option>Cycle 5</option>
                    <option>Cycle 6</option>

                  </select>
                  </div>
                  </div>
                  <div class="control-group">
                  <label class="control-label" >Heure </label>
                  <div class="controls">
                  
                    <input class="span2" id="NvnbHeure" type="number" value="30">
                    
                  
                  </div>
                  </div>
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Mettre à jour</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Mis à jour  -->


              <!-- Début Modal Suppression  -->

<div class="modal hide fade" role="dialog" id="DeleteFormation" aria-labelledby="DeleteFormationLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="DeleteFormationLabel">Suppression Formation</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                  <h4>Voulez vous Supprimer Cette Formation</h4>
                 
           </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression  -->




    </div> <!-- hero unit -->
    </div> <!-- fin span9-->

  </div>
</div>

      
<center>
 <div id="footer">
  <div class="container">
    <p class="muted credit"> Copyright IntraESP 2014 By Tobin Frost @ Supadev </p>
  </div>
</div>
</center>
<script type="text/javascript">
var Formations = document.getElementsByClassName('formation');


  for (var i = 0; i < Formations.length; i++) {
   //Formations[i].popover(true,true,'right',false,'click');
   //alert(Formations[i]+" "+i);
  };

</script>
<script type="text/javascript" src="MonJs/MonJs.js"></script>
<script src="bootstrap/js/jquery-1.11.1.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>