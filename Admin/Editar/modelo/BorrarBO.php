<?php

	class BorrarBO
	{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function BorrarBD($Fechas)
		{
			session_start();
			
			//Conectar a la BD de logs
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			$usr = $bdconectada->escapar_datos($_SESSION['id']);
			$errorFlag = 0;
	
			//Checar que los valores que llegan son validos, si no, registarlo en bitacora.
			if (!is_numeric($Fechas->AnioInicio) || !is_numeric($Fechas->AnioFin) || !is_numeric($Fechas->MesInicio) || !is_numeric($Fechas->MesFin)){
				//Generar Error
				$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Non Numumeric Value","'.$usr.'")';
				$errorFlag = 1;
			}
			else {
				if ($Fechas->MesInicio < 1 || $Fechas->MesInicio > 12){
					//Generar Error
					$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Mes Inicio Invalido","'.$usr.'")';
					$errorFlag = 1;
				}
				if ($Fechas->MesFin < 1 || $Fechas->MesFin > 12){
					//Generar Error
					$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Mes Fin Invalido","'.$usr.'")';
					$errorFlag = 1;
				}
				if ($Fechas->AnioInicio < 1000 || $Fechas->AnioInicio > 9999){
					//Generar Error
					$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Año Inicio Invalido","'.$usr.'")';
					$errorFlag = 1;
				}
				if ($Fechas->AnioFin < 1000 || $Fechas->AnioFin > 9999){
					//Generar Error
					$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Año Fin Invalido","'.$usr.'")';
					$errorFlag = 1;
				}
				if ($Fechas->AnioInicio > $Fechas->AnioFin){
					//Generar Error
					$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Año Inicio > Año Fin","'.$usr.'")';
					$errorFlag = 2;
				}
				if ($Fechas->AnioInicio == $Fechas->AnioFin && $Fechas->MesInicio > $Fechas->MesFin){
				//Generar Error
					$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Delete Error: Mes Inicio > Mes Fin","'.$usr.'")';
					$errorFlag = 2;
				}
			}
	
		if ($errorFlag == 0){
		$Fechas->MesInicio = $bdconectada->escapar_datos($Fechas->MesInicio);
		$Fechas->MesFin = $bdconectada->escapar_datos($Fechas->MesFin);
		$Fechas->AnioInicio = $bdconectada->escapar_datos($Fechas->AnioInicio);
		$Fechas->AnioFin = $bdconectada->escapar_datos($Fechas->AnioFin);
			
		//Guargar en bitacora
		$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Deleted: '.$Fechas->MesInicio.'/'.$Fechas->AnioInicio.'-'.$Fechas->MesFin.'/'.$Fechas->AnioFin.'","'.$usr.'")';
		$bdconectada->escribir($query);
		
		//Checar si existen registros a eliminar
		$query = "SELECT id FROM aspirante WHERE registro >= '".$Fechas->AnioInicio."-".$Fechas->MesInicio."-01 00:00:00' AND registro <= '".$Fechas->AnioFin."-".$Fechas->MesFin."-31 23:59:59'";
		$numReg = $bdconectada->escribir($query);
		$numReg = mysqli_num_rows($numReg);
		
		//Si existen registros
		if ($numReg > 0){
			$query = "DELETE FROM aspirante WHERE registro >= '".$Fechas->AnioInicio."-".$Fechas->MesInicio."-01 00:00:00' AND registro <= '".$Fechas->AnioFin."-".$Fechas->MesFin."-31 23:59:59'";
			$bdconectada->escribir($query);
		}
		
		echo '<p class="titulo_introduccion2">Se han eliminando '.$numReg.' registros.</p>';
	}
	else {
		$bdconectada->escribir($query);
		echo '<p class="titulo_introduccion2">Error eliminando registro(s).</p>';
		if ($errorFlag == 2){
			echo '<p class="titulo_introduccion2">Fecha de inicio > Fecha de Fin.</p>';
		}
	}
	//Cerrar BD
	$bdconectada->desconectar();
	
			
		}
	}

?>
