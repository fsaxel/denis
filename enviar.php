<?php
    $destino = "denissmite@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;
    mail($destino, "Nuevo Mensaje De la Pagina de DeNiisS", $contenido);
    header("Location: contactog.html");
?>