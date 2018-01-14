<?php 
require_once("clases/Usuario.php");

$usuario = new Usuario();
$datos = $usuario->getDatos();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>..:: Listado de Usuarios ::..</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
</head>
<body>
	<br/>
	<div class="container">
		<div class="row ">
			<div class="col">
				<div class="card bg-light">
					<div class="card-header">
						<?php 
						if (isset($_GET["m"])){

							switch ($_GET["m"]) {
								case '1':?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									El registro se ha ingresado exitosamente.
								</div>
								<?php	
								break;
								case '2': 
								?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									El registro se ha modificado exitosamente.
								</div>
								<?php
								break;
								case '3':
								?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									El registro se ha eliminado exitosamente.
								</div>
								<?php
								break;
							}

						}
						?>
						<h3 class="text-center">Listado de Usuarios</h3></div>
						<div class="card-body">
							<p>
								<a href="agregar.php" class="btn btn-outline-success">Agregar</a>
							</p>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Nombre</th>
										<th scope="col">E-mail</th>
										<th scope="col">Teléfono</th>
										<th scope="col">Fecha</th>
										<th scope="col">Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($datos as $dato): ?>
										<tr>
											<td><?php echo $dato->id; ?></td>
											<td><?php echo $dato->nombre; ?></td>
											<td><?php echo $dato->correo; ?></td>
											<td><?php echo $dato->telefono; ?></td>
											<td><?php echo Helpers::fecha($dato->fecha); ?></td>
											<td>
												<a href="editar.php?id=<?php echo $dato->id; ?>" class="btn btn-outline-info">Editar</a>
												<a href="javascript:void(0);" onclick="eliminar('eliminar.php?id=<?php echo $dato->id; ?>');" class="btn btn-outline-danger">Eliminar</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="public/js/funciones.js"></script>
	</body>
	</html>