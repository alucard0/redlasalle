<?php
	class PlantelBO
	{

		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function despliega()
		{	
			$bd = new ConectaBD;
			$bd->conectar();
					
			$query = 'SELECT nombre, PK_Plantel FROM plantel ORDER BY nombre ASC';
			$nombrePlantel = $bd->escribir($query);
					

			while ($filaPlantel = mysqli_fetch_row($nombrePlantel)){
				echo "<option value=".$filaPlantel[1].">".$filaPlantel[0]."</option>\n";
			}		
			$bd->desconectar();
		}
	}
?>