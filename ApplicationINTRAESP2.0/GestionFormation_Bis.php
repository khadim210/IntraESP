<html>
<head>
	<title>Gestion Formation-IntraESP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
 
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
          <li class="active">
            <a href="#">
            <i class="icon-chevron-right"></i> Formations
            </a>
            <ul class="">
              <li>
                <a href="SaisieMatiere.php">
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

  <!-- Debut  Accordion -->

        <div class="accordion" id="Accord_Departement">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac_Departement1">
                Departement1
              </a>
            </div>
            <div id="Ac_Departement1" class="accordion-body collapse" >
              <div class="accordion-inner">
                <ul>
                <li>Formation1</li>
                <li>Formation2</li>
                <li>Formation3</li>
                <li>Formation4</li>
                <li>Formation5</li>
                </ul>
                


              </div>
            </div>
          </div>

          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac_Departement2">
                Departement2
              </a>
            </div>
            <div id="Ac_Departement2" class="accordion-body collapse" >
              <div class="accordion-inner">
                <ul>
                <li>Formation1</li>
                <li>Formation2</li>
                <li>Formation3</li>
                <li>Formation4</li>
                <li>Formation5</li>
                </ul>

              </div>
            </div>

          </div>

          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac_Departement3">
                Departement3
              </a>
            </div>
            <div id="Ac_Departement3" class="accordion-body collapse" >
              <div class="accordion-inner">
                <ul>
                <li>Formation1</li>
                <li>Formation2</li>
                <li>Formation3</li>
                <li>Formation4</li>
                <li>Formation5</li>
                </ul>

              </div>
            </div>

          </div>

          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac_Departement4">
                Departement4
              </a>
            </div>
            <div id="Ac_Departement4" class="accordion-body collapse" >
              <div class="accordion-inner">
                <ul>
                <li>Formation1</li>
                <li>Formation2</li>
                <li>Formation3</li>
                <li>Formation4</li>
                <li>Formation5</li>
                </ul>

              </div>
            </div>

          </div>


          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#Accord_Departement" href="#Ac_Departement5">
                Departement5
              </a>
            </div>
            <div id="Ac_Departement5" class="accordion-body collapse" >
              <div class="accordion-inner">
                <ul>
                <li>Formation1</li>
                <li>Formation2</li>
                <li>Formation3</li>
                <li>Formation4</li>
                <li>Formation5</li>
                </ul>

              </div>
            </div>

          </div>







        </div>
          
  <!-- Fin  Accordion -->      

    <button class="btn btn-primary pull-right" data-toggle="modal" href="#nvFormation"> <i class="icon-plus"></i> Ajouter Département </button>

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
<script src="bootstrap/js/jquery-1.11.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>