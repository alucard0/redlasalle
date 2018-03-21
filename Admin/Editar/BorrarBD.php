<?php 
include 'header.php';
include_once 'modelo/ChecaLogin.php';
?>

<section class="container">
	<div class="introduccion">
		<form id="DelForm">
			<p class="titulo_introduccion2">Eliminar Desde:</p>
			<div class="row">
				<div class="col-sm-6">
					<p class="instrucciones">Mes [MM]: </p>
				</div>
				<div class="col-sm-6">
					<input id="MesIni" type="text" name="MesIni" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p class="instrucciones">Año [AAAA]: </p>
				</div>
				<div class="col-sm-6">
					<input id="AnioIni" type="text" name="AnioIni" required>
				</div>
			</div>
			<p class="titulo_introduccion2">Hasta:</p>		
			<div class="row">
				<div class="col-sm-6">
					<p class="instrucciones">Mes [MM]: </p>
				</div>
				<div class="col-sm-6">
					<input id="MesFin" type="text" name="MesFin" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p class="instrucciones">Año [AAAA]: </p>
				</div>
				<div class="col-sm-6">
					<input id="AnioFin" type="text" name="AnioFin" required>
				</div>
			</div>
		</form>	
		
		<br>
		<div class="row">
			
			<form action = "" method = "post">
			<input type="button" class="botonAzul btnCancelarEliminar" value="Cancelar" name = "Cancelar" />
			<input type="button" class="botonAzul btnAceptarEliminar" value="Aceptar" name = "Aceptar"/>
			
			</form>
		</div>
			
	</div>
</section>

<!-- Ventana Warning -->
<div class="modal fade" id="Ventana_Warning" role="dialog">
    <div class="modal-dialog">
    
      <!-- Contenido Ventana -->
      <div class="modal-content">
        <div class="modal-header">
			<h4 class="modal-title">Cuidado</h4>
        </div>
		<div class="modal-body">
			<p>Esta acción es irreversible.</p>
			<p>¿Esta seguro de que desea proseguir?</p>
		</div>
        <div class="modal-footer">
			<button type="button" id = "btnModalAceptarEliminar" data-dismiss="modal">Aceptar</button>
			<button type="button" id = "btnCancelar" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Ventana Exito -->
<div class="modal fade" id="Ventana_Eleminado" role="dialog">
    <div class="modal-dialog">
    
      <!-- Contenido Ventana -->
      <div class="modal-content">
        <div class="modal-header">
			<h4 class="modal-title">Éxito</h4>
        </div>
		<div class="modal-body">
			<p>Se han eliminado exitosamente los registros.</p>
		</div>
        <div class="modal-footer">
			<button type="button" id = "btnModalAceptarEliminarExito" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
      
    </div>
</div>

<!-- Ventana Falla -->
<div class="modal fade" id="Ventana_Error_Eliminacion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Contenido Ventana -->
      <div class="modal-content">
        <div class="modal-header">
			<h4 class="modal-title">Éxito</h4>
        </div>
		<div class="modal-body">
			<p>Se han eliminado exitosamente los registros.</p>
		</div>
        <div class="modal-footer">
			<button type="button" id = "btnModalAceptarEliminarFail" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
      
    </div>
  </div>

  
<?php include 'footer.php';?>