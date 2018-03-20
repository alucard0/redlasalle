<?php 
include 'header.php';

?>
<h1 class="titulo">Registro de Oferta Educativa<br><span class="chevron"></span><!---<span>Recibe información</span>--></h1>

<section class="container-fluid bg_gray">

	<!--Inicia container-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			 	<!--Registro-->
			 	<br>
			 	<h2><span class="chevron"></span> Registro</h2>
			 	<hr class="lineaGaleria" style="width: 5.5cm;">
			</div>
		</div>
		<form id="myform" >
			<div class="row">
				<div class="col-sm-6">
					<p class="instrucciones">Nombre<span class="asteriscoRojo">*</span>: </p>
				</div>
				<div class="col-sm-6">
					<select class="js-example-basic-multiple" name="plantel" multiple="multiple" id='SelectPlantel'>
						<?php include "controlador/controladorPlantel.php"?>
					</select>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-sm-6">
					<p class="instrucciones">Plantel(es)<span class="asteriscoRojo">*</span>: </p>
				</div>
				<div class="col-sm-6">
					<select class="js-example-basic-multiple" name="plantel" multiple="multiple" id='SelectPlantel'>
						<?php include "controlador/controladorPlantel.php"?>
					</select>
				</div>
			</div>

			<div class="row">
				<input name="btnEnviar" type="button" class="botonAzul btnEnviar" value="Enviar">
			</div>
		</form>
	</div>
	<!--Fin de container-->
</section>

<!-- Ventana Exito -->
<div class="modal fade" id="Ventana_Exito" role="dialog">
    <div class="modal-dialog">
    
      <!-- Contenido Ventana -->
      <div class="modal-content">
        <div class="modal-header">
			<h4 class="modal-title">Registro Correcto.</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
      
    </div>
  </div>

  
<?php include 'footer.php';?>
