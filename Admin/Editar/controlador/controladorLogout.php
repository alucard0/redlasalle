<?php
	//Abrir Secion
	session_start();
	
	//Conectar a la BD
	$bdconectada = new ConectaBD();
	$bdconectada->conectar();
	
	//Guardar en log el cierre de secion
	$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Logout", "'.$_SESSION['id'].'")';
	$bdconectada->escribir($query);

	//Desconectar BD
	$bdconectada->desconectar();
	
	if ( $_SESSION['ldate'] < time()){
		echo '<p class="titulo_introduccion2">Su Seción Ha Expirado</p><br>';
		
	}
	
	//Cerrar Secion
	session_destroy();
	
	
?>