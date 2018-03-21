<?php

	class ExcelBO
	{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function generarExcel($ArcivoExcel)
		{
			//Abrir Cookie de sesion
			session_start();
			
			//Conectar a la BD
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			
			//Guardar en vitacora
			$usr = $bdconectada->escapar_datos($_SESSION['id']);
			$query = 'INSERT INTO action_log (Accion, User_ID) VALUES ("Descargar BD", "'.$usr.'")';
			$bdconectada->escribir($query);
			
			//Mandar a traer la base de datos
			$query = 'SELECT aspirante.nombre, aspirante.celular, aspirante.correo, aspirante.registro, aspirante.periodo, oferta_educativa.nombre FROM aspirante, oferta_educativa WHERE oferta_educativa.id = aspirante.oferta_educativa ORDER BY aspirante.oferta_educativa ASC, aspirante.periodo DESC, aspirante.registro ASC';
			$query = $bdconectada->escribir($query);
			
			//Escribir encabezados en el archivo Excel
			$ArcivoExcel->seleccionar_hoja (0);
			$ArcivoExcel->escribir_dato('A1', 'Nombre');
			$ArcivoExcel->escribir_dato('B1', 'Teléfono');
			$ArcivoExcel->escribir_dato('C1', 'Correo Electrónico');
			$ArcivoExcel->escribir_dato('D1', 'Fecha de Registro');
			$ArcivoExcel->escribir_dato('E1', 'Periodo');
			$ArcivoExcel->escribir_dato('F1', 'Oferta Educativa');
			
			//Escribir la informacion en el archivo Excel
			$i = 2;
			while ($fila = mysqli_fetch_row($query)) {
				$ArcivoExcel->escribir_dato('A'.$i, $fila[0]);
				$ArcivoExcel->escribir_dato('B'.$i, $fila[1]);
				$ArcivoExcel->escribir_dato('C'.$i, $fila[2]);
				$ArcivoExcel->escribir_dato('D'.$i, $fila[3]);
				$ArcivoExcel->escribir_dato('E'.$i, $fila[4]);
				$ArcivoExcel->escribir_dato('F'.$i, $fila[5]);
				$i ++;
			}
			
			//Ajustar el ancho de las columnas de Excel
			$ArcivoExcel->auto_ajustar_columna ('A');
			$ArcivoExcel->auto_ajustar_columna ('B');
			$ArcivoExcel->auto_ajustar_columna ('C');
			$ArcivoExcel->auto_ajustar_columna ('D');
			$ArcivoExcel->auto_ajustar_columna ('E');
			$ArcivoExcel->auto_ajustar_columna ('F');
			
			//Guardar Archivo de Excel
			$ArcivoExcel->guardar_archivo('../index.xlsx');
			
			/* liberar el conjunto de resultados */
			mysqli_free_result($query);
		
			//Cerrat BD
			$bdconectada->desconectar();
			
		}
	}

?>
