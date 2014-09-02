<?php 

    require_once('/lib/autoload.inc.php');

    $a = new Agent(180);
    

    if ($a->isPats()) {

      $pats = new Pats();  

    }

  
?>

<html>
<head>
	<title>Gestion Formation-IntraESP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    <link href="morris/morris.css" rel="stylesheet">
 
</head>
<body>
  <header>

<div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <img class="" src="MonImage/logoIntraESP.png" width="100px">
              </li>
              
              <li class="active">
                <a href="TableauDeBord.php">Tableau de Bord</a>
              </li>
              <li class="">
                <a href="ConfigAgent.php">Paramètrage</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Outils <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-calendar"></i> Calendrier</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" href="3">Agents <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href=""><i class="icon-user"></i> Liste des Agents</a>
                  </li>
                  <li>
                    <a href=""><i class="icon-search"></i> Recherche</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  Mr/Madame <?php echo $a->__get('nom'); ?> <button class=""><i class="icon-off"></i></button> </p>
          
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
      <div class="block">
        <div class="navbar navbar-inner block-header">
          <div class="muted pull-left">Statistiques</div>

        </div>
        <div class="block-content collapse in">

          <div class="span6">
            <div id="hero-area" style="height: 250px; width:500px; position:relative;">

            </div>
          </div>
          <div class="span6">
            <div id="hero-bar" style="height:250px; width: 500px; position:relative;"></div>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
 
  <div class="span6"> <!--  Début Span6 -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Agents
        </div>
        <div class="pull-right">
          <span class="badge badge-info"><?php echo $a->count(); ?></span>
        </div>
      </div>
      <div class="block-content collapse in">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Matricule
              </th>
              <th>Nom
              </th>
              <th>Prénom
              </th>
              <th>Heures Effectués
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Id1</td>
              <td>Nom1</td>
              <td>Prenom1</td>
              <td>Heure1</td>
            </tr>
            <tr>
              <td>Id2</td>
              <td>Nom2</td>
              <td>Prenom2</td>
              <td>Heure2</td>
            </tr>
            <tr>
              <td>Id3</td>
              <td>Nom3</td>
              <td>Prenom3</td>
              <td>Heure3</td>
            </tr>
            <tr>
              <td>Id4</td>
              <td>Nom4</td>
              <td>Prenom4</td>
              <td>Heure4</td>
            </tr>
            
            


          </tbody>
        </table>
      </div>
    </div>
  </div> <!--  Fin Span6 -->

  <div class="span6"> <!--  Début Span6 -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">P.A.T.S
        </div>
        <div class="pull-right">
          <span class="badge badge-info"><?php echo $pats->count(); ?></span>
        </div>
      </div>
      <div class="block-content collapse in">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Matricule
              </th>
              <th>Nom
              </th>
              <th>Prénom
              </th>
              <th>Département
              </th>
              <th>Formation
              </th>
              <th>Heures Effectués
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Id1</td>
              <td>Nom1</td>
              <td>Prenom1</td>
              <td>Département1</td>
              <td>Formation1</td>
              <td>Heure1</td>
            </tr>
            <tr>
              <td>Id2</td>
              <td>Nom2</td>
              <td>Prenom2</td>
              <td>Département2</td>
              <td>Formation2</td>
              <td>Heure2</td>
            </tr>
            <tr>
              <td>Id3</td>
              <td>Nom3</td>
              <td>Prenom3</td>
              <td>Département3</td>
              <td>Formation3</td>
              <td>Heure3</td>
            </tr>
            <tr>
              <td>Id4</td>
              <td>Nom4</td>
              <td>Prenom4</td>
              <td>Département4</td>
              <td>Formation4</td>
              <td>Heure4</td>
            </tr>
            
            


          </tbody>
        </table>
      </div>
    </div>
  </div> <!--  Fin Span6 -->



</div> <!--  Fin Row-fluid -->


    </div> <!--  Fin 2em container -->


