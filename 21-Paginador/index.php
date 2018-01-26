<?php 

require_once 'config.php';
require_once 'db.php';
require_once 'paginador.php';

$paginador = new Paginador();
$pagina = $_GET['pagina'];
$sql = "SELECT * FROM paises";
$datos = $paginador->paginar($sql, $pagina, 20);

$params = $paginador->getPaginacion();

?>
<!-- <pre>
	<?php # print_r(get_required_files()); ?>
</pre> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>ISO</th>
				<th>Nombre</th>
				<th>SEO Slug</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($datos as $dato): ?>
				<tr>
					<td><?php echo $dato->id; ?></td>
					<td><?php echo $dato->iso; ?></td>
					<td><?php echo $dato->nombre; ?></td>
					<td><?php echo $dato->seo_slug; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<ul>
		<li style="display: inline; margin-right: 5px;">
			<?php if ($params['primero']): ?>
				<a href="?pagina=<?php echo $params['primero']; ?>">Primero</a>
			<?php else: ?>
				Primero
			<?php endif; ?>
		</li>
		<li style="display: inline; margin-right: 5px;">
			<?php if ($params['anterior']): ?>
				<a href="?pagina=<?php echo $params['anterior']; ?>">Anterior</a>
			<?php else: ?>
				Anterior
			<?php endif; ?>
		</li>
		<!-- Mostrar el Listado de páginas -->
		<li style="display: inline; margin-right: 5px;">
			<?php for($i = 1; $i <= $params['total']; $i++): ?>
				<?php if ($params['actual'] != $i): ?>
				<a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
			<?php else: ?>
				<?php echo $i; ?>
			<?php endif; ?>
			<?php endfor; ?>
		</li>
		<li style="display: inline; margin-right: 5px;">
			<?php if ($params['siguiente']): ?>
				<a href="?pagina=<?php echo $params['siguiente']; ?>">Siguiente</a>
			<?php else: ?>
				Siguiente
			<?php endif; ?>
		</li>
		<li style="display: inline; margin-right: 5px;">
			<?php if ($params['ultimo']): ?>
				<a href="?pagina=<?php echo $params['ultimo']; ?>">Último</a>
			<?php else: ?>
				Último
			<?php endif; ?>
		</li>
	</ul>
</body>
</html>