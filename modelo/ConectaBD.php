<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Clase para conexión a base de datos
*/
	class ConectaBD
	{
		//Atributos
		private $host;
		private $username;
		private $password;
		private $dbname;
		private $port;
		private $mysqli;
		
		//Constructor
		public function __construct()
		{
			$this->host="127.0.0.1";
			$this->username="root";
			$this->password="";
			$this->dbname="red_universidades";
			$this->port="3306";
		}
		//Metodos
		public function conectar()
		{
			$this->mysqli=new mysqli($this->host,$this->username,$this->password,$this->dbname,$this->port);
			
			// Change character set to utf8
			$this->mysqli->set_charset("utf8");
			// Check connection
			if ($this->mysqli->connect_errno) 
			{
   			 	echo "Falló la conexión con MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
			}
		}
		
		public function desconectar()//Recibe un objeto de la clase mysqli
		{
			$this->mysqli->close();
			
		}
		
		public function consulta($query)
		{
			$resultado=$this->mysqli->query($query);
			if($resultado)
			{
				//echo $query."<br>";
				if(is_a($resultado,"mysqli_result"))
				{
					
					return $resultado;//Resultado del select
				}
				return $resultado;//Booleano
			}
			else
				echo " Error Consulta: ".$query."<br><br>".$this->mysqli->error."<br><br>";
		}
		
		public function getMYSQLI()
		{
			return $this->mysqli;
		}

		public function fill($query)
		{
			$result=$this->mysqli->query($query);
			$options = "";
			while($row1 = mysqli_fetch_array($result))
			{
				$options = $options."<option>$row1[0]</option>";	
			} 
			return $options;
		}
		public function escribir($query) {
			$result=$this->mysqli->query($query);
			//echo "<script>console.log( 'Debug Objects: " . $query . "' );</script>";
			return $result;
		}
		public function escapar_datos ($var){
			mysqli_real_escape_string ($this->mysqli , $var);
			return $var;
		}
	}
?>