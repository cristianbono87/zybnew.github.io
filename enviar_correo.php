<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "tu_correo@gmail.com"; // Dirección de correo donde se enviará el mensaje
  $subject = "Suscripción a actualizaciones"; // Asunto del correo

  // Obtener el correo electrónico ingresado en el formulario
  $email = $_POST["email"];

  // Crear el contenido del correo
  $message = "Has recibido una nueva suscripción:\n\n";
  $message .= "Correo: " . $email;

  // Enviar el correo
  if (mail($to, $subject, $message)) {
    echo "¡Gracias por suscribirte! Pronto recibirás actualizaciones.";
  } else {
    echo "Hubo un error al enviar el correo. Por favor, intenta nuevamente.";
  }
}
?>
