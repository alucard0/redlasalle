<?php
	class OEduBO
	{

		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function despliega($tipo)
		{	
			$bd = new ConectaBD;
			$bd->conectar();
					
			$query = 'SELECT PK_O_Edu, nombre FROM o_edu WHERE FK_Tipo = '.$tipo.' ORDER BY nombre ASC';
			$nombreCarrera = $bd->escribir($query);
					
			$query = 'SELECT PK_Plantel FROM plantel ORDER BY Nombre_Corto ASC';
			$plantel = $bd->escribir($query);
					
			while ($filaCarrera = mysqli_fetch_row($nombreCarrera)){
				echo "<tr>\n";
				echo '<td>'.$filaCarrera[1]."</td>\n";
				$query = 'SELECT Plantel.PK_Plantel FROM Plantel, Plantel_O_Edu WHERE Plantel.PK_Plantel = Plantel_O_Edu.FK_Plantel AND Plantel_O_Edu.FK_O_Edu = '.$filaCarrera[0].' ORDER BY Plantel.Nombre_Corto ASC';
				$carreras = $bd->escribir($query);
				$filaCarreraPlantel = mysqli_fetch_row($carreras);
							
				mysqli_data_seek ( $plantel , 0 );
				while ($filaPlantel = mysqli_fetch_row($plantel)) {
					if ($filaCarreraPlantel){
						if ($filaCarreraPlantel[0] == $filaPlantel[0]){
							echo "\t<td><span class='glyphicon glyphicon-ok-sign'></span></td>\n";
							$filaCarreraPlantel = mysqli_fetch_row($carreras);
						}
						else {
							echo "\t<td></td>\n";
						}
					}
					else {
						echo "\t<td></td>\n";
					}
				}
						echo "</tr>\n";
			}		
			$bd->desconectar();
		}
	}
?>