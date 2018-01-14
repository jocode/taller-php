<?php 
require_once("clases/Usuario.php");

if ( isset($_POST["nombre"]) ){
	//print_r($_POST); exit;
	$usuario = new Usuario();
	$usuario->insertar();
	header("Location: index.php?m=1");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>..:: Agregar Usuario ::..</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
</head>
<body>
	<br/>
	<div class="container">
		<div class="row ">
			<div class="col">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Agregar Usuario</li>
					</ol>
				</nav>
				<div class="card bg-light">
					<div class="card-header text-center">Agregar Usuario</div>
					<div class="card-body">
						<form name="form" action="" method="post">
							<div>
								<label for="nombre">Nombre:</label>
								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" autofocus="true" required="true" />
							</div>
							<div>
								<label for="correo">Correo:</label>
								<input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" required="true" />
							</div>
							<div>
								<label for="telefono">Teléfono:</label>
								<input type="number" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" required="true" />
							</div>
							<div>
								<label for="fecha">Fecha:</label>
								<input type="date" name="fecha" id="fecha" class="form-control" required="true" />
							</div>
							<hr/>
							<input class="btn btn-outline-info" type="submit" value="Enviar" name="Enviar"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	 <script src="public/js/jquery-1.10.2.js"></script>

	<!-- cdn for modernizr, if you haven't included it already -->
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
	<!-- polyfiller file to detect and load polyfills -->
	<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
	<script>
		webshims.setOptions('waitReady', false);
		webshims.setOptions('forms-ext', {types: 'date'});
		webshims.polyfill('forms forms-ext');
	</script>
</body>
</html>