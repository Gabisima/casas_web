<?php include "conexion.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="UTF-8">
		<title>Dynasty | Publicar</title>
		<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>

        <!-- Our CSS stylesheet file -->
       <link rel="stylesheet" href="assets/css/styles.css?v=1" />

		<script type="text/javascript">
		tinymce.init({
		    selector: "textarea"
		 });
		</script>
       	<link rel="stylesheet" href="css/stylesheet.css?v=2">
   
	</head>
<form oninput="total.value = (nights.valueAsNumber * 99) + 
 ((guests.valueAsNumber - 1) * 10)" accept-charset="UTF-8" >

  <label>Nombre Completo</label>
  <input type="text" name="nombre" placeholder="Mario García Navarro" required size = "30" maxlength = "100" title="Usa tu nombre real y completo">

  <label>Email</label>
  <input type = "text" id="email" name = "email" size = "30" maxlength = "100" required placeholder="mail@ejemplo.com" pattern=".{1,50}[@]{1}.{1,48}[.]{1}.{1,47}" title="mail@ejemplo.topleveldomain">

  <label>Confirmar Email</label>
  <input type = "text" name = "confirmaremail" size = "30" maxlength = "100" pattern=".{1,50}[@]{1}.{1,48}[.]{1}.{1,47}" required oninput="check(this)">

  <label>Teléfono </label><label id="opcional">(Opcional)</label>
  <input  id="telefono" type="text" name="telefono" placeholder="(55)56-08-60-99" size = "30" maxlength = "70" oninput="changeID(this)">
  
  <label>Título de la Publicación</label>
  <input type="text" name="titulo" placeholder="Vendo casa de 4 habitaciones en Miramontes" size="30" maxlength="70" required>
  
  <label>Tipo de Inmueble</label><br>
  <label class="selection">
    <select name="tipo" id="tipo" class="selector">
    <?php 
		$sql = mysql_query("SELECT * FROM TIPOS");
		while($row = mysql_fetch_object($sql))
		{
	?>
    	<option value="<?php echo $row->tipo;?>"><?php echo utf8_encode($row->tipo);?></option>
    <?php } ?>
    </select></label>
    
      <label>Localidad del Inmueble</label><br>
  <label class="selection">
    <select name="tipo" id="tipo" class="selector">
    <?php 
		$sql = mysql_query("SELECT * FROM ESTADOS");
		while($row = mysql_fetch_object($sql))
		{
	?>
    	<option value="<?php echo $row->estado;?>"><?php echo utf8_encode($row->estado);?></option>
    <?php } ?>
    </select></label>

  <label>Dirección del Inmueble</label>
        <iframe height="400px" width="800px" frameBorder="0" scrolling="no"
        src="maps.php">
    </iframe>
    
    <script>
	  var frame = document.getElementsByTagName("iframe")[0]
  , form = frame.contentDocument.forms[0];
alert("OK: ticket=" + form.ticket.value);
	</script>

  <label>Superficie del Inmueble (En metros cuadrados)</label>
  <input type="text" name="superficie" placeholder="1200" required size = "30" maxlength = "10" title="El campo debe contener únicamente números" pattern="[0-9]*[.,]?[0-9]+">
  
  <label>Precio del Inmueble</label><br>
  <input type="text" name="superficie" placeholder="87,000" required size = "30" maxlength = "15" title="El campo debe contener únicamente números" pattern="[0-9]*[.,]?[0-9]*[.,]?[0-9]*[.,]?[0-9]+" id="price">
    <label class="etiqueta">
    <select name="tipo" id="precio" class="selector">
    <?php 
		$sql = mysql_query("SELECT * FROM UNIDADES");
		while($row = mysql_fetch_object($sql))
		{
	?>
    	<option value="<?php echo $row->unidad;?>"><?php echo utf8_encode($row->unidad);?></option>
    <?php } ?>
    </select></label>

 <br>
    <label>Descripción del Inmueble</label><br>
  <form method="post" action="alta.php">
    <textarea name="content" style="width:100%; height:240px" maxlength="5000" placeholder="Ingresa"></textarea>

   <!-- Including the HTML5 Uploader plugin -->
   <script src="assets/js/jquery.filedrop.js"></script>

   <!-- The main script file -->
   <script src="assets/js/script.js"></script>
   
   <!-- Including The jQuery Library -->
        <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
	<br><label>Fotografías</label>
    <div id="dropbox">
            <span class="message">Arrastra aquí las fotografías de tu propiedad<br /><i>(sólo puedes subir 3 fotos como máximo)</i></span>
    </div>
    

   <div class="preview done">

    <span class="imageHolder">
        <span class="uploaded"></span>
    </span>

    <div class="progressHolder">
        <div class="progress"></div>
    </div>

</div>

   <br>
  <input type="submit" value="Publicar"/> 
</form>
  </form>
  
<?php
/*ob_start();
include 'maps.php';
ob_end_clean();
echo $map;*/
?>

<script>
function check(input) {
  if (input.value != document.getElementById('email').value) {
    input.setCustomValidity('Las direcciones de correo electrónico no coinciden');
  } else {
    // input is valid -- reset the error message
    input.setCustomValidity('');
  }
}

function changeID(element){
	if(element == document.getElementById('telefono'))
	{
		if((element.value != null)||(element.value != ''))
		{
			element.id = "tel";
		}
	}

	if(element == document.getElementById('tel'))
	{
		if((element.value == null)||(element.value == ''))
		{
			element.id = "telefono";
		}
	}
}
</script>
</html>