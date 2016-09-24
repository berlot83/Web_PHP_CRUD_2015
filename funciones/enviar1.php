<?php
$nombre = $_POST['primer_nombre'];
$apellido= $_POST['apellido'];
$email = $_POST['email'];
$telefono= $_POST['telefono'];
$comentarios= $_POST['comentarios'];


$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . $apellido . $telefono.  ",
 de la empresa  " ."\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'berlot83@yahoo.com.ar';
$asunto = 'Asunto del mail recibido';

@mail($para, $asunto, $mensaje, $header);

echo 'Mensaje enviado correctamente';
?>