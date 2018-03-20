<?php
	
class Borrar
	{

		//Atributos
		private $MesInicio;
		private $AnioInicio;
		private $MesFin;
		private $AnioFin;
	
		//Constructor
		public function __construct($post)
		{

			
			//Obtener Propiedades
			$this->MesInicio = $post['MI'];
			$this->AnioInicio = $post['AI'];
			$this->MesFin = $post['MF'];
			$this->AnioFin = $post['AF'];		
			
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
	}


?>