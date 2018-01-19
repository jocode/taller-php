<?php 

session_start();
/**
*   Para borar cada una de las variables de sesion
*	unset($_SESSION['id']);
*/
// Borra todas las sesiones
session_destroy();
header("Location: index.php");

?>