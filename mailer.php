<?php
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$to      = 'info@dreamsagency.net';
$subject = 'the subject';
$message = $text;
$headers = 'From: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);