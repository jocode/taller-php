<?php 
require_once("clases/Usuario.php");
$mensaje = '';
if (isset($_POST['correo'])){
	$usuario = new Usuario();
	$datos = $usuario->getLogin($_POST['correo'], sha1($_POST['pass']));

	if (count($datos)==0){
		$mensaje.= 'Los datos ingresados no son correctos';
	} else {
		$_SESSION["id"] = $datos[0]->id;
		$_SESSION["nombre"] = $datos[0]->nombre;
		header("Location: restringido_1.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>..:: Sistema de Control de Acceso ::..</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
</head>
<body>
	<br/>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-4">
				<h4 class="text-center">Sistema de Login</h4>
				<?php if (!empty($mensaje)): ?>
					<div class="alert alert-danger">
						<?php echo $mensaje; ?>
					</div>
				<?php endif; ?>
				<div class="card">
					<div class="card-body">
					<form action="" method="post" name="form">
						<div>
							<label for="correo">Correo</label>
							<input type="email" name="correo" id="email" class="form-control" placeholder="Correo" value="<?php Helpers::set_value_input(array(), 'correo', 'correo'); ?>">
						</div>
						<div>
							<label for="pass">Contraseña</label>
							<input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" value="<?php Helpers::set_value_input(array(), 'pass', 'pass'); ?>">
						</div>
						<hr/>
						<input type="submit" value="Enviar" class="btn btn-success col-12">
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="public/js/funciones.js"></script>
</body>
</html>