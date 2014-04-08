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
	<?php include ("slider.php"); ? >	

	<h1> CATALOGO DE PROPIEDADES </h1>
	<table>
	<?php 
  	$c = @$_POST['buscar'];
  	$sql = @mysql_query("SELECT * FROM inmuebles");
	while ($row = mysql_fetch_object($sql))
	{
	?>
	  <tr>
	    <td><img src="images/<?php echo $row->foto1; ?>" height="50" width="50"></td>
	   	<td><table>
	    	<tr><td><?php echo $row->nombre;?></td></tr>
	    	<tr><td><?php echo $row->tipo;?></td></tr>
	    	<tr><td><?php echo $row->localidad;?></td></tr>
        	<tr><td><?php echo $row->superficie;?></td></tr>
        	<tr><td><?php echo $row->precio;?></td></tr>           
  	  	</td></table>
      </tr>
<?php 	} ?>
</table>
<footer>
		<p>
			<strong>Pulse 2014</strong>
		</p>
</footer>
