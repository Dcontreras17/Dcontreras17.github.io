<?php

$nombre = $_POST['nombre'];
$deporte = $_POST['deporte'];
$capitan = $_POST['capitan'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];

$header = "From: " . $mail . "\r\n";
$header .= "Content-Type: text/plain; charset=utf-8\r\n";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su E-mail es: " . $mail . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'dcontreras44@itfip.edu.co';
$asunto = 'sitio web de ItfipSport';

mail($para, $asunto, utf8_decode($mensaje), $header);
header('Location: registro.html');
?>
