<!doctype html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="description" content="El hogar de los inmuebles">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" >
	
	<title>Contacto | Terraza</title>
	<!--start estilos generales -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- end estilos generales -->

	<!-- start fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
	<!-- end fonts -->
</head>

<body>
	<!--start header -->
	<?php include ("header.php"); ?>
	<!--end header -->

	<!--start buscador -->
	<?php include ("buscador.php"); ?>
	<!--end buscador -->

 <h1> Contacto </h1>
       <form class='contacto' action="enviar.php" method="POST">
            <div><label>Nombre:</label><input type='text' value='nombre' required></div>
            <div><label>E-mail:</label><input type='text' value='mail' required></div>
            <div><label>Teléfono:</label><input type='text' value='telefono' ></div>
            <div><label>Mensaje:</label><textarea rows='6' value='mensaje' required></textarea></div>
            <div><input type='submit' value='Enviar'></div>
        </form>
    </body>
</html>
	</form>
	<!-- end recientes -->

	<!-- start footer -->
		<?php include('footer.php'); ?>
	<!-- end footer -->
	
<!-- scripts -->


<!-- end scripts -->
</body>
</html>