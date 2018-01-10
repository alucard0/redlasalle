<?php 
include 'header.php';
include_once 'modelo/ConectaBD.php';

date_default_timezone_set('America/Monterrey');
$ldate = time();
?>


<section class="container">
	<div class="introduccion">
		<div class="row">
			<div class="col-sm-12">
				<p class="titulo_introduccion2">Iniciar Sesión</p><br>

			</div>
		</div>
	</div>
</section>

<div class="container">
	<form id="lgin" action = "" method = "post" >
		<div class="row">
			<div class="col-sm-6">
				<p class="instrucciones">Usuario: </p>
			</div>
			<div class="col-sm-6">
				<input id="user" type="text" name="user">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<p class="instrucciones">Contraseña: </p>
			</div>
			<div class="col-sm-6">
				<input id="passwd" type="password" name="passwd">
			</div>
		</div>
		<div class="row">
			<input type="submit" class="botonAzul btnEnviar" value="Enviar" id = "send" />
		</div>
	</form>
</div>

<?php
	include_once 'controlador/controladorLogin.php';
?>


<?php include 'footer.php'; ?>