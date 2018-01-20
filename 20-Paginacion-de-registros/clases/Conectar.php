<?php 

abstract class Conectar {


	private $mysqli;

	public function conectar(){
		$this->mysqli = new mysqli('localhost', 'root', '', 'paises');
		return $this->mysqli;
	}

	# Este método configurar el formato de cotejamiento de conexión a la base de datos
	public function setNames(){
		return $this->mysqli->query(" SET NAMES 'utf8'");
	}

}

?>