<?php
	class DesplegarOferta{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function despliega()
		{	
			$bd = new ConectaBD;
			$bd->conectar();		
			$query = 'SELECT PK_Tipo FROM tipo';
			$tipos = $bd->escribir($query);
			$bd->desconectar();
		
			while ($filaTipo = mysqli_fetch_row($tipos)){
				$tabla = new IniciarTabla;
				$tabla->despliega($filaTipo[0]);
				$oferta = new OEduBO();
				$oferta->despliega($filaTipo[0]);
				$tabla->cerrarTabla();
			}
		
		}
	}
?>