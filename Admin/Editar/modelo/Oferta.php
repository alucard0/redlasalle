<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
	class Oferta
	{

		//Atributos
		private $nombre;
		private $tipo;
		private $idPlantel;
		private $totalPlantel;
		
		//Constructor
		public function __construct($post)
		{
			$this->nombre = $post['nombre'];
			$this->tipo = $post['tipo'];
			$this->idPlantel = $post['idPlantel'];
			$this->totalPlantel = $post['totalPlantel'];
			
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