<?php
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$to      = 'info@dreamsagency.net';

$subject = 'Website Change Request';

$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: " . strip_tags($email) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>This is strong text</strong> while this is not.</p>';


mail($to, $subject, $message, $headers);