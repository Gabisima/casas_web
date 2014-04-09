<!DOCTYPE html>
<html>
<?php
	//Conexión a la base de datos
	mysql_connect("localhost", "root", "") 
		or die ("Connection Failed");
	
	mysql_select_db("bienesraices")
		or die("Data Base is not available");
?>
    <head>
        <meta charset="utf-8">
        <title>Dynasty | Consultar</title>
        <link rel="stylesheet" href="css/stylesheet.css?v=2">
        <style>
			body{
				width:1200px;
			}
        </style>
    </head>
    <body>
    <form action="buscar.php" method="post" enctype="multipart/form-data">
    <div align="center">
    Búsqueda Por Email
    <input name="email" type="text" id="email" />
    <input name="Enviar" type="submit" id="Enviar" value="Enviar"/></div></form>
    	<table width="100%" border="1">
          <tr class="head">
            <td>Foto</td>
            <td>Título</td>
            <td>Autor</td>
            <td>Email</td>
            <td>Fecha</td>
            <td>Video</td>
          </tr>
         <?php 
		 	$email = @$_POST['email'];
		 	$sql = @mysql_query ("SELECT * FROM noticias WHERE email like '%$email%'");
			
			while($row = mysql_fetch_object($sql)){
		 ?>
          <tr class="corpse">
            <td><img src="uploads/<?php echo $row->foto1; ?>"height="250" width="250" /></td>
            <td><?php echo $row->titulo; ?></td>
            <td><?php echo $row->autor; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->fecha; ?></td>
            <td><?php echo $row->video; ?></td>
            <td>
            <a id="borrar" href ="cambiosNoticias.php?&id=<?php echo $row->id; ?>">Modificar</a></td>
            <td><a href="borrar.php?id=<?php echo $row->id ?>">Borrar</a></td>
          <!--   <td><button id = "boton" name="enviar" value="borrar">
                Eliminar
            </button></td> -->
          </tr>
		  <?php } ?>

        </table>
    </body>
</html>
