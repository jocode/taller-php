<?php 

require_once("Conectar.php");

class Usuario extends Conectar {

	private $db;
	private $usuarios;

	public function __construct(){
		$this->db = parent::conectar();
		parent::setNames();
	}

	/***
	* Cuando se construye una paginación, se carga la consulta dinámicamente
	*/
	public function getDatos($sql){

		$this->usuarios = null;
		$this->usuarios = array();
		$datos = $this->db->query($sql);

		$arreglo = array();
		# Recorre cada uno de los registros y los guarda en el arreglo
		while ($registro = $datos->fetch_object()){
			$this->usuarios[] = $registro;
		}

		return $this->usuarios;
	}

}

?>