<?php
include_once 'ConectaBD.php';
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la lógica de negocio de Oferta Educativa
*/
	class OfertaEducativaBO
	{

		//Constructor
		public function __construct()
		{

		}
		//Metodos
		//Obtener oferta Educativa
		public function obtenerOfertaEducativa()
		{
			$bdconectada = new ConectaBD();
			$resultado = array();
			

			$bdconectada->conectar();/*Conectamos la BD*/

			/*Obtenemos las opciones*/
			$query='SELECT nombre FROM tipo';
			$resultado['oEdu'] = $bdconectada->fill($query); 


			//Cerramos la conexion a la bd

			$bdconectada->desconectar();
			return json_encode($resultado);
		}
	}


?>