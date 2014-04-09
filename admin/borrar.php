       <?php 
       include('conexion.php');
       $id = @$_GET['id'];

        mysql_query("DELETE FROM noticias WHERE id = '$id'"); 
        echo "Publicación Eliminada";
        ?>
        <div class="back">
            
            <a href="buscar.php">Regresar</a>
        </div>
