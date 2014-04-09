<!doctype html>
<html lang="en">
 	<?php
 			//Conectar a la base de datos
 			include 'conexion.php';
 	 ?>
<head>
	<meta charset="UTF-8">
	<title>Noticia (titulo)</title>
	<!--start estilos generales -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
	<!-- end estilos generales -->

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
	<!-- start header -->
	<?php include('header.php'); ?>
	<!-- end header -->
	<!-- start buscador -->
	<?php include('buscador.php'); ?>
	<!-- end buscador -->
		<?php 
  		$sql = @mysql_query("SELECT * FROM noticias");
		?>
	<!-- start slider -->
	<div id="owl-demo">
         
	  <div class="item"><a href="#"><img src="images/noticias/<?php echo $row->foto1; ?>" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/noticias/<?php echo $row->foto2; ?>" alt=""></a></div>
	  <div class="item"><a href="#"><img src="images/noticias/<?php echo $row->foto3; ?>" alt=""></a></div>
	
	</div>
	<!-- end slider -->
	
	<!-- start descripcion -->
	<div id="contenido">
		<div class="descripcion">
			<h2 class="titulo_descripcion">
				<?php echo $row->titulo;?>
			</h2>
			<div class="contenido_descripcion">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, vero, ea voluptatibus consequatur deserunt nesciunt nobis commodi expedita ad minima temporibus labore fugit eligendi neque distinctio itaque quaerat sed. Ipsam!
			</div>
		</div>
	</div>
	<!-- end descripcion -->

	<!-- start similares -->
	<section id="contenido">
		<article class="item">
			<figure class="imagen_item">
				<img src="images/noticias/<?php echo $row->foto1; ?>"
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
	<!-- end similares -->

	<!-- start footer -->
	<?php include('footer.php'); ?>
	<!-- end footer -->
		
</body>
</html>