<div class="container-fluid">
      <div class="row-fluid">
 
  <div class="span6"> <!--  Début Span6 -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Banque
        </div>
        <div class="pull-right">
          <span class="badge badge-info">25</span>
        </div>
      </div>
      <div class="block-content collapse in">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Code Banque
              </th>
              <th>Libellé
              </th>
              <th>Montant à Virer
              </th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Id1</td>
              <td>Nom1</td>
              <td>Montant1</td>
              
            </tr>
            <tr>
              <td>Id2</td>
              <td>Nom2</td>
              <td>Montant2</td>
              
            </tr>
            <tr>
              <td>Id3</td>
              <td>Nom3</td>
              <td>Montant3</td>
              
            </tr>
            <tr>
              <td>Id4</td>
              <td>Nom4</td>
              <td>Montant4</td>
              
            </tr>
            
            


          </tbody>
        </table>
      </div>
    </div>
  </div> <!--  Fin Span6 -->

  <div class="span6"> <!--  Début Span6 -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Responsable Pédagogique
        </div>
        <div class="pull-right">
          <span class="badge badge-info">120</span>
        </div>
      </div>
      <div class="block-content collapse in">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Matricule
              </th>
              <th>Nom
              </th>
              <th>Prénom
              </th>
              <th>Département
              </th>
              <th>Formation
              </th>
              <th>Status Configuration
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Id1</td>
              <td>Nom1</td>
              <td>Prenom1</td>
              <td>Département1</td>
              <td>Formation1</td>
              
              <td> <center><span class="label label-warning"> <li class="icon-time"></li></span></center></td>
            </tr>
            <tr>
              <td>Id2</td>
              <td>Nom2</td>
              <td>Prenom2</td>
              <td>Département2</td>
              <td>Formation2</td>
              <td> <center><span class="label label-success"> <li class="icon-ok"></li></span></center></td>
            </tr>
            <tr>
              <td>Id3</td>
              <td>Nom3</td>
              <td>Prenom3</td>
              <td>Département3</td>
              <td>Formation3</td>
              <td> <center><span class="label label-warning"> <li class="icon-time"></li></span></center></td>
            </tr>
            <tr>
              <td>Id4</td>
              <td>Nom4</td>
              <td>Prenom4</td>
              <td>Département4</td>
              <td>Formation4</td>
              <td> <center><span class="label label-success"> <li class="icon-ok"></li></span></center></td>
            </tr>
            
            


          </tbody>
        </table>
      </div>
    </div>
  </div> <!--  Fin Span6 -->



</div> <!--  Fin Row-fluid -->


    </div> <!--  Fin 3em container -->

    

 

      
<center>
 <div id="footer">
  <div class="container">
    <p class="muted credit"> Copyright IntraESP 2014 By Tobin Frost @ Supadev </p>
  </div>
</div>
</center>
<script src="bootstrap/js/jquery-1.11.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="morris/morris.js"></script>
<script src="MonJs/raphael-min.js"></script>
<script>
// Morris Area Chart
Morris.Area({
            element: 'hero-area',
            data: [
                {period: '2014-10', Formation1: 2666, Formation2: null},
                {period: '2014-02', Formation1: 2778, Formation2: 2294},
                {period: '2014-09', Formation1: 4912, Formation2: 1969},
                {period: '2014-03', Formation1: 3767, Formation2: 3597},
                {period: '2014-04', Formation1: 6810, Formation2: 1914},
                {period: '2014-01', Formation1: 5670, Formation2: 4293},
                {period: '2014-08', Formation1: 4820, Formation2: 3795},
                {period: '2014-09', Formation1: 15073, Formation2: 5967},
                {period: '2014-06', Formation1: 10687, Formation2: 4460},
                {period: '2014-05', Formation1: 8432, Formation2: 5713}
            ],
            xkey: 'period',
            ykeys: ['Formation1', 'Formation2'],
            labels: ['Formation Initial', 'Formation Payante'],
            lineWidth: 2,
            hideHover: 'auto',
            lineColors: ["#81d5d9", "#a6e182"]
          });

 // Morris Bar Chart
        Morris.Bar({
            element: 'hero-bar',
            data: [
    {x: 'Département1', Heure_Prévu: 30, Heure_en_Cours: 20},
    {x: 'Département2', Heure_Prévu: 20, Heure_en_Cours: null},
    {x: 'Département3', Heure_Prévu: 12, Heure_en_Cours: 2},
    {x: 'Département4', Heure_Prévu: 200, Heure_en_Cours: 64}
  ],
  xkey: 'x',
  ykeys: ['Heure_en_Cours', 'Heure_Prévu'],
  labels: ['Heure en Cours', 'Heure Prévu'],
  stacked: true,
  barRatio: 0.4,
  xLabelMargin: 10,
  hideHover: 'auto',
});


</script>
</body>
</html>