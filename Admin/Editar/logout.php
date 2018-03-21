<?php 
include 'header.php';
include_once 'modelo/ConectaBD.php';

date_default_timezone_set('America/Monterrey');
?>


<section class="container">
	<div class="introduccion">
		<div class="row">
			<div class="col-sm-12">
				<p class="titulo_introduccion2">Sesión cerrada</p><br>
				

<?php include_once "controlador/controladorLogout.php";?>
				<a href="login.php">Para vover a entrar, presione aquí.</a> 
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>