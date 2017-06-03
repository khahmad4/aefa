


<?php
$to      = 'Ahmad.hassan11@hotmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: ahmad.hassan95.ah@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>