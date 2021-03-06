<?php
session_start();

require_once ('../vue/Document.class.php');

require_once ('../lib/autoload2.inc.php');

if (isset($_SESSION['idAgent']) ) {

	$a= new Agent($_SESSION['idAgent']);
}

$Calendrier = "/* initialize the calendar
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
                // the last `true` argument determines if the event 'sticks' (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendrier').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the 'remove after drop' checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the 'Draggable Events' list
                    $(this).remove();
                }
                
            }
        });";

$doc  = new Document("Calendrier",$Calendrier,"../MonCss/fullcalendar.css","../MonJs/MaConfigurationCalendrier.js");


$doc->userLevel = $a->getLevel();

$doc->begin();

$doc->header($a->__get("nom"));


$doc->Alert("success", "Bravo", "Vous vous �tes connect� avec succ�s");

$doc->beginRow();

include_once ('../Calendrier.php');

$doc->endRow();

$doc->embedScript("../MonJs/moment.min.js");
$doc->embedScript("../MonJs/jquery.min.js");
$doc->embedScript("../MonJs/jquery-ui.custom.min.js");
$doc->embedScript("../MonJs/fullcalendar.js");
$doc->embedScript("../MonJs/lang-all.js");
$doc->embedScript("../MonJs/MaConfigurationCalendrier.js");
$doc->embedScript("../MonJs/jquery.metisMenu.js");
$doc->embedScript("../MonJs/MonJs.js");
$doc->beginScript();

echo $Calendrier;

$doc->endScript();

$doc->end();