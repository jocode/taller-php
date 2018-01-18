<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slide con FlexSlider</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/flexslider.css">
</head>
<body>
	<br/>
	<div class="container">

		<div class="card">
			<div class="card-header"><h2 class="text-center">Galería con FlexSlider</h2></div>
			<div class="card-body">
				
				<!-- Slide con FlexSlider -->
				<div class="flexslider">
					<ul class="slides">
						<?php for ($i=1; $i <= 6 ; $i++): ?>
							<li>
								<img src="public/img/imagen_<?php echo $i; ?>.jpg" />
							</li>
						<?php endfor; ?>
					</ul>
				</div>
				<!--end Slide-->

			</div>
		</div>
	</div>

	<script src="public/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				animationLoop: false,
				itemWidth: 210,
				itemMargin: 5
			});
		});
	</script>
</body>
</html>