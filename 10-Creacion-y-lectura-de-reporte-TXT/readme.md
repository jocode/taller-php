## Archivos TXT
Los archivos TXT son archivos de texto plano. En sistemas operativos como Windows los utilizan para almacenar configuraciones de aplicaciones.
Son muy útiles porque son sencillos de leer, son livianos y no tienen límites para almacenar información.

Son muy sencillos crearlos y no les dan mucha carga al servidor por lo que son bien eficientes trabajar con este tipo de documentos.


- **fopen** Es una función de PHP que permite crear archivos de texto plano y crear otros tipos de archivos. Recibe dos parámetros.
	- El nombre del archivo o ruta de archivo 
	- El modo de trabajo con ese archivo 

[Ver documentación de __fopen__](http://php.net/manual/es/function.fopen.php)

Los archivos se crean en el servidor, y uno le incluye la ruta donde quiere que se guarde.


## Crear archivo TXT 

Para crear el archivo de texto plano, usamos tres funciones de php.
- **fopen()** Creamos el archivo 
- **fputs()** Colocamos información en el archivo 
- **fclose()** Cerramos el archivo

```php
<?php 

// Creamos el archivo
$archivo = fopen("datos.txt", "w");

// Escribimos en el archivo
for ($i=0; $i < 10; $i++) { 
	fputs($archivo, "México_$i ; Chile_$i ; Colombia_$i ; Venezuela_$i ; Bolivia_$i");
	fputs($archivo, "\n");
}

// Cerramos el archivo
fclose($archivo);

?>
```	

## Comprimir archivos en formato .zip
En este caso usamos la librería zipfile para comprimir el archivo 

```php
<?php 

require_once("zipfile.php");
$nombre = "reporte_".date("h:i:s")."_".date("d-m-Y").".zip";

$zipfile = new zipfile();
$zipfile->add_file(implode("", file("datos.txt")), "datos.txt");
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=$nombre");

echo $zipfile->file();

?>

```

## Leer datos de TXT 
Para leer los datos, usamos la función file(), y le pasamos por parámetro el archivo y el tipo de lectura para éste.
Ésta función devuelve la información en un arreglo, que lo guardamos en la variable **$datos**. Cada posición del arreglo la toma por el salto de línea del archivo.

```php
<?php 

	$datos = file('datos.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	
	for ($i=0; $i < sizeof($datos); $i++) { 
		$campos = explode(" ;", $datos[$i]);
		for ($j=0; $j < count($campos); $j++) { 
			echo $campos[$j].'<br/>';
		}
		echo "<hr/>";
	}

?>
```