<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Ejemplo 2, en estructuras cíclicas</title>
</head>
<body>
	<table border="1" style="border: 1px solid blue;">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
		</thead>
		<tbody>
			<?php for ($i = 0; $i < 10; $i++): ?>
			<!-- Inicio -->
			<tr>
				<td><?php echo $i; ?></td>
				<td>Johan Mosquera</td>
				<td>micorreo@correo.com</td>
			</tr>
			<!-- fin -->
		<?php endfor; ?>
		</tbody>
	</table>
</body>
</html>