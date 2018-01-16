<div class="container">
	<h1 class="text-center">Respuesta AJAX usando la librería Fancybox de Jquery</h1>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Correo</td>
		</tr>
	</thead>
	<tbody>
		<?php for ($i=0; $i < 10 ; $i++): ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>Nombre <?php echo $i; ?></td>
				<td>correo<?php echo $i; ?>@correo.com</td>
			</tr>
		<?php endfor; ?>
	</tbody>
</table>
</div>