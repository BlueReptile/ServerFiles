<?php
echo extension_loaded('openssl')? "OK" : "Nao tem";
require 'PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->IsSMTP();        // Ativar SMTP
$mail->SMTPDebug = false;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
$mail->SMTPAuth = true;     // Autenticação ativada
$mail->SMTPSecure = 'ssl';  // SSL REQUERIDO pelo GMail
$mail->Host = 'smtp.gmail.com'; // SMTP utilizado
$mail->Port = 465;
$mail->Sendmail = 'C:\wamp64\sendmail\sendmail.exe -t';
// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'solowingphanzer@gmail.com';
$mail->Password = 'Kalango321';

$mail->setFrom('solowingphanzer@gmail.com', 'Jeff');
$mail->addAddress('callmekalango@gmail.com', 'Jorginho');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
$mail->SMTPDebug = 4;
$mail->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
));
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}