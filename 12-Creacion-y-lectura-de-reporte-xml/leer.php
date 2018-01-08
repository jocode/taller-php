	<?php 

	$document = new DOMDocument();
	$document->load("prueba.xml");

	# Leemos los elementos por nombre de etiqueta
	$personas = $document->getElementsByTagName("personas"); 
	//print_r($persona); exit();

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<title>Leer archivos XML</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Lectura de archivo XML</h1>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Correo</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($personas as $persona): 
						$id = $persona->getElementsByTagName("id_persona");
						$id_persona = $id->item(0)->nodeValue;

						$name = $persona->getElementsByTagName("nom");
						$nombre = $name->item(0)->nodeValue;

						$email = $persona->getElementsByTagName("correo");
						$correo = $email->item(0)->nodeValue;
					?>
					<tr>
						<td><?php echo $id_persona; ?></td>
						<td><?php echo $nombre; ?></td>
						<td><?php echo $correo; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</body>
	</html>