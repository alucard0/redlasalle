<?php
include_once '../modelo/Borrar.php';
include_once '../modelo/BorrarBO.php';
include_once '../modelo/ConectaBD.php';


$FechasBorrar = new Borrar($_POST);
$Borrador = new BorrarBO();

$Borrador->BorrarBD($FechasBorrar);
?>