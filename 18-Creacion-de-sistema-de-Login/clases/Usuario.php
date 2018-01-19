<?php 

require_once("Conectar.php");
require_once("Helpers.php");

class Usuario extends Conectar {

	private $db;

	public function __construct(){
		$this->db = parent::conectar();
		parent::setNames();
	}

	public function getLogin($correo, $pass){
		$sql = "SELECT id, nombre, correo, pass FROM usuario
		WHERE correo='".$correo."' and 
		pass='".$pass."'";

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