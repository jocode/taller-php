<?php 

// Arreglo [fila][cololumna]

$arreglo[0][0] = "Colombia";
$arreglo[0][1] = "Venezuela";
$arreglo[0][2] = "Brasil";
$arreglo[0][3] = "Argentina";
$arreglo[0][4] = "Chile";
$arreglo[0][5] = "Ecuador";

$arreglo[1][0] = "México";
$arreglo[1][1] = "Panamá";
$arreglo[1][2] = "Bolivia";
$arreglo[1][3] = "Perú";
$arreglo[1][4] = "Paraguay";
$arreglo[1][5] = "Uruguay";

$arreglo[2][0] = "Estados Unidos";
$arreglo[2][1] = "Costa Rica";
$arreglo[2][2] = "Bahamas";
$arreglo[2][3] = "Haití";
$arreglo[2][4] = "Cuba";
$arreglo[2][5] = "Puerto Rico";

#Recorro las filas
echo "Ciclo for<hr/>";
for ($i = 0; $i< count($arreglo); $i++){
	# Recorro las columnas
	for ($j = 0; $j < count($arreglo[$i]); $j++){
		echo $arreglo[$i][$j]."<br/>";
	}
}
echo "<hr/> Ciclo foreach<hr/>";
foreach ($arreglo as $value){
	foreach ($value as $valor) {
		echo $valor."<br/>";
	}
}

?>