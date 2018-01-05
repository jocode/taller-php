<?php 
# Ciclo while
// Evalúa la expresión al inicio de cada iteración
$i = 0;
while ($i < 10) {
	# Imprimo los números pares
	if ($i % 2 == 0 and $i != 0){
		echo $i;
	}
	$i++;
	// $i = $i +1;
}

?>