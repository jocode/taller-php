<?php 

require_once("clases/Usuario.php");

$usuario = new Usuario();

$cantidad_resultados_por_pagina = 10;

if (isset($_GET['pagina'])) {

	if (is_numeric($_GET['pagina'])){

		if ($_GET['pagina'] == 1){
			header("Location: listado.php");
		} else {
			$pagina = $_GET['pagina'];
		}

	} else {
		header("Location: listado.php");
	}

} else {
	//header("Location: listado.php");
	$pagina = 1;
}

$empezar_desde = ($pagina-1)* $cantidad_resultados_por_pagina;

$sql1 = "SELECT count('id') AS cantidad FROM paises";
$registros = $usuario->getDatos($sql1);

$sql2 = "SELECT id, iso, nombre FROM paises 
ORDER BY id ASC 
LIMIT ".$empezar_desde.",".$cantidad_resultados_por_pagina."
";

$datos = $usuario->getDatos($sql2);

// Obtenemos el total de las páginas existente
$total_paginas = ceil($registros[0]->cantidad/$cantidad_resultados_por_pagina);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Paginación de Registros con PHP ::..</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="container">
		<div class="justify-content-center">
			<div class="card border-dark">
				<div class="card-header">
					<h3 class="text-center">Paginación de registros (<?php echo $registros[0]->cantidad; ?> en total)</h3>
				</div>
				<div class="card-body">
					
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<td>Id</td>
								<td>Nombre</td>
								<td>NIC</td>
							</tr>
						</thead>
						<tbody>
							<?php 
							$impresos = 0;
							foreach ($datos as $dato): 
								$impresos++;
								?>
								
								<tr>
									<td><?php echo $dato->id; ?></td>
									<td><?php echo $dato->iso; ?></td>
									<td><?php echo $dato->nombre; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<!-- Pagination -->
					<nav aria-label="...">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="listado.php" tabindex="-1">Primero</a>
							</li>
							<?php if ($pagina==1): ?>
								<li class="page-item disabled">
								<a href="javascript:void(0);" class="page-link">Anterior</a>
							</li>
							<?php else: 
								$anterior = $pagina - 1;
							?>
								<li class="page-item">
								<a href="listado.php?pagina=<?php echo $anterior; ?>" class="page-link">Anterior</a>
							</li>
							<?php endif; ?>

							<?php for ($i=$pagina; $i <= ($pagina+4) ; $i++) : ?>
								<li class="page-item <?php if ($pagina==$i) echo 'active'; ?>">
								<a class="page-link" href="listado.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></span></a>
							</li>
							<?php endfor; ?>

							<?php if ($impresos == $cantidad_resultados_por_pagina and $pagina < $total_paginas):
								$proximo=$pagina+1;
							 ?>
								<li class="page-item"><a class="page-link" href="listado.php?pagina=<?php echo $proximo; ?>">Siguiente</a></li>
							<?php else: ?>
								<li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Siguiente</a></li>
							<?php endif; ?>
							<li class="page-item">
								<a class="page-link" href="listado.php?pagina=<?php echo $total_paginas; ?>">Último</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>