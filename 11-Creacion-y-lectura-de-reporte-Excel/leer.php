<?php 
require_once('PHPExcel.php');
require_once('PHPExcel/Reader/Excel2007.php');

$object_reader = new PHPExcel_Reader_Excel2007();
# Cargamos el archivos que vamos a leer
$object_php_excel = $object_reader->load("usuarios.xlsx");
# Obtenemos las filas del excel
$object_php_excel->setActiveSheetIndex(0);
$filas = $object_php_excel->setActiveSheetIndex(0)->getHighestRow();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Lectura de excel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container">
		<h1>Creación y reporte de un Excel</h1>
		<p>Hay <?php echo $filas; ?> registros en el Excel</p>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Cédula</th>
				<th>Nombre</th>
				<th>E-Mail</th>
			</tr>
		</thead>
		<tbody>
			<?php for ($i=1; $i <= $filas; $i++): ?>
				<tr>
					<td><?php echo $object_php_excel->getActiveSheet()->getCell('A'.$i); ?></td>
					<td><?php echo $object_php_excel->getActiveSheet()->getCell('B'.$i); ?></td>
					<td><?php echo $object_php_excel->getActiveSheet()->getCell('C'.$i); ?></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
	</div>
</body>
</html>