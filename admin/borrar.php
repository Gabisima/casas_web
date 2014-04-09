       <?php $id = @$_GET['id'];
          $sql = mysql_query("SELECT * FROM noticias WHERE id = '$id'");
	while($row = mysql_fetch_object($sql)){
        ?><input type="text" name="id" id="id" value="<?php echo $row->id; ?>" >
        <?php } ?>
        <?php
        $id = @$_GET['id'];
        mysql_query("DELETE FROM noticias WHERE id = '$id'"); 
        echo "Publicación Eliminada";
        ?>
        <a href="buscar.php">Regresar</a>
