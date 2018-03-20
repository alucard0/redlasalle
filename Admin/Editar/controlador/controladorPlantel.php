<?php
include_once 'modelo/ConectaBD.php';
include_once 'modelo/PlantelBO.php';

$PlantelLogica = new PlantelBO();

$PlantelLogica->despliega();
?>