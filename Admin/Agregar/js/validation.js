/*
jQuery.validator.setDefaults({
	debug: true,
	success: "valid"
});


		
$( "#myform" ).validate({
  rules: {
	Nombre: {
		required: true
	}
   }
});
*/

/*Funcion para inicializar la oferta educativa*/
jQuery(function($){
  $.ajax({
      url: "controlador/controladorObtenOfertaEducativa.php",
      type: "POST",
      success: function (data) {
          var result = $.parseJSON(data);
          $("#select_g1").html(result.oEdu);

      }
  });
});

//Funcion para cerrar sesion
jQuery(function($){
	$('.btnCerrarSesion').on('click', function (ev) {
		window.location.href = "logout.php";   	
	});
});

//Funcion para seleccionar plantel
$(document).ready(function() {
		$('.js-example-basic-multiple').select2();
	});

/*Funcion para Seleccionar el tipo de curso*/
jQuery(function($){
  $('.btnEnviar').on('click', function (ev) {
    /*Obtener los valores del formulario*/
    var nombre=$("#cmpNombre").val();
    console.log(nombre);
    var tipo=$('#select_g1').select2('data')[0].text;
    console.log(tipo);
	var plantel=$('#SelectPlantel').select2('data');
	var totalplantel = plantel.length;
	var i = 0;
	var idPlantel = 0;
	while (i<totalplantel){
		idPlantel = idPlantel+plantel[i].id;
		idPlantel = idPlantel + " "	;
		i++;
	}
	console.log(idPlantel);
	console.log(totalplantel);
	
    //if($('#myform').valid())
    //{
	  $('.btnEnviar').disabled = true;
      $.ajax({
        url: "controlador/controladorEscribirOfertaEducativa.php",
        type: "POST",
        data: {"nombre":nombre,"tipo":tipo,"idPlantel":idPlantel,"totalPlantel":totalplantel},
        success: function (data) {
          /*Mostrar mensaje de enviado*/
			console.log('Success');
			document.getElementById("myform").reset();
			$("#Ventana_Exito").modal('toggle');
			$('.btnEnviar').disabled = false;
			
        },
		error: function (data) {
			console.log('Error');
		}
      });
    //}

  });
});





