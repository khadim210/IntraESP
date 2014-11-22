<?php 

session_start();

include('Connect.php');

include('MonFrameWork.php');




?>

<html>
<head>
  <title>Gestion Formation-IntraESP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="MonCss/MonStyle.css" rel="stylesheet">
    <link href="MonCss/fullcalendar.css" rel="stylesheet">
    
 
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
              <li class="">
                <a href="GestionDepartement.php">Paramètrage</a>
              </li>
              <li class="dropdown active">
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
    
    <div class="span12">
      


      <div class="hero-unit">

<div class="block"> <!-- Debut  Block -->
  <div class="navbar navbar-inner block-header">
    <div class="muted pull-left">Calendrier</div>
    <div class="pull-right">
      

      </div>
  </div>
      <div class="block-content collapse in">
        <div class="span2">
          <div id="external-events">
            <h5> Evénements</h5>
                                    <div class='external-event'>Evénement1</div>
                                    <div class='external-event'>Evénement2</div>
                                    <div class='external-event'>Evénement3</div>
                                    <div class='external-event'>Evénement4</div>
                                    <div class='external-event'>Evénement5</div>
                                    <div class='external-event'>Evénement6</div>
                                    <div class='external-event'>Evénement7</div>
                                    <div class='external-event'>Evénement8</div>
                                    <div class='external-event'>Evénement9</div>
                                    <div class='external-event'>Evénement10</div>
                                    <div class='external-event'>Evénement11</div>
                                    <div class='external-event'>Evénement12</div>
                                    <div class='external-event'>Evénement13</div>
                                    <div class='external-event'>Evénement14</div>
                                    <div class='external-event'>Evénement15</div>
                                    <p>
                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>Annuler Affectations</label>
                                    </p>
          </div>
        </div>
        <div class="span10"> <!-- Debut  Calendrier -->
            <div id="calendrier">
            </div>
        </div> <!-- Fin  Calendrier -->
        
                
          
          </div>
          


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
<script src='MonJs/moment.min.js'></script>
<script src='MonJs/jquery.min.js'></script>
<script src='MonJs/jquery-ui.custom.min.js'></script>
<script src='MonJs/fullcalendar.js'></script>
<script src='MonJs/lang-all.js'></script>
<script src='MonJs/MaConfigurationCalendrier.js'></script>

<script src="MonJs/jquery.metisMenu.js"></script>
<script src="MonJs/MonJs.js"></script>
<script type="text/javascript">
/* initialize the calendar
        -----------------------------------------------------------------*/
        
        $('#calendrier').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            lang:'fr',
            events:[
              <?php include ('Event.php'); ?> 
            ]                 
           
            ,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date) { // this function is called when something is dropped
            
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendrier').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            }
        });
<?php  ?>
</script>
</body>
</html>