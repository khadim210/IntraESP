<?php 
session_start();

include('Connect.php');

 function SetRow($tab1,$tab2,$tab3,$tab4,$tab5,$tab6,$tab7,$tab8,$tab9)
{
  
  for ($i=0; $i <count($tab1) ; $i++) { 
    echo "<tr class=''>"."<td>".$tab1[$i]."</td>"."<td>".$tab2[$i]."</td>"."<td>".$tab3[$i]."</td>"."<td>".$tab4[$i]."</td>"."<td>".$tab5[$i]."</td>"."<td>".$tab6[$i]."</td>"."<td>".$tab7[$i]."</td>"."<td>".$tab8[$i]."</td>"."<td>".$tab9[$i]."</td>"."</tr>";  
  }
}

$NomAgent = array();
$PrenomAgent = array();
$MatriculeAgent = array();
$FonctionAgent = array();
$TypeAgent = array();
$GradeAgent = array();
$StructureAgent = array();
$TelAgent = array();
$EmailAgent = array();

$req = $bdd->query("SELECT nom, prenom, matricule, Fonction, libTypeAgent,libGrade,libStructure,telephone,email FROM `agents` a, `structure` s, `typeagent` t,`grades` g WHERE a.idStructure = s.idStructure  AND a.idTypeAgent = t.idTypeAgent AND a.idGrade = g.idGrade") or die(print_r($rep->errorInfo()));
     
      while ($donne = $req->fetch()) {

        array_push($NomAgent, $donne['nom']);
        array_push($PrenomAgent, $donne['prenom']);
        array_push($MatriculeAgent, $donne['matricule']);
        array_push($FonctionAgent, $donne['Fonction']);
        array_push($TypeAgent, $donne['libTypeAgent']);
        array_push($GradeAgent, $donne['libGrade']);
        array_push($StructureAgent, $donne['libStructure']);
        array_push($TelAgent, $donne['telephone']);
        array_push($EmailAgent, $donne['email']);



        
      }
      $req->closeCursor();

  

?>
<html>
<head>
  <title>Gestion Formation-IntraESP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    <link href="MonCss/DT_bootstrap.css" rel="stylesheet">
 
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
              
              <li class="">
                <a href="TableauDebord.php">Tableau de Bord</a>
              </li>
              <li class="active">
                <a href="">Paramètrage</a>
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
          <p class="navbar-text pull-right">  <i class="icon-user"></i>  Mr/Madame <button class=""><i class="icon-off"></i></button> </p>
          
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
            Paramètrage
          </li>

          <li class="active">
            <a href="#">
            <i class="icon-chevron-right"></i> Agents
            </a>
            <ul class="nav nav-list">
              <li ><a href="ConfigPERS.php?status=permanent">P.E.R.S (Permanent)</a></li>
              <li><a href="ConfigPERS.php?status=vacataire">P.E.R.S (Vacataire)</a></li>
              <li class=""><a href="ConfigPATS.php?status=permanent">P.A.T.S (Permanent)</a></li>
              <li class=""><a href="ConfigPATS.php?status=vacataire">P.A.T.S (Vacataire)</a></li>
            </ul>
          </li>
          <li class="">
            <a href="#">
            <i class="icon-chevron-right"></i> Banques
            </a>
            
          </li>

          <li class="active">
            <a href="#">
            <i class="icon-chevron-right"></i> Structures
            </a>
            <ul class="">
              <li>
                <a href="">
             Département
            </a>
                      <ul class="">
                        <li>
                          <a href="">
                          Programmes
                      </a>
                        </li>
                        <li>
                          <a href="">
                       Matières
                      </a>
                        </li>

                      </ul>

              </li>
              <li>
                <a href="">
              Laboratoires
                </a>
              </li>

              <li>
                <a href="">
              Services
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

          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Archivage
            </a>
          </li>
          <li>
            <a href="#">
            <i class="icon-chevron-right"></i> Paramètrage Avancé
            </a>
            <ul>
              <li>
                <a href=""> Montant Seuil
              </a>
              </li>
              <li>
                <a href=""> Année Académique
                </a>
              </li>
              <li>
                <a href=""> Status
                </a>
              </li>
            </ul>
          </li>



        </ul>

      </div>

    </div> <!--Fin Span3 de navigation -->
    <div class="span9">
      


      <div class="hero-unit">

<div class="block"> <!-- Debut  Block -->
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Agents</div>
    <div class="pull-right">
<button class="btn btn-primary " data-toggle="modal" href="#nvFormation" title="Ajouter Département"> <i class="icon-plus"></i> Ajouter  </button> 
 <button class="btn btn-danger" data-toggle="modal" href="#DeleteDepartement" title="Supprimer Département"> <i class="icon-trash"></i> Supprimer  </button>
  <button class="btn btn-warning" data-toggle="modal" href="#UpdateDepartement" title="Modifier Département"> <i class="icon-pencil"></i> Modifier  </button>

      </div>
  </div>
      <div class="block-content collapse in">
        <div class="span12">
        
                                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="Tableau">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>Fonction</th>
                        <th>Type</th>
                        <th>Grade</th>
                        <th>Structure</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php SetRow($NomAgent,$PrenomAgent,$MatriculeAgent,$FonctionAgent,$TypeAgent,$GradeAgent,$StructureAgent,$TelAgent,$EmailAgent);  ?>
                      
                    </tbody>
                  </table>
      </div>
  </div>
      

                
          

                    
                    
          

    

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

<!-- Début Modal Suppression Département  -->

<div class="modal hide fade" role="dialog" id="DeleteDepartement" aria-labelledby="DeleteDepartementLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="DeleteDepartementLabel">Supprimer Département</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                  <div class="control-group">
                  <label class="control-label" for="NvCycleFormation">Département</label>
                  <div class="controls">
                  
                  <select id="DeletedDepartement" >

                    <option id="dep1">Département 1</option>
                    <option id="dep2">Département 2</option>
                    <option id="dep3">Département 3</option>
                    <option id="dep4">Département 4</option>
                    <option id="dep5">Département 5</option>
                    <option id="dep6">Département 6</option>

                  </select>
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression Département  -->


<!-- Début Modal Modifier Département  -->

<div class="modal hide fade" role="dialog" id="UpdateDepartement" aria-labelledby="UpdateDepartementLabel" aria-hidden="true">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">&times;</button>
            <h3 id="UpdateDepartementLabel">Modifier Département</h3>
          </div>
          

        <div class="modal-body">
                
              <form class="form-horizontal">
                  
                

                  <div class="control-group">
                  <label class="control-label" for="NvCycleFormation">Département à Modifier</label>
                  <div class="controls">
                  
                  <select id="UpdatedDepartement" >

                    <option id="dep1">Département 1</option>
                    <option id="dep2">Département 2</option>
                    <option id="dep3">Département 3</option>
                    <option id="dep4">Département 4</option>
                    <option id="dep5">Département 5</option>
                    <option id="dep6">Département 6</option>

                  </select>
                  </div>
                  </div>

                  <div class="control-group">
                  <label class="control-label" for="NvNomDepartement">Nouveau Nom Département</label>
                  <div class="controls">
                  <input type="text" id="NvNomDepartement" size="12" placeholder="Nouveau Département" value="Nom Département">
                  </div>
                  </div>
                  
                  

                  
          </div>

          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-warning" data-dismiss="modal">Mettre à jour</button>
    
          </form>
          </div>
        
      

    </div><!-- Fin Modal Suppression Département  -->






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
  <!-- Fin  Block -->
</div>
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
<script src="MonJs/jquery.dataTables.js"></script>


<script src="MonJs/DT_bootstrap.js"></script>

</body>
</html>