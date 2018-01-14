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

	public function getDatosPorId($id){
		$sql = "SELECT id, nombre, telefono, correo, fecha FROM usuarios
				WHERE id='".$id."'";

		$datos = $this->db->query($sql);

		$arreglo = array();
		# Recorre cada uno de los registros y los guarda en el arreglo
		while ($registro = $datos->fetch_object()){
			$arreglo[] = $registro;
		}

		return $arreglo;
	}

	public function insertar(){
		$sql = "
			INSERT into usuarios VALUES 
			(null, '".$_POST["nombre"]."', '".$_POST["correo"]."', '".$_POST["telefono"]."', '".$_POST["fecha"]."');
		";
		$this->db->query($sql);
	}

	public function update(){
		$sql = "
			UPDATE usuarios SET 
			nombre='".$_POST["nombre"]."',
			correo='".$_POST["correo"]."',
			telefono='".$_POST["telefono"]."',
			fecha='".$_POST["fecha"]."'
			WHERE id='".$_POST["id"]."';
		";
		$this->db->query($sql);
	}

	public function delete(){
		$sql = "
			DELETE from usuarios
			WHERE id='".$_GET["id"]."';
		";
		$this->db->query($sql);
	}

}

?>