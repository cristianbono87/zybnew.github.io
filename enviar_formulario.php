<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "tu_correo@gmail.com"; // Dirección de correo donde se enviará el formulario
  $subject = "Formulario de contacto"; // Asunto del correo

  // Obtener los datos ingresados en el formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Crear el contenido del correo
  $message = "Has recibido un nuevo mensaje a través del formulario de contacto:\n\n";
  $message .= "Nombre: " . $nombre . "\n";
  $message .= "Correo electrónico: " . $email . "\n";
  $message .= "Mensaje: " . $mensaje;

  // Enviar el correo
  if (mail($to, $subject, $message)) {
    echo "Gracias por contactarnos. Te responderemos a la brevedad.";
  } else {
    echo "Hubo un error al enviar el formulario. Por favor, intenta nuevamente.";
  }
}
?>
