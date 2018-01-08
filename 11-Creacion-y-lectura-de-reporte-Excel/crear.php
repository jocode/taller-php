<?php 

// Incluimos la librería
require_once("PHPExcel.php");

// Instanciamos la clase de la librería
$excel = new PHPExcel();

$excel->getProperties()
	  ->setTitle("Excel")
	  ->setDescription("Descripción");

// Inicializa la creación del documento
$sheet = $excel->getActiveSheet();
// Le damos un título a la hoja
$sheet->setTitle("Reporte");

# Creamos las columnas del encabezado de nuestro excel
$sheet->setCellValue("A1", "ID");
$sheet->setCellValue("B1", "Nombre");
$sheet->setCellValue("C1", "E-Mail");
$sheet->setCellValue("D1", "Teléfono");

# Creamos las filas con los registros de nuestro excel
for ($i=2; $i < 10 ; $i++) { 
	$sheet->setCellValue("A".$i, $i);
	$sheet->setCellValue("B".$i, "Nombre con ñandú");
	$sheet->setCellValue("C".$i, "email{$i}@correo.com");
	$sheet->setCellValue("D".$i, "Teléfono_".$i);
}

# Configuramos el archivo para su salida
header("Content-Type: application/vnd.ms-excel");
$nombre = "reporte_".date("Y-m-d H:i:s");
header("Content-Disposition: attachment; filename=\"$nombre.xls\"");
header("Cache-Control: max-age=0");
$writer=PHPExcel_IOFactory::createWriter($excel,"Excel5");
$writer->save("php://output");	

?>