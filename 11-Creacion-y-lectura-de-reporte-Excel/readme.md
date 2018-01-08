## Creación y lectura de Excel

Generalmente es necesario generar reportes en distintos formatos. Uno de los más usados para el manejo de información son las hojas de cálculo. 
En este ejemplo vamos a trabajar con la librería [**PHPExcel**](https://github.com/PHPOffice/PHPExcel), aunque ya esta Obsoleta (Deprecated) trabajaremos con ella, y más adelante se hará una actualización de este ejemplo.

_Ver este post [php-excel una ligera alternativa para PHPExcel](https://medium.com/matrix-developments/php-excel-una-ligera-alternatva-para-phpexcel-f18623356c91)_

## Generar reportes con la librería _PHPExcel_
Luego que descarguemos la librería, la incluimos en nuestro proyecto e incluimos el archivo principal donde lo requiramos.

La clase principal se encuentra en el archivo __PHPExcel.php__, incluimos el archivo e instanciamos la clase para emprezar a darle forma a nuestro archivo.

```php
<?php 

// Incluimos la librería
require_once("PHPExcel.php");

// Instanciamos la clase de la librería
$excel = new PHPExcel();

?>
```

_El ejemplo está en el archivo [crear.php](https://github.com/jocode/taller-php/blob/master/11-Creacion-y-lectura-de-reporte-Excel/crear.php)_


## Leer archivos excel con _PHPExcel_
Esta librería es muy útil, además de generar archivos en __.xls__ permite leer los datos que las hojas de cálculo tengan.

Para leer los datos desde archivo, inlcluir los archivos:
- PHPExcel.php
- PHPExcel/Reader/Excel2007.php 

Luego instanciar la clase __PHPExcel_Reader_Excel2007__ y usar los métodos que se ven en el siguiente ejemplo 

```php
<?php 

# Incluimos los archivos
require_once('PHPExcel.php');
require_once('PHPExcel/Reader/Excel2007.php');

$object_reader = new PHPExcel_Reader_Excel2007();
# Cargamos el archivos que vamos a leer
$object_php_excel = $object_reader->load("usuarios.xlsx");
# Obtenemos las filas del excel
$object_php_excel->setActiveSheetIndex(0);
$filas = $object_php_excel->setActiveSheetIndex(0)->getHighestRow();

?>
```

_El ejemplo completo está en el archivo [leer.php](https://github.com/jocode/taller-php/blob/master/11-Creacion-y-lectura-de-reporte-Excel/leer.php)_

De esta manera podemos imprimir los datos en el navegador, o bien podemos guardarlos en una base de datos.