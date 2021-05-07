<?php 
// LLamando los campos del formulario de contacto.

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo.

$destinatario = "elmergustavo79@gmail.com";
$asunto = "Contacto desde Total Maderas C.A.";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n \n \n";
$carta .= "Mensaje: $mensaje";

// Enviando mensaje

mail($destinatario, $asunto, $carta);
header("Location:index.html");

?>