<?php

class IniciarTabla{
	//Constructor
	public function __construct(){

	}
	//Metodos
	public function despliega($tipo){
		$bd = new ConectaBD;
		$bd->conectar();
		$query = 'SELECT nombre FROM tipo WHERE PK_Tipo = '.$tipo;
		$nombres = $bd->escribir($query);
		$fila = mysqli_fetch_row($nombres);
		
		echo "<div class='table-responsive'>\n";  
		echo "<h3>".$fila[0]."</h3>\n";        
		echo "<table class='table ofertaEducativa'>\n";
		echo "<thead>\n";
		echo "<tr>\n";
		echo "<th>OFERTA EDUCATIVA LA SALLE <br><br><i>Los nombres mostrados en la matriz de oferta educativa son ilustrativos, pueden variar en cada institución de acuerdo a las características del plan de estudios.</i></th>\n";
 
		$query = 'SELECT Nombre_Corto FROM plantel ORDER BY Nombre_Corto ASC';
		$nombres = $bd->escribir($query);
		while ($fila = mysqli_fetch_row($nombres)) {
			echo "<th>".$fila[0]."</th>\n";
		}
		$bd->desconectar();
				
		echo "</tr>\n";
		echo "</thead>\n";
		echo "<tbody>\n";
		
	}
	public function cerrarTabla () {
		echo "</tbody>\n";
	    echo "</table>\n";
		echo "</div>\n";
	}
}
?>