<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ventana Modal con Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Ventana modal con Bootstrap</h3>
			</div>
			<div class="card-body">
				<ul>
					<li><a href="javascript:void(0);" data-toggle="modal" data-target="#modalExample">Normal</a></li>
					<li><a href="javascript:void(0);" data-toggle="modal" data-target="#modalExample" onclick="carga_ajax('0', 'modalExample', 'ajax_1.php');">Con Ajax</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Ventana Modal Normal </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Ejemplo de ventana normal
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/funciones.js"></script>
</body>
</html>