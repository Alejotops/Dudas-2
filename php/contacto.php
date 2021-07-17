<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$para = "xxgtamasterxx25@gmail.com";
$asunto = "Nuevo Mensaje de $nombre";

$mensaje = "
    Nombre del Remitente: ".$nombre." \n
    Correo: ".$email." \n
    Mensaje: ".$mensaje."\n
";

mail($para, $asunto, utf8_decode($mensaje));

header("location: dudas.html");


?>