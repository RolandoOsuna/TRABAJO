<?php 
    $destinatario = 'info@rcconsultora.com.mx';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $header = 'Enviado desde https://rcconsultora.com.mx/';
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $nombre, $mensajeCompleto, $header);
    echo('<p class="alert alert-primary" role="alert")>Su correo fue enviado exitosamente</p>');
?>