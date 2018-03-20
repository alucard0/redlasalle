<?php
include_once '../modelo/Oferta.php';
include_once '../modelo/OfertaBO.php';
include_once '../modelo/ConectaBD.php';

$oferta = new Oferta($_POST);
echo "console.log( 'Debug Objects: " . $oferta->idPlantel. "' );";
$ofertaLogica = new OfertaBO();

$ofertaLogica->insertarOferta($oferta);
?>