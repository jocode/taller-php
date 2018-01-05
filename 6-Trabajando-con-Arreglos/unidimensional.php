<?php 

// Un arreglo es una variable que permite almacenar más de un dato

#arreglo[posicion-indice]
$variable = "Colombia";
// Chile 	Perú 	Venezuela 	Colombia 	México
//   0 		  1			2			3		  4
# Este arreglo tiene 5 posiciones

// Un arreglo en PHP puede almcacenar distintos tipos de datos
$arreglo = array(12, "Papá", "Perro", true, 87, 23.4);

# sizeof devuelve el largo del arreglo, sizeof() es un alias de la función count()
$largo = count($arreglo);

//echo $arreglo[2];

# Arreglos unidimensionales
for ($i = 0; $i < count($arreglo); $i++){
	echo $arreglo[$i]."<br/>";
}

echo "<hr/>";
foreach ($arreglo as $key => $value){
  echo $key." => ".$value."<br/>";
}


?>