<?php

$email = $_POST['email'];

// Datos para el correo

$destinatario = "creadigital29@gmail.com";

$asunto = "Suscriptor";

$suscribe = "De: $email";

// Enviando mensaje

mail($destinatario,$suscribe);