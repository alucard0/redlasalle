<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase que modela la tabla Oferta Educativa
*/
	class OfertaEducativa
	{

		//Atributos
		private $idOferta;
		private $nombre;
		private $categoria;
		

		//Constructor
		public function __construct($idOferta,$nombre,$categoria)
		{
			$this->nombre=$nombre;
			$this->idOferta=$idOferta;
			$this->categoria=$categoria;
		}
		//Metodos
		public function __set($name,$value){
		    if(method_exists($this, $name)){
		      $this->$name($value);
		    }
		    else{
		      // Getter/Setter not defined so set as property of object
		      $this->$name = $value;
		    }
		}

		public function __get($name){
		    if(method_exists($this, $name)){
		      return $this->$name();
		    }
		    elseif(property_exists($this,$name)){
		      // Getter/Setter not defined so return property if it exists
		      return $this->$name;
		    }
		    return null;
		}

	}


?>