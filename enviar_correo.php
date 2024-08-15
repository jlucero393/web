<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $to = "jose.lucero@yopmail.com"; // Reemplaza con el correo al que quieres que lleguen los mensajes
    $subject = "Nuevo mensaje de contacto de $nombre";
    $message = "Nombre: $nombre\n";
    $message .= "Email: $email\n\n";
    $message .= "Mensaje:\n$mensaje";
    
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Su mensaje ha sido enviado con éxito. Gracias por contactarnos.";
    } else {
        echo "Lo sentimos, hubo un error al enviar su mensaje.";
    }
} else {
    echo "Acceso no autorizado";
}
?>