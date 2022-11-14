<?php

$nombre = $_POST['nombre'];
$correo  = $_POST['correo'];
$tema = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//Info email
$destinario = "abeldiaz2307@gmail.com";
$asunto = "Contacto desde portafolio";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje $mensaje \n";
$carta .= "Enviado el: " . date('d/m/Y', time());


//Send msj
mail($destinario, $asunto, $carta);
header('Location:index.html');

?>
