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

$para = 'uribe.gabs@gmail.com';
    if(mail($para,$mensaje,$header)){
      $result = '<div class="result_ok">Email enviado correctamente </div>';
        // Reset
        $_POST['nombre'] = '';
        $_POST['mail'] = '';
        $_POST['telefono'] = '';
        $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
?>