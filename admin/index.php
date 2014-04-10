<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<?php include('../header.php'); ?>
	<?php include('buscador-admin.php'); ?>
	<div class="nav_admin">
			<ul>

				<!-- <li>
					<a href="#">Inicio</a>
				</li> -->

				<li>
					<a href="alta.php" class="inmuebles">Inmuebles</a>
					
				</li>

				<li>
				<!-- se puede usar <li id ="propiedades">  para destacar  -->
					<a href="altaNoticia.php" class="noticias">Noticias</a>
					
				</li>

			</ul>

	</div>
	<div class="message_error">
		Selecciona una opción o busca con tu correo
	</div>


	
</body>
</html>
