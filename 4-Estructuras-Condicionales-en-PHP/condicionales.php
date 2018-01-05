<?php 

# Asignación
$numero1 = 56;
$numero2 = 78;
$numero3 = 12;

// Condicionales
#Verse la tabla de la verdad

# Condición simple
if ( $numero1 > $numero2 ){
	echo "Se cumple la condición.";
} else {
	echo "No se cumple la condición.";
}
# exit; // Detiene la ejecución del script

die("<hr/> Aquí se detiene la ejecución del script."); 
/**
die() -> Detiene la ejecución del script mostrando un texto en pantalla
*/

# Condición múltiple
if ($numero1>$numero2){
	echo "Se cumple la primera<br/>";
} else if ($numero1<$numero2){
	echo "Se cumple la segunda<br/>";
} else if ($numero1==$numero2){
	echo "Los dos son iguales<br/>";
} else {
	echo "No se cumple nada<br/>";
}

// Control de flujo (Switch)
switch ($numero1) {
	case 56:
		echo "Es igual a 56<br/>";
		break;

	case 45:
		echo "Es igual a 45<br/>";
		break;
	
	default:
		echo "No es igual a nada";
		break;
}

?>