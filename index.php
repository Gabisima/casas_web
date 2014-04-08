<!doctype html>
<html lang="es">
<head>

	<?php
		//Conectar a la base de datos
		$i = 1;
		include "conexion.php"; 

	?>
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
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
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
	<?php 
	  	$c = @$_POST['buscar'];
	  	$sql = @mysql_query("SELECT * FROM inmuebles order by id desc");
		while ($row = mysql_fetch_object($sql))
		{ ?>
			<?php if ($i<=6) { ?>
          
	  			<div class="item"><a href="propiedad.php?id=<?php echo $row->id;?>"><img src="images/inmuebles/<?php echo $row->foto1;?>" alt=""></a></div>
	  		<?php } ?>	
	
	<?php } ?>
	</div>
	<!--end slider -->
	
	<!-- start recientes -->
	
	<section id="contenido">
	<?php 
  	$c = @$_POST['buscar'];
  	$sql = @mysql_query("SELECT * FROM inmuebles order by id desc");
  	
	while ($row = mysql_fetch_object($sql))
	{  
		$i++
	?>	
		<?php if ($i<=6) {	
		?>
		<article class="item">
			<figure class="imagen_item">
				<a href="propiedad.php?id=<?php echo $row->id;?>"><img src="images/inmuebles/<?php echo $row->foto1;?>" /></a>
			</figure>
			<h2 class="titulo_item">
				<a href="propiedad.php?id=<?php echo $row->id;?>">
					<?php echo $row->titulo;?>
				</a>
			</h2>

			<div class="estado_item">
				<?php echo $row->localidad;?>
			</div>
			
			<div class="precio_item">
				$<?php echo $row->precio;?> <?php echo $row->unidad;?>
			</div>

			<div class="datos_item">
				<a href="#" class="tipo"><?php echo $row->tipo;?></a>
			</div>

		</article>
		<?php }?>
	<?php } ?>
		

	</section>

	<!-- end recientes -->

	<!-- start footer -->
		<?php include('footer.php'); ?>
	<!-- end footer -->
	
<!-- scripts -->


<!-- end scripts -->
</body>
</html>