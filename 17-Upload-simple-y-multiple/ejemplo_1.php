<?php 

$mensaje = '';
if (isset($_POST["grabar"]) and $_POST["grabar"]=="si"){
	//echo $_FILES['file']['name'];
	
	if (empty($_FILES['file']['name'])){
		$mensaje.= 'Debes seleccionar un archivo';
	} else {
		if ($_FILES['file']['type']=='image/jpeg' or $_FILES['file']['type']=='image/png'){
			// Con la función copy, copio el archivo en el servidor
			copy($_FILES['file']['tmp_name'], 'public/upload/'.$_FILES['file']['name']);
			$mensaje.= 'Se ha subido un archivo exitosamente';
		} else {
			$mensaje.= 'El formato del archivo no es correcto';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload de Archivos</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="container">
		<div class="card">
			<div class="card-header"><h3 class="text-center">Upload Simple</h3></div>
			<div class="card-body">
				<?php if (!empty($mensaje)): ?>
					<div class="alert alert-danger"><?php echo $mensaje; ?></div>
				<?php endif; ?>
				<form action="" method="post" enctype="multipart/form-data">
					<div>
						<input type="file" name="file"/>
					</div>
					<div>
						<input type="hidden" name="grabar" value="si">
					</div>

					<br/>
					<input class="button" type="submit" value="Enviar"/>
				</form>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>