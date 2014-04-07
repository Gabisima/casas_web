<!doctype html>
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

	<h1> NOTICIAS </h1>
	<!-- cada una de las propiedades-->
	<table>
	  <thead>
	  	<tr>
	  		<th>Imagen</th>
	  		<th>Titulo</th>
      		<th>Resumen</th>
      		<th>Fecha</th>
		  </tr>
	  </thead>
	<?php 
  	$c = @$_POST['buscar'];
  	$sql = @mysql_query("SELECT * FROM noticias");
	
	while ($row = mysql_fetch_object($sql))
	{
	?>
	  <tr>
	    <td><img src="images/<?php echo $row->foto; ?>" height="50" width="50"></td>
	    <td><?php echo $row->titulo;?></td>
	    <td><?php echo $row->resumen;?></td>
        <td><?php echo $row->fecha;?></td>
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