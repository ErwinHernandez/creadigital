<?php

// Llamado a los campos
$nombre = $_POST['f_name'];

$apellido = $_POST['l_name'];

$correo = $_POST['email'];

$telefono = $_POST['phone'];

$mensaje = $_POST['con_message'];

// Datos para el correo

$destinatario = "creadigital29@gmail.com";

$asunto = "Posible Cliente";

$carta = "De: $nombre.$apellido \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando mensaje

mail($destinatario,$asunto,$carta );