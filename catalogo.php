<!doctype html>
<html>
<?php
		//Conectar a la base de datos
		include "conexion.php"; 
		mysql_connect("localhost", "root", "") or die ("No hay nada");
		mysql_select_db("bienesraices") or die ("No hay base");
 ?>
<head>
	<meta charset="utf-8">
	<meta name="description" content="El hogar de los inmuebles">
	<title>Pulse | Inmuebles</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<!-- header -->
	<?php include ("header.php"); ?>
	<!-- buscador -->
	<?php include ("buscador.php"); ?>

	<h1> CATALOGO DE PROPIEDADES </h1>
	<!-- cada una de las propiedades-->
	<table>
	  <thead>
	  	<tr>
	  		<th>Propiedad</th>
      		<th>Descripción</th>
      		<th>Ubicación</th>
      		<th>Superficie</th>
		 </tr>
	  </thead>
	<?php 
		mysql_connect("localhost", "root","") or die ("Error al conectar a la base de datos.");
  		mysql_select_db("inmuebles") or die ("Error al conectar a la base de datos.");


  	$c = @$_POST['buscar'];
  	$sql = @mysql_query("SELECT * FROM inmuebles");
	while ($row = mysql_fetch_object($sql))
	{
	?>
	  <tr>
	    <td><img src="images/<?php echo $row->foto1; ?>" height="50" width="50"></td>
	    <td><?php echo $row->descripcion;?></td>
	    <td><?php echo $row->ubicacion;?></td>
        <td><?php echo $row->superficie;?></td>
  	  </tr>
<?php 	} ?>
</table>
<footer>
		<p>
			<strong>Pulse 2014</strong>
		</p>
</footer>
</body>

</html>