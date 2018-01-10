<?php
	class OfertaBO
	{
		//Constructor
		public function __construct()
		{

		}
		//Metodos
		public function insertarOferta($datos_oferta)
		{
			$bdconectada = new ConectaBD();
			$bdconectada->conectar();
			$datos_oferta->nombre = $bdconectada->escapar_datos ($datos_oferta->nombre);

			$query = 'INSERT INTO O_Edu (nombre, FK_Tipo) VALUES ("'.$datos_oferta->nombre.'",(SELECT PK_Tipo FROM tipo WHERE nombre = "'.$datos_oferta->tipo.'"))';
			$bdconectada->escribir($query);
			
			$j = 0;
			$id = "0";
			for ($i=0;$i<$datos_oferta->totalPlantel;$i++){
				do {
					$aux = substr ($datos_oferta->idPlantel,$j,1);
					$id = $id.$aux;
					$j++;
					
				}while (strncmp ($aux,"  ",1) != 0);
				$aux = "0";
				$query = 'INSERT INTO Plantel_O_Edu (FK_Plantel, FK_O_Edu) VALUES ("'.$id.'", (SELECT O_Edu.PK_O_Edu FROM O_Edu, Tipo WHERE O_Edu.nombre = "'.$datos_oferta->nombre.'" AND O_Edu.FK_Tipo = Tipo.PK_Tipo AND Tipo.nombre = "'.$datos_oferta->tipo.'") )';
				$bdconectada->escribir($query);
				$id = "0";
			}
			
			$bdconectada->desconectar();
		}
		//Guardar registro de aspirante

		//Eliminar registros de aspirantes
	}


?>