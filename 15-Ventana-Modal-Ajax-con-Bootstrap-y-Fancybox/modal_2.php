<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ventana Modal con Fancybox</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/fancybox/jquery.fancybox.css">
</head>
<body>
	<br/>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Ventana modal con Fancybox</h3>
			</div>
			<div class="card-body">
				<ul>
					<li><a class="fancybox" href="public/img/burj-al-arab.jpg">
						<img src="public/img/burj-al-arab.jpg" width="150" height="100">
					</a></li>
					<hr/>
					<li><a href="ajax_2.php?id=23" class="fancybox fancybox.ajax">Con AJAX</a></li>
				</ul>
			</div>
		</div>
	</div>

<!-- Modal -->
<div id="modal">
  
</div>

<script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="public/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/funciones.js"></script>
<!--Script para inicializar fancybox-->
<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
	</script>
</body>
</html>