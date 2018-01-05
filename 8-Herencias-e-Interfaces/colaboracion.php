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

# Colaboración de objetos
class Hija {

  	private $padre;

  	public function __construct($nombre, $apellido){
  		$this->padre = new Padre($nombre, $apellido);
  	}

  	public function getNombreHija(){
  		return $this->padre->getNombre();
  	}
}

?>