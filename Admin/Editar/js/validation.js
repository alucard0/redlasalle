
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

//Funcion para rellenar las carrera
jQuery(function($){
	$('#select_g1').val().onchange=alert($('#select_g1').val());
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
   
    var tipo=$('#select_g1').select2('data')[0].text;
    console.log(tipo);
	
	
    //if($('#myform').valid())
    //{
	  $('.btnEnviar').disabled = true;
	  
	  
	  
	  //window.location.replace ()
    //}

  });
});





