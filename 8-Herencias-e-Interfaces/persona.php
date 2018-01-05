<?php 
require_once("implements/interface.php");

class Persona implements interfaceEjemplo {

	private $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre(){
		return $this->nombre;
	}

}

$persona = new Persona("Mi Nombre");
echo $persona->getNombre();

?>