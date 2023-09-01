<?php
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$to      = 'info@dreamsagency.net';
$subject = 'Request';
$message = " 
Email $email 
name $name
text $text
";

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
mail($to, $subject, $message, $headers);
header('Refresh: 5; URL=index.php');
echo 'Через 5 секунд Вы будете автоматически перенаправлены на другую страницу.';
exit;

