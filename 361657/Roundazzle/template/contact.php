<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["message-name"];
    $email = $_POST["message-email"];
    $subject = $_POST["message-subject"];
    $message = $_POST["message-message"];
    
    $to = "jonitavila07@gmail.com"; // Tu dirección de correo electrónico
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
