<?php
	class PlantelBO{
		//Constructor
		public function __construct(){

		}
		public function despliega(){
			$i = 0;
			
			$bd = new ConectaBD;
			$bd->conectar();
			$query = 'SELECT plantel.nombre, municipio.nombre, estado.nombre, plantel.URL, plantel.Fb FROM plantel, estado, municipio WHERE plantel.FK_Municipio = municipio.PK_Municipio AND municipio.FK_Estado = estado.PK_Estado ORDER BY plantel.Num_Mapa ASC';
			$plantel = $bd->escribir($query);
			while ($fila = mysqli_fetch_row($plantel)){
				if ($i%3 == 0){
					echo "<div class='row'>\n";
				}
				echo "\t<div class=' col-xs-4 col-sm-4'>\n";
				echo "\t\t<p>".$fila[0]."<br><span>".$fila[2].", ".$fila[1]."</span></p>\n";
				echo "\t\t<a href='".$fila[3]."' target='_blank'><span class='glyphicon glyphicon-home'></span></a>\n";
				echo "\t\t<a href='".$fila[4]."' target='_blank' class='fb'><i class='fa fa-facebook-official' aria-hidden='true'></i></a>\n";
				echo "\t</div>\n";
				$i++;
				if ($i%3 == 0){				
				echo "</div>\n";
				}
				
				
			}
			$bd->desconectar();
		}
	}
?>