<?php 

// Clase, declarar
class miClase 
{
	// Atributos o propiedades
	private $nombre;
	private $correo;
	private $edad;

	// Constructor
	public function __construct(){
		$this->nombre = "Johan Mosquera";
	}

	//Métodos públicos o privados
	public function getNombre(){
		return $this->nombre;
	}

	private function miManzanaVerde(){

	}

	//Métodos estáticos
}

//Instanciar un objeto (Clase)
$objeto = new miClase();
echo $objeto->getNombre();

?>