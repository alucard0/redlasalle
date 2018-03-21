<?php 
include 'header.php';
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Index del micrositio
*/
?>
<section class="container nuestrasUniversidades">
	<div class="col-sm-12">
	<h2 class="titulo">Nuestras universidades <br><span class="mexico">en México</span></h2>

	</div>
	<div class="col-sm-6">
		<p class="contenidoNU">contribuyen al desarrollo y transformación de nuestra sociedad. Cada una es autónoma y su oferta académica responde a las necesidades del contexto geográfico y social.</p>
		<hr class="lineaRoja">
		<?php include 'controlador/ControladorPlantel.php'; ?>		
	</div>
	<div class="col-sm-6">
		<figure>
			<img src="images/contenido/mapa.png" alt="Mapa de red de universidades" class="img-responsive">
		</figure>
	</div>
	<div class="col-sm-12">
		<figure>
				<img src="images/contenido/fotos.png" alt="Foto de las diferentes universidades de La Salle" class="img-responsive">
			</figure>
	</div>
</section>

<section class="container">	
	<?php include 'controlador/ControladorOEdu.php'; ?>
</section>

<?php include 'footer.php';?>
