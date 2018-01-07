<!DOCTYPE html>
<html>
<head>
	<title>Leer TXT</title>
</head>
<body>
	<?php 

	// Con esto leemos la información y lo guarda como arreglos en la variable datos, cada línea la toma como una posición del arreglo
	$datos = file('datos.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	
	for ($i=0; $i < sizeof($datos); $i++) { 
		$campos = explode(" ;", $datos[$i]);
		for ($j=0; $j < count($campos); $j++) { 
			echo $campos[$j].'<br/>';
		}
		echo "<hr/>";
	}
	?>
</body>
</html>