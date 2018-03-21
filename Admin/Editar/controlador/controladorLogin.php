<?php
	//Abrir Secion
	session_start();
	ini_set('$_SESSION.cookie_httponly', 1);
		
	//Conectar a la BD
	$bdconectada = new ConectaBD();
	$bdconectada->conectar();
		
	//Boton Presionado
	if (isset($_POST['user'])) {
		echo "<script>console.log( 'Button' );</script>";
		$usr = $_POST['user'];
		$pass = $_POST["passwd"];

		//Escapar datos para prevenir una inyeccion de 1er nuvel
		$usr = $bdconectada->escapar_datos ($usr);
		$pass = $bdconectada->escapar_datos ($pass);
		$pass = hash('sha512', $pass);
			
		//Escribir querry
		$query = 'SELECT ID FROM login WHERE username = "'.$usr.'" AND password = "'.$pass.'"';
		echo "<script>console.log( 'Debug Objects: " . $query . "' );</script>";
			
		//Enviar querry a la BD;
		$id = $bdconectada->escribir($query);
	
		if (mysqli_num_rows($id)==1){
			$fila = $id -> fetch_row();
			$_SESSION['id'] = $fila[0];
			$_SESSION['username'] = $usr;
			$_SESSION['ldate'] = 1800+$ldate;
					
			//Guardar Login en los logs de la base de datos
			$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Login", "'.$fila[0].'")';
			$bdconectada->escribir($query);
			$bdconectada->desconectar();
			header ('Location: admin.php');
			die();

		}
		else {
			echo '<p class="instrucciones">Error: Usuario y/o Contraseña Inválido(s)</p>';
				$_SESSION['id'] = NULL;
				$_SESSION['username'] = NULL;
				$_SESSION['ldate'] = 0;
			}
			$bdconectada->desconectar();
		}
?>