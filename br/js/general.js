$(function(){

	$(document).ready(function(){
		events();
		validateContact();
	});

	$("#li-alimenticios").toggle();
	$("#bt-alimenticios").click(function(){$("#li-alimenticios").toggle()})
	
	$("#li-artesanias").toggle();
	$("#bt-artesanias").click(function(){$("#li-artesanias").toggle()});

	$("#li-recetas").toggle();
	$("#bt-recetas").click(function(){$("#li-recetas").toggle()});

	function events() {
		$("#events").click(function(){
			$(location).attr('href', 'events.php');
		});
	}

	function validateContact() {
		$.validator.addMethod(
	        "regex",
	        function(value, element, regexp) {
	            var re = new RegExp(regexp);
	            return this.optional(element) || re.test(value);
	        },
	        "Please check your input."
		);

		$("#contact-form").validate({
			rules: {
				name: {
					required: true,
					minlength: 2,
					regex: "^[A-ZÑa-zñÑáéóúí ]+$",
				},
				phone: {
					required: true,
					minlength: 7,
					regex: "^[0-9]+$"
				},
				email: {
					required: true,
					email: true,
					regex: "^[^0-9][A-z0-9_\-]*([.][A-z0-9_\-]+)*[@][A-z0-9_\-]+([.][A-z0-9_\-]+)*[.][A-z]{2,4}$"
				},
				query: {
					required: true,
					minlength: 10,
					regex: "^[A-ZÑa-zñÑáéóúí?! ]+$"
				}
			},
			messages: {
				name: {
					required: "Por favor ingrese un nombre.",
					minlength: "El nombre debe tener como minimo 2 caracteres.",
					regex: "El nombre solo puede contener letras"
				},
				phone: {
					required: "Por favor ingrese un telefono.",
					minlength: "El telefono debe tener como minimo 7 digitos.",
					regex: "El telefono solo puede contener numeros."
				},
				email: {
					required: "Por Favor ingrese un email.",
					email: "Por favor ingrese un email valido.",
					regex: "Por favor ingrese un email valido."
				},
				query: {
					required: "Por favor ingrese una consulta",
					minlength: "La consulta debe contener como minimo 10 caracteres.",
					regex:"La consulta solo puede contener letras, numeros, signo de interrogante (?) y signo de admiracion (!)."
				}
			}
		});
	}
				$('#menu a').click(function(e){
					 hideContentDivs();
					 var tmp_div = $(this).parent().index();
					 $('.main div').eq(tmp_div).show();
				  });

				function hideContentDivs(){
					$('.main div').each(function(){
					$(this).hide();});
				}
				hideContentDivs();

});


var Controles = {

};

(function ($, c) {

	c.cnt_selectIdioma = function (element) {
		element.on("click", function(){
		c.requestSelectIdioma($(this).val());
		});
	}

	c.requestSelectIdioma = function (idioma) {
		$("#form_idioma").submit();
	}


	


})(jQuery, Controles);

function init() {

	Controles.cnt_selectIdioma($('.menuIdioma .selectidioma'));

}


$(document).ready(init);
