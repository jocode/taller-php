<?php 

require_once('clases/Usuario.php');

if (!isset($_SESSION['id'])){
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restringido</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"/>
</head>
<body>
	<br/>
	<div class="container">
		<div class="row"></div>
		<h2 class="text-center">
			Bienvenido <?php echo $_SESSION['nombre']; ?> a los contenidos restringidos
		</h2>

		<div>
			<a href="salir.php" class="btn btn-danger">Salir</a>
		</div>
	</div>

</body>
</html>