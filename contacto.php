<!doctype html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="description" content="El hogar de los inmuebles">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" >
	
	<title>Terraza | Inmuebles</title>
	<!--start estilos generales -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- end estilos generales -->

	<!-- start fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
	<!-- end fonts -->
</head>

<body>
	<!--start header -->
	<?php include ("header.php"); ?>
	<!--end header -->

	<!--start buscador -->
	<?php include ("buscador.php"); ?>
	<!--end buscador -->
<?php


include 'contact.php';

if(isset($_POST) & !empty($_POST)){

$s = send_email($name,$email,$subject,$phone,$message); 
}
 ?>

 <h1> Contacto </h1>
 <div id="formwrap">
	
	<form action="MAILTO:uribe.gabs@gmail.com" method="post" enctype="text/plain">	
			<div class="precio_item">
				<label id="nombre"> Nombre completo*: </label>
				<input name="nombre" type="textbox" id="nombre" required>
			</div>
			<div class="precio_item">
				<label id="telefono">Teléfono*: </label>
				<input name="telefono" type="textbox" id="telefono" required>
			</div>
			<div class="precio_item">
				<label id="mail">E-Mail: </label>
				<input name="mail" type="textbox" id="mail">
			</div>
			<div class="precio_item">
				<label id="direccion">Dirección: </label>
				<input name="direccion" type="textbox" id="direccion">
			</div>
			<div class="precio_item">
				<label id="comentario">Comentario*: </label>
				<input name="comentario" type="textbox" id="comentario" required>
			</div>
			<div>
				<input name="submit" type="submit" id="submit"value="Enviar" value="Go" onclick="return confirm('Confirme envío')">
				<input type="reset" value="Borrar">
			</div>
	</form>
	</div>
            <div id="success">
				<?php
				if(isset($s)){
					if($s['mail'] == 1){
						//Your success message here
						echo "Email Sent";
					}else{
						//Failure Message Here
						echo "Email failed";
					}
				}
				?>
			</div>

	<!-- end recientes -->

	<!-- start footer -->
		<?php include('footer.php'); ?>
	<!-- end footer -->
	
<!-- scripts -->


<!-- end scripts -->
</body>
</html>