<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Estructuras cíclicas</title>
</head>
<body>
	<select name="anio">
		<?php
		for($i=1900;$i<=date('Y');$i++)
		{
			?>
			<option value="<?php echo $i;?>" <?php if($i==date('Y')){ ?> selected="true" <?php }?> ><?php echo $i;?></option>
			<?php
		}
		?>

	</body>
	</html>