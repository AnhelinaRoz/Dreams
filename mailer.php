<?php
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$to      = 'info@dreamsagency.net';
$subject = 'the subject';
$message = 'hello';

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


