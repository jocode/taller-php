<?php 

require_once("Conectar.php");
require_once("Helpers.php");

class Usuario extends Conectar {

	private $db;

	public function __construct(){
		$this->db = parent::conectar();
		parent::setNames();
	}

	public function getDatos(){
		$sql = "SELECT id, nombre, telefono, correo, fecha FROM usuarios";

		$datos = $this->db->query($sql);

		$arreglo = array();
		# Recorre cada uno de los registros y los guarda en el arreglo
		while ($registro = $datos->fetch_object()){
			$arreglo[] = $registro;
		}

		return $arreglo;
	}

}

?>