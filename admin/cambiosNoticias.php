<?php 
	include "conexion.php"; 
	$id = @$_GET['id'];
	if(($id != "")||($id != NULL)){
  $sql = mysql_query("SELECT * FROM noticias WHERE id = '$id'");
	while($row = mysql_fetch_object($sql)){
?>
<html>
  <head>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="css/admin.css">
    
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8" />
    <title>Cambiar Noticia | Terraza</title>
        
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

    <!-- General CSS File-->
    <!-- <link rel="stylesheet" href="css/stylesheet.css?v=2"> -->
</head>

<?php include('header-admin.php'); ?>
  <?php include('buscador-admin.php'); ?>
  <div class="contenedor">

  <form action="cambiosNoticias&id=.php" method="post" enctype="multipart/form-data" name="formulario" encccept-charset="UTF-8" >

  
  <div class="item">
  <label>Autor</label>
    <input type="text" id="autor" name="autor" placeholder="Mario García Navarro" required size = "30" maxlength = "100" title="Usa tu nombre real y completo" value="<?php echo $row->autor; ?>">
</div>
  
  <div class="item">
    <label>Email</label>
    <input type = "text" id="email" name = "email" size = "30" maxlength = "100" required placeholder="mail@ejemplo.com" pattern=".{1,50}[@]{1}.{1,48}[.]{1}.{1,47}" title="mail@ejemplo.topleveldomain" value="<?php echo $row->email; ?>">
</div>
  
  <div class="item">
    <label>Confirmar Email</label>
    <input type = "text" name = "confirmaremail" size = "30" maxlength = "100" pattern=".{1,50}[@]{1}.{1,48}[.]{1}.{1,47}" required oninput="check(this)" value=<?php echo $row->email; ?>
    </div>
  
  <div class="item">
    <label>Título de la Noticia</label>
    <input type="text" name="titulo" placeholder="Microsoft compra un nuevo edificio en Querétaro" size="30" maxlength="70" required value="<?php echo $row->titulo; ?>">
</div>
  
  <div class="item">
    <label>Fecha de la Noticia</label>
    <input type = "date" name = "fecha" size = "20" maxlength = "50" required pattern="[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4}" placeholder="DD/MM/YYYY" title="DD/MM/YYYY (No olvides los guiones)" value="<?php echo $row->fecha; ?>">

  <script>
  function content() {
    var contenido = tinyMCE.get("noticia").getContent();
      alert(contenido);
     document.getElementById("area").value = contenido;
  }
  </script>

</div>
  
  <div class="item">
      <label>Noticia</label><br>
      <textarea name="noticia" style="width:100%; height:240px" id="noticia" value=<?php echo $row->noticia; ?></textarea>
      

</div>
  
  <div class="item"><label>Fotografías</label>
      <div id="dropbox" name="drop">
              <span class="message">Arrastra aquí las fotografías de tu propiedad<br /><i>(sólo puedes subir 3 fotos como máximo)</i></span>
      </div>

      <label>Liga a video de YouTube</label>
      <input type="url" name="video" size="30" maxlength="100" required placeholder="https://www.youtube.com/watch?v=lxgelwqe8-E" value=<?php echo $row->video; ?>

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
  
    <div class="item">
    <input type="text" name="area" id="area" />
    <label>Archivos de Fotografías</label>
    <input type="text" name="foto1"  value="<?php echo $row->foto1; ?>"/>
    </div>
  
  <div class="item">
    <input type="text" name="foto2"  value="<?php echo $row->foto2; ?>"/>
    </div>
  
  <div class="item">
    <input type="text" name="foto3" value="<?php echo $row->foto3; ?>" />
    </div>
  
  <div class="item">
    <input type="submit" value="Publicar" id="enviar" name="enviar" onclick="content()" /> 
  </div>
    </form>
    
    <script>
  function check(input) {
    if (input.value != document.getElementById('email').value) {
      input.setCustomValidity('Las direcciones de correo electrónico no coinciden');
    } else {
      // input is valid -- reset the error message
      input.setCustomValidity('');
    }
  }
  </script>
  <?php } }?>
</div>
<?php
//Inserción de datos
if(isset($_POST['enviar'])){
  $id = 0;
  echo $autor = $_POST['autor'];
  echo $email  = $_POST['email'];
  echo $titulo  = $_POST['titulo'];
  echo $fecha = $_POST['fecha'];
  echo $noticia  = $_POST['area'];
  echo $foto1  = $_POST['foto1'];
  echo $foto2  = $_POST['foto2'];
  echo $foto3  = $_POST['foto3'];
  echo $video  = $_POST['video'];

  mysql_query("UPDATE noticias SET autor = '$autor', email = '$email', titulo = '$titulo', fecha = '$fecha', noticia = '$noticia', foto1 = '$foto1', foto2 = '$foto2', foto3 = '$foto3', video = '$video' WHERE id = '$id' " );
?>
<p>Datos Insertados</p>
<?php }?>
</html>