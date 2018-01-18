<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Slide con Bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
<body>
	<br/>
	<div class="container">

		<div class="card">
			<div class="card-header"><h2 class="text-center">Galería con bootstrap</h2></div>
			<div class="card-body">
				
				<!-- Carousel con Bootstrap -->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php for ($i=1; $i <=  6 ; $i++): ?>
							<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" <?php if ($i==1) echo 'class="active"'; ?>></li>
						<?php endfor; ?>
					</ol>
					<div class="carousel-inner">
						<?php for ($i=1; $i <=  6 ; $i++): ?>
							<div class="carousel-item <?php if ($i==1) echo "active"; ?>">
								<img class="d-block w-100" src="public/img/imagen_<?php echo $i; ?>.jpg" alt="Slide <?php echo $i; ?>">
								<div class="carousel-caption d-none d-md-block">
									<h5>Burj Al Arab</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, repellendus soluta fugit, provident, magnam pariatur eos tempore nam explicabo maiores dolores! Ab cupiditate aspernatur vel, mollitia doloribus quae dolor explicabo.</p>
								</div>
							</div>
						<?php endfor; ?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!--end Carousel-->

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
</body>
</html>