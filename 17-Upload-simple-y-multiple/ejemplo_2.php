<?php 

$mensaje = '';
if (isset($_POST["grabar"]) and $_POST["grabar"]=="si"){

	if (empty($_FILES['file']['name'][0])){
		$mensaje.= 'Debe seleccionar un archivo';
	} else {
		$total = count($_FILES['file']['name']);
		$contador = 1;

		for ($i=0; $i < $total ; $i++) { 
			if ($_FILES['file']['type'][$i]=='image/jpeg' or $_FILES['file']['type'][$i]=='image/png'){
			// Con la función copy, copio el archivo en el servidor
				copy($_FILES['file']['tmp_name'][$i], 'public/upload/'.$_FILES['file']['name'][$i]);
				$mensaje.= 'La foto '.$contador.' se ha subido exitosamente.  <br/>';
			} else {
				$mensaje.= 'La foto '.$contador.' no se ha podido subirse debido al formato del archivo <br/>';
			}
			$contador++;
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
						<input type="file" name="file[]" multiple="true" />
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