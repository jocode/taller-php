<?php 

# Creación de arreglo al vuelo

$arreglo[] = 23;
$arreglo[] = "Papá";
$arreglo[] = 45;
$arreglo[] = "Perro";
$arreglo[] = true;

foreach ($arreglo as $key => $value) {
	echo "$key => $value <br/>";
}

?>