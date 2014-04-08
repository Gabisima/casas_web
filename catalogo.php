<?php
		//Conectar a la base de datos
		include "conexion.php"; 
		mysql_connect("localhost", "root", "") or die ("No hay nada");
		mysql_select_db("bienesraices") or die ("No hay base");
 ?>
	<meta charset="utf-8">
	<meta name="description" content="El hogar de los inmuebles">
	<title>Pulse | Inmuebles</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">

	<!-- header -->
	<?php include ("header.php"); ?>
	<!-- buscador -->
	<?php include ("buscador.php"); ?>
	<!-- slider -->
	<?php include ("slider.php"); ?>	

	<h1> CATALOGO DE PROPIEDADES </h1>
	<?php 
  	$c = @$_POST['buscar'];
  	$sql = @mysql_query("SELECT * FROM inmuebles");
	while ($row = mysql_fetch_object($sql))
	{
	?>
<section id="contenido">
		<article class="item">
			<figure class="imagen_item">
				<img src="images/<?php echo $row->foto1; ?>" height="50" width="50">
			</figure>
			<h2 class="titulo_item">
				<a href="#">
					<?php echo $row->nombre;?>
				</a>
			</h2>

			<div class="estado_item">
				<?php echo $row->localidad;?>
			</div>
			
			<div class="precio_item">
				$ <?php echo $row->precio;?>
			</div>

			<div class="datos_item">
				<a href="#" class="tipo"><?php echo $row->tipo;?></a>
			</div>

		</article> 		
<?php 	} ?>
</table>
<footer>
		<p>
			<strong>Pulse 2014</strong>
		</p>
</footer>
