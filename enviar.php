<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP5/";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'oarzate@itesm.mx';
mail($para, utf8_decode($mensaje), $header);

    if(mail($mail,$mensaje,$header)){
      $result = '<div class="result_ok">Email enviado correctamente </div>';
        // Reset
        $_POST['nombre'] = '';
        $_POST['mail'] = '';
        $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
?>