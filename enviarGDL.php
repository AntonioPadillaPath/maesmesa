<?php

$destino = "ventas@maesmesa.com.mx";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde MAESMESA";

$contenido = "NOMBRE: \n" . $nombre . "\n\nCORREO: \n" . $correo . "\n\nTELEFONO: \n" . $telefono . "\n\nMENSAJE: \n" . $mensaje;

mail($destino, "Contacto MAESMESA", $contenido); 
header('Location:index.html')
//echo "<script>alert('Correo enviado exitosamente')</script>";
//echo "<script> setTimeout(\"location.href='index.html'\", 500)</script>";


?>