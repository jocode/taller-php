<?php 

class Padre 
{

	private $nombre;
	private $apellido;

	public function __construct($nombre, $apellido){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

}

# Herencia simple
class Hija extends Padre {

	public function __construct($nombre, $apellido){
		# Inyección de dependencias
		parent::__construct($nombre, $apellido);
	}

}

?>