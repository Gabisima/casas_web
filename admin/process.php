<?php
    if (isset($_GET['content'])) $php_var = $_GET['content'];
    else $php_var = "<br />content is not set!";
 
    echo $php_var;
?>