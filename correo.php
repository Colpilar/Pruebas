<?php

$destinatario = 'gracesilvaduarte@outlook.es';

$nombre = $_POST['nombre'];
$tipo_tramite = $_POST['tipo_tramite'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $POST['comments'];

$header = "Se ha recibido un mensaje desde la Página Colpilar Cúcuta";

$mensajecompleto = $comments." \n Atentamente: $nombre. Teléfono: $phone";

mail($destinatario, $tipo_tramite, $mensajecompleto, $header);

echo "<script>alert('Mensaje Enviado Exitosamente')</script>";
echo "<script>setTimeout(\"location.href='contact.html'\", 1000)</script>";

?>
