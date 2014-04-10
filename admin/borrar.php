       <?php 
       include('conexion.php');
       $id = @$_GET['id'];
       $tipo = @$_GET['tipo'];
       if ($tipo=="noticia") {
       	
	        mysql_query("DELETE FROM noticias WHERE id = '$id'"); 
	        echo "Publicación Eliminada";
    	}else
    	{
    		 mysql_query("DELETE FROM inmuebles WHERE id = '$id'"); 
        	echo "Inmueble Eliminado";
    	}
        ?>

        <div class="back">
            
            <a href="buscar.php">Regresar</a>
        </div>
