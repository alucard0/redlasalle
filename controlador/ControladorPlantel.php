
<?php
include_once 'modelo/ConectaBD.php';
include_once 'modelo/PlantelBO.php';

$plantel = new PlantelBO();
$plantel->despliega(0);
?>
