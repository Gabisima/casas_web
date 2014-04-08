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
	<link href='http://fonts.googleapis.com/css?family=Elsie:400,900' rel='stylesheet' type='text/css'>
	<!-- end fonts -->
	
	<!-- start jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
  	<script src="jquery.slides.min.js"></script>
  	<!-- end jquery -->

	<!-- inicializar el slider -->
  	<script>
    $(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528
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
 	<div class="slider">
 		<h2 class="titulo">Nuevas</h2>
 		<div class="container">
	    	<div id="slides">
		      
		      <img src="images/inmuebles/casa2.jpg" alt="">
		      <img src="images/inmuebles/elcristo.jpg" alt="">
		      
	    	</div>
  		</div>

 	</div>
	
	<!--end slider -->
	
	<!-- start recientes -->
	
	<div class="contenedor_lista">
		<div class="contendor_caja">
			<figure><img src="images/inmuebles/casa2.jpg" width="120px" height="100px" alt=""></figure>
			<h2 class="contenedor_titulo">
				Casa sustentable la virgen
			</h2>

			<div class="contenedor_estado">
				Edo. Mex
			</div>

			<div class="contenedor_descripcion">
				Casa sustentable bonita en zona residencial la virge porque YOLO
			</div>
		</div>

	</div>

	<!-- end recientes -->
	<footer>
		<p>
			<strong>Pulse 2014</strong>
		</p>
	</footer>
	
<!-- scripts -->
<!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528
      });
    });
  </script>
 <!-- End SlidesJS Required -->
<!-- end scripts -->
</body>
</html>