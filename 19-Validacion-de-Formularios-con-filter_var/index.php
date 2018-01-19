<?php 
require_once('funciones.php');
$mensaje = '';

if (isset($_POST['grabar'])) {

	if (filter_var( trim($_POST['name']) ) == false){
		$mensaje.= 'El campo nombre es obligatorio </br>';
	} 

	if (filter_var( trim($_POST['email']) ) == false){
		$mensaje.= 'El campo email está vacío </br>';
	} 

	if (filter_var( trim($_POST['email']), FILTER_VALIDATE_EMAIL) == false){
		$mensaje.= 'El Email ingresado no tiene un formato válido <br/>';
	}

	if (filter_var( $_POST['pais'], FILTER_CALLBACK, array("options"=>"validaSelect")) == false){
		$mensaje.= 'Debe seleccionar una opción en el campo país <br/>';
	}

	if ( $mensaje == '' ){
		// Proceso los campos porque ya han sido balidados
		die('Se pasaron todas las validaciones');
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>..:: Validación de Formularios con PHP ::..</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
</head>
<body>
	<br/>
	<div class="container">
		<div class="row justify-content-center">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title text-center">Validación de formularios</h3>
					<?php if ($mensaje != ''): ?>
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<?php echo $mensaje; ?>
						</div>
					<?php endif; ?>
					<form action="" method="post">
						<div class="form-group">
							<label for="name">Nombre</label>
							<input type="text" name="name" class="form-control" id="name" autofocus="true" value="<?php echo set_value_input(array(), 'name', 'name'); ?>">
						</div>
						<div class="form-group">
							<label for="email">Correo</label>
							<input type="email" name="email" class="form-control" id="email" value="<?php echo set_value_input(array(), 'email', 'email'); ?>">
						</div>
						<div class="form-group">
							<label for="telefono">Teléfono</label>
							<input type="number" name="telefono" class="form-control" id="telefono" value="<?php echo set_value_input(array(), 'telefono', 'telefono'); ?>">
						</div>
						<div class="form-group">
							<label for="pais">País:</label>
							<select name="pais" id="pais" class="form-control">
								<option value="0" <?php echo set_value_select(array(), 'pais', 'pais', '0'); ?>>Seleccione...</option>
								<option value="1" <?php echo set_value_select(array(), 'pais', 'pais', '1'); ?>>Colombia</option>
								<option value="2" <?php echo set_value_select(array(), 'pais', 'pais', '2'); ?>>Venezuela</option>
								<option value="3" <?php echo set_value_select(array(), 'pais', 'pais', '3'); ?>>Brasil</option>
								<option value="4" <?php echo set_value_select(array(), 'pais', 'pais', '4'); ?>>Ecuador</option>
								<option value="5" <?php echo set_value_select(array(), 'pais', 'pais', '5'); ?>>Perú</option>
								<option value="6" <?php echo set_value_select(array(), 'pais', 'pais', '6'); ?>>Panamá</option>
							</select>
						</div>
						<input type="hidden" name="grabar" value="si">
						<hr/>
						<input type="submit" value="Enviar" class="btn btn-success">

					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js""></script>
</body>
</html>