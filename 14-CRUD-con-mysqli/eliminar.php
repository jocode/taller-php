<?php 
require_once("clases/Usuario.php");
$usuario = new Usuario();

if (!isset($_GET["id"]) or !is_numeric($_GET["id"])){
	die("Error 404");
}

$datos = $usuario->getDatosPorId($_GET["id"]);

if (count($datos) == 0){
	die("error 404");
}

$usuario->delete();
header("Location: index.php?m=3");


?>