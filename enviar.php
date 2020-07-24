<?php

$destino = 'punkstar_ap@hotmail.com';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde MAESMESA";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido); 
echo "<script> alert('Enviado exitosamente');</script>";
echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";



?>