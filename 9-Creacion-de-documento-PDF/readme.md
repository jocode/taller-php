
# Reportes en PDF

Generalmente cuando trabajamos en desarrollo web debemos mostrar los datos en distintos formatos, no necesariamente en formatos en DOM, por ejemplo formatos en PDF, Excel, TXT, Word, etc.

En este caso vamos a trabajar con la librería [mpdf](http://www.mpdf1.com/mpdf/index.php)

Esta librería permite implementar estilos css para el diseño del PDF.

## Librería mPDF 
Esta biblioteca permite crear archivos PDF usando html como definición de la estructura del texto.
1. Descargamos la librería desde su página oficial
2. Incluimos la librería en nuestro proyecto
3. Instanciamos la clase mPDF en el archivo que vamos a generar el pdf pasando como parámetro la palabra __c__ 
4. Usamos el método WriteHTML() y le pasamos como parámetro la variable con el contenido del html 
5. Usamos el método Output(), para generar el pdf
6. Detemos la ejecución del script con la palabra reservada exit de PHP. 


Ejemplos 
* [PDF básico](https://github.com/jocode/taller-php/blob/master/9-Creacion-de-documento-PDF/basico.php)
* [PDF con Imágen](https://github.com/jocode/taller-php/blob/master/9-Creacion-de-documento-PDF/con_imagen.php)
* [PDF Dinámico](https://github.com/jocode/taller-php/blob/master/9-Creacion-de-documento-PDF/dinamico.php)
* [PDF con hoja de estilos](https://github.com/jocode/taller-php/blob/master/9-Creacion-de-documento-PDF/css.php)

Para agregar el código html por trozos, podemos usar la concatenación de la variable, de esta manera 
```php
<?php
$html = '';
$html.= '<table border="1">';

for ($i = 0; $i < 10; $i++){
	$html.= '
		<tr>
			<td>El valor de la i es:</td>
			<td>'.$i.'</td>
		</tr>
	';
}

$html.= '</table>';
?>
```

Para usar la librería de mPDF con __*estilos*__

```php
<?php
require_once("mpdf/mpdf.php");

$mpdf = new mPDF('c');

$html = "<h1>Contenido del html</h1>";

// Cargar los estilos
$estilos = file_get_contents("public/bootstrap/css/bootstrap.css");
$mpdf->WriteHTML($estilos, 1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

?>
```

## Bootstrap
Para usar bootstrap como herramienta frontend para generación de documentos PDF, es mejor descargar los archivos e incluirlos en el proyecto, para evitar demoras en la carga  usando el CDN que provee bootstrap. 

Cuando descargamos los archivos de bootstrap, vienen con muchos directorios, pero lo quue nos interesa están dentro de la carpeta __dist__, aquí encontramos las carpetas css y js, aunque debemos tener en cuenta que los PDF no interpretan el JavaScript.