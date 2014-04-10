<?php include "conexion.php"; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="css/admin.css">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="UTF-8" />
		<title>Dynasty | Publicar</title>
        
        <!-- Change Div Function -->
		<script>
			$(document).ready(function(){
			  $("#inmueble").click(function(){
			    $("#div1").load("alta.php");
			  });
			});

			$(document).ready(function(){
			  $("#noticias").click(function(){
			    $("#div1").load("altaNoticia.php");
			  });
			});
		</script>
        
		<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>

        <!-- Our CSS stylesheet file for DropFile-->
       <link rel="stylesheet" href="assets/css/styles.css?v=1" />

		<script type="text/javascript">
		tinymce.init({
		    selector: "textarea"
		 });
		</script>
       	<!-- <link rel="stylesheet" href="css/stylesheet.css?v=2"> -->
   
	</head>
	<body>
		<?php include('header-admin.php'); ?>
	<?php include('buscador-admin.php'); ?>
	
	<div class="contenedor">
<form action="alta.php" method="post" enctype="multipart/form-data" name="formulario"  encccept-charset="UTF-8" >
	
	<div class="item">
	  <label>Nombre Completo</label>
	  <input type="text" id="nombre" name="nombre" placeholder="Mario García Navarro" required size = "30" maxlength = "100" title="Usa tu nombre real y completo">
	</div>
	
	<div class="item">
	  <label>Email</label><br>
	  <input type = "text" id="email" name = "email" size = "30" maxlength = "100" required placeholder="mail@ejemplo.com" pattern=".{1,50}[@]{1}.{1,48}[.]{1}.{1,47}" title="mail@ejemplo.topleveldomain">
	</div>
	<div class="item">
	  <label>Confirmar Email</label>
	  <input type = "text" name = "confirmaremail" size = "30" maxlength = "100" pattern=".{1,50}[@]{1}.{1,48}[.]{1}.{1,47}" required oninput="check(this)">
	</div>
	<div class="item">
	  <label>Teléfono </label><label id="opcional">(Opcional)</label>
	  <input  id="telefono" type="text" name="telefono" placeholder="(55)56-08-60-99" size = "30" maxlength = "70" oninput="changeID(this)">
  	</div>
  	<div class="item">
	  <label>Título de la Publicación</label>
	  <input type="text" name="titulo" placeholder="Vendo casa de 4 habitaciones en Miramontes" size="30" maxlength="70" required>
  	</div>
  	<div class="item">
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
    </div>
  	<div class="item">
    
      <label>Localidad del Inmueble</label><br>
  <label class="selection">
    <select name="localidad" id="localidad" class="selector">
    <?php 
    	mysql_query("SET NAMES utf8");
		$sql = mysql_query("SELECT * FROM ESTADOS");
		while($row = mysql_fetch_object($sql))
		{
	?>
    	<option value="<?php echo $row->estado;?>"><?php echo $row->estado;?></option>
    <?php } ?>
    </select></label>

  <label>Dirección del Inmueble</label>
        <iframe height="400px" width="95%" frameBorder="0" scrolling="no"
        src="maps.php" id="direccion" name="direccion">
    </iframe>

    <label id="opcional">Porfavor confirma tu dirección copiando el contenido que aparece en el mapa.</label>
      <input type="text" id="direc" name="direc" placeholder="Avenida de los Poetas, Álvaro Obregón, Ciudad de México, México" required size = "30" maxlength = "100" >

	<div class="item">
	  <label>Superficie del Inmueble (En metros cuadrados)</label>
	  <input type="text" name="superficie" id="superficie" placeholder="1200" required size = "30" maxlength = "10" title="El campo debe contener únicamente números" pattern="[0-9]*[.,]?[0-9]+">
  	</div>
  	<div class="item">
	  <label>Precio del Inmueble</label><br>
	  <input type="text" name="precio" placeholder="87,000" required size = "30" maxlength = "15" title="El campo debe contener únicamente números" pattern="[0-9]*[.,]?[0-9]*[.,]?[0-9]*[.,]?[0-9]+" id="price">
	    <label class="etiqueta">
	    <select name="precio" id="precio" class="selector">
	    <?php 
			$sql = mysql_query("SELECT * FROM UNIDADES");
			while($row = mysql_fetch_object($sql))
			{
		?>
	    	<option value="<?php echo $row->unidad;?>"><?php echo utf8_encode($row->unidad);?></option>
	    <?php } ?>
	    </select></label>
		<script>
		function content() {
		  var contenido = tinyMCE.get("descripcion").getContent();
		    alert(contenido);
		   document.getElementById("area").value = contenido;
		}
		</script>
	</div>
  	<div class="item">
	 	<br>
	    <label>Descripción del Inmueble</label><br>
	    <textarea name="descripcion" style="width:80%; height:240px" id="descripcion" ></textarea>
	        
	 	<div id="update"></div>
	 
	    <script type="text/javascript">
	        content();
	        alert(content);      
	        document.getElementById("link").onclick = function () {            
	            // ajax start
	            var xhr;
	            if (window.XMLHttpRequest) xhr = new XMLHttpRequest(); // all browsers
	            else xhr = new ActiveXObject("Microsoft.XMLHTTP");     // for IE
	 
	            var url = 'process.php?content=' + content;
	            xhr.open('GET', url, false);
	            xhr.onreadystatechange = function () {
	                if (xhr.readyState===4 && xhr.status===200) {
	                    var div = document.getElementById('update');
	                    div.innerHTML = xhr.responseText;
	                }
	            }
	            xhr.send();
	            // ajax stop
	            return false;
	        }
	    </script>    
	</div>
  	<div class="item">
  		<br><label>Fotografías</label>

    <div id="dropbox" name="drop">
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

        <!-- Including The jQuery Library -->
    <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
    
    <!-- Including the HTML5 Uploader plugin -->
    <script src="assets/js/jquery.filedrop.js"></script>
    
    <!-- The main script file -->
    <script>
    $(function(){
	
	var dropbox = $('#dropbox'),
		message = $('.message', dropbox);
		maxarchivos = 1;
	
	dropbox.filedrop({
		// The name of the $_FILES entry:
		paramname:'pic',
		
		maxfiles: 3,
    	maxfilesize: 1,
		url: 'post_file.php',
		
		uploadFinished:function(i,file,response){
			$.data(file).addClass('done');
			// response is the JSON object that post_file.php returns
		},
		
    	error: function(err, file) {
			switch(err) {
				case 'BrowserNotSupported':
					showMessage('Tu navegador web no soporta subidas de archivos basadas en HTML5!');
					break;
				case 'TooManyFiles':
					alert('Sólo puedes insertar máximo 3 fotos a la vez.');
					break;
				case 'FileTooLarge':
					alert(file.name+' es demasiado grande. Por favor sube archivos de máximo 50MB.');
					break;
				default:
					break;
			}
		},
		
		// Called before each upload is started
		beforeEach: function(file){
			if(!file.type.match(/^image\//)){
				alert('Únicamente puedes subir imágenes.');
				
				// Returning false will cause the
				// file to be rejected
				return false;
			}
		},
		
		uploadStarted:function(i, file, len){
			if(maxarchivos <= 3){
				createImage(file);
				maxarchivos++;
			}
			else
				alert("Máximo 3 fotos.");
		},
		
		progressUpdated: function(i, file, progress) {
			$.data(file).find('.progress').width(progress);
		}
    	 
	});

	var template = '<div class="preview">'+
						'<span class="imageHolder">'+
							'<img />'+
							'<span class="uploaded"></span>'+
						'</span>'+
						'<div class="progressHolder">'+
							'<div class="progress"></div>'+
						'</div>'+
					'</div>'; 
	
	
	function createImage(file){

		var preview = $(template), 
			image = $('img', preview);
			
		var reader = new FileReader();
		
		image.width = 100;
		image.height = 100;
		
		reader.onload = function(e){
			
			// e.target.result holds the DataURL which
			// can be used as a source of the image:
			
			image.attr('src',e.target.result);
			if(maxarchivos == 2)
				document.getElementById("foto1").value = file.name;
			if(maxarchivos == 3)
				document.getElementById("foto2").value = file.name;
			if(maxarchivos == 4)
				document.getElementById("foto3").value = file.name;
		};
		
		// Reading the file as a DataURL. When finished,
		// this will trigger the onload function above:
		reader.readAsDataURL(file);
		
		message.hide();
		preview.appendTo(dropbox);
		
		// Associating a preview container
		// with the file, using jQuery's $.data():
		
		$.data(file,preview);
	}

	function showMessage(msg){
		message.html(msg);
	}
});

</script>
 </div>

  <input type="submit" value="Publicar" id="enviar" name="enviar" onclick="content()" /> 
  	<div class="item">
      <input type="text" name="area" id="area" />
       </div>
  	<div class="item">
      <input type="text" name="foto1" id="foto1"/>
       </div>
  	<div class="item">
      <input type="text" name="foto2" id="foto2" />
       </div>
  	<div class="item">
      <input type="text" name="foto3" id="foto3" />
       </div>

  </form>

 <?php
//Inserción de Datos
if(isset($_POST['enviar'])){
	$id = 0;
	echo $nombre = $_POST['nombre'];
	echo $email  = $_POST['email'];
	echo $telefono  = $_POST['telefono'];
	echo $titulo  = $_POST['titulo'];
	echo $tipo  = $_POST['tipo'];
	echo $localidad  = $_POST['localidad'];
	echo $direccion  = $_POST['direc'];
	echo $superficie  = $_POST['superficie'];
	echo $precio  = $_POST['precio'];
	echo $unidad = $_POST['unidad'];
	echo $descripcion  = $_POST['area'];
	echo $foto1  = $_POST['foto1'];
	echo $foto2  = $_POST['foto2'];
	echo $foto3  = $_POST['foto3'];
	
	mysql_query("SET NAMES utf8");
	mysql_query("INSERT INTO inmuebles VALUES('$id', '$nombre', '$email', '$telefono', '$titulo', '$tipo', '$localidad', '$direccion', '$superficie', '$precio', '$unidad', '$descripcion','$foto1', '$foto2', '$foto3')");
?>
<p>Datos Insertados</p>
<?php } ?>

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
</body>
</html>