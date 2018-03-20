
<?php
//Incluir BD;
include_once 'ConectaBD.php';
date_default_timezone_set('America/Monterrey');
$ldate = time();

//Checar Secion abierta
session_start();
	if (is_null($_SESSION['id'])){
		header("Location: login.php");
		die();	
	}
	else {
		//Checar la validez de la secion
		$bdconectada = new ConectaBD();
		$bdconectada->conectar();
		$usr = $bdconectada->escapar_datos ($_SESSION['username']);
		
		$query = 'SELECT ID FROM login WHERE username = "'.$usr.'"';
		$id = $bdconectada->escribir($query);
		$bdconectada->desconectar();
		
		if (mysqli_num_rows($id)!=1){
			header("Location: login.php");	
		}	
	}
	//Cerrar secion si lleva mas de 1/2 hora abierta
	if ( $_SESSION['ldate'] < time()){
		header("Location: logout.php");
		die();
	}
?>