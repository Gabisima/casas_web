<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="El hogar de los inmuebles">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" >

	<title>Pulse | Inmuebles</title>
	<!--start estilos generales -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- end estilos generales -->

	<!-- start fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
	<!-- end fonts -->
	
	<!-- start jquery -->

	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	 
	<!-- Default Theme -->
	<link rel="stylesheet" href="css/owl.theme.css">
	 
	<!--  jQuery 1.7+  -->
	<script src="js/jquery-1.9.1.min.js"></script>
	 
	<!-- Include js plugin -->
	<script src="js/owl.carousel.js"></script>
  	<!-- end jquery -->

	<!-- inicializar el slider -->

  	<script>

  		$(document).ready(function() {
 
	  		$("#owl-demo").owlCarousel({
	 
		      autoPlay: 3000, //Set AutoPlay to 3 seconds
		 
		      items : 4,
		      itemsDesktop : [1199,3],
		      itemsDesktopSmall : [979,3]
 
 			});
 
		});
  	</script>

  <!-- terminar inicializar slider -->

</head>
<body>
	<!--start header -->
	<?php include ("header.php"); ?>
	<!--end header -->

	<!--start buscador -->
	<?php include ("buscador.php"); ?>
	<!--end buscador -->

	<!--start slider -->
	
	<div id="owl-demo">
          
	  <div class="item"><a href="#"><img src="images/inmuebles/casa2.jpg" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/inmuebles/elcristo.jpg" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/inmuebles/elcristo.jpg" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/inmuebles/elcristo.jpg" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/inmuebles/elcristo.jpg" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/inmuebles/elcristo.jpg" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/inmuebles/villascampo.jpg" alt=""></a></div>
	
	</div>
	
	<!--end slider -->
	
	<!-- start recientes -->
	
	<section id="contenido">
		<article class="item">
			<figure class="imagen_item">
				<img src="images/inmuebles/elcristo.jpg" />
			</figure>
			<h2 class="titulo_item">
				<a href="#">
					Me urge, casa bonita, la virgen
				</a>
			</h2>

			<div class="estado_item">
				Edo.Mex
			</div>
			
			<div class="precio_item">
				$4,000,000.00 MXN
			</div>

			<div class="datos_item">
				<a href="#" class="tipo">Casa</a>
			</div>

		</article>
		<article class="item">
			<figure class="imagen_item">
				<img src="images/inmuebles/elcristo.jpg" />
			</figure>
			<h2 class="titulo_item">
				<a href="#">
					Me urge, casa bonita, la virgen
				</a>
			</h2>

			<div class="estado_item">
				Edo.Mex
			</div>
			
			<div class="precio_item">
				$4,000,000.00 MXN
			</div>

			<div class="datos_item">
				<a href="#" class="tipo">Casa</a>
			</div>

		</article>
		<article class="item">
			<figure class="imagen_item">
				<img src="images/inmuebles/elcristo.jpg" />
			</figure>
			<h2 class="titulo_item">
				<a href="#">
					Me urge, casa bonita, la virgen
				</a>
			</h2>

			<div class="estado_item">
				Edo.Mex
			</div>
			
			<div class="precio_item">
				$4,000,000.00 MXN
			</div>

			<div class="datos_item">
				<a href="#" class="tipo">Casa</a>
			</div>

		</article>
		<article class="item">
			<figure class="imagen_item">
				<img src="images/inmuebles/elcristo.jpg" />
			</figure>
			<h2 class="titulo_item">
				<a href="#">
					Me urge, casa bonita, la virgen
				</a>
			</h2>

			<div class="estado_item">
				Edo.Mex
			</div>
			
			<div class="precio_item">
				$4,000,000.00 MXN
			</div>

			<div class="datos_item">
				<a href="#" class="tipo">Casa</a>
			</div>

		</article>

	</section>

	<!-- end recientes -->

	<!-- start footer -->
		<?php include('footer.php'); ?>
	<!-- end footer -->
	
<!-- scripts -->


<!-- end scripts -->
</body>
</html>