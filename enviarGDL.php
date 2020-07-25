<?php

$destino = "punkstar_ap@hotmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde MAESMESA";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto MAESMESA", $contenido); 
header('Location:index2.html')
//echo "<script>alert('Correo enviado exitosamente')</script>";
//echo "<script> setTimeout(\"location.href='index.html'\", 500)</script>";

?>