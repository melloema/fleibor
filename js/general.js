$(function(){

	$(document).ready(function(){
		$("#events").click(function(){
			alert("hola");
			$(location).attr('href', 'events.php');
		});
	});

	$("#li-alimenticios").toggle();
	$("#bt-alimenticios").click(function(){$("#li-alimenticios").toggle()})
	
	$("#li-artesanias").toggle();
	$("#bt-artesanias").click(function(){$("#li-artesanias").toggle()});

	$("#li-recetas").toggle();
	$("#bt-recetas").click(function(){$("#li-recetas").toggle()});

});
