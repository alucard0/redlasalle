<?php
//Incluir PHPExcel
include_once 'Classes/PHPExcel.php';
include_once 'Classes/PHPExcel/Writer/Excel2007.php';

	class Excel
	{

		//Atributos
		private $Creador;
		private $ModificadoPor;
		private $Titulo;
		private $Asunto;
		private $Descripcion;
		private $objPHPExcel;

		//Constructor
		public function __construct($post)
		{
			//Crear Hoja de datos
			$this->objPHPExcel = new PHPExcel();
			
			//Obtener Propiedades
			$this->Creador = $post['Creador'];
			$this->ModificadoPor = $post['ModificadoPor'];
			$this->Titulo = $post['Titulo'];
			$this->Asunto = $post['Asunto'];
			$this->Descripcion = $post['Descripcion'];
			
			//Definir Propiedades
			$this->objPHPExcel->getProperties()->setCreator($this->Creador);
			$this->objPHPExcel->getProperties()->setLastModifiedBy($this->ModificadoPor);
			$this->objPHPExcel->getProperties()->setTitle($this->Titulo);
			$this->objPHPExcel->getProperties()->setSubject($this->Asunto);
			$this->objPHPExcel->getProperties()->setDescription($this->Descripcion);
			
			
		}
		//Metodos
		public function __set($name,$value){
		    if(method_exists($this, $name)){
		      $this->$name($value);
		    }
		    else{
		      /* Getter/Setter not defined so set as property of object*/
		      $this->$name = $value;
		    }
		}

		public function __get($name){
		    if(method_exists($this, $name)){
		      return $this->$name();
		    }
		    elseif(property_exists($this,$name)){
		      /* Getter/Setter not defined so return property if it exists*/
		      return $this->$name;
		    }
		    return null;
		}
		
		public function seleccionar_hoja ($num){
			if (!is_numeric($num)){
				return NULL;
			}
			else {
				$this->objPHPExcel->setActiveSheetIndex($num);
			}
			return 1;
		}
		
		public function escribir_dato ($celda, $dato){
			$this->objPHPExcel->getActiveSheet()->SetCellValue($celda, $dato);
		}

		public function auto_ajustar_columna ($columna) {
			//Ajustar el ancho de las columnas de Excel
			$this->objPHPExcel->getActiveSheet()->getColumnDimension($columna)->setAutoSize(TRUE);
		}
		
		public function guardar_archivo ($location) {
		//Guardar Archivo
			$objWriter = new PHPExcel_Writer_Excel2007($this->objPHPExcel);
			$objWriter->save($location);
		}		
	}


?>