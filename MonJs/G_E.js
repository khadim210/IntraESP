/**
 * 
 */

$(document).ready(function(){
  $(".update").click(function(){
    $(".action").attr("value","update");
  });
  
  $(".demission").click(function(){
	    $(".action").attr("value","delete");
	  });
  
});