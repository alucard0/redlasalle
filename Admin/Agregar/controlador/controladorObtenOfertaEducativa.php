<?php
include_once '../modelo/OfertaEducativaBO.php';

$ofertaEducativaLogica = new OfertaEducativaBO();


/*Devolvemos los datos de la  oferta Educativa*/
echo $ofertaEducativaLogica->obtenerOfertaEducativa();

?>