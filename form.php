<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $deporte = $_POST['deporte'];
    $capitan = $_POST['capitan'];
    $telefono = $_POST['telefono'];
    $mail = $_POST['mail'];

    $header = "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por: " . $nombre . "\r\n";
    $mensaje .= "Su E-mail es: " . $mail . "\r\n";
    $mensaje .= "Nombre del Equipo: " . $nombre . "\r\n";
    $mensaje .= "Deporte: " . $deporte . "\r\n";
    $mensaje .= "Capitán del Equipo: " . $capitan . "\r\n";
    $mensaje .= "Teléfono de Contacto: " . $telefono . "\r\n";
    $mensaje .= "Enviado el: " . date('d/m/Y', time());

    $para = 'dcontreras44@itfip.edu.co';
    $asunto = 'Formulario de ItfipSport';

    if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
        $_SESSION['mensaje'] = 'Formulario enviado correctamente';
    } else {
        $_SESSION['mensaje'] = 'Error al enviar el formulario';
    }

    header('Location: registro.html');
} else {
    header('Location: registro.html');
}
?>
