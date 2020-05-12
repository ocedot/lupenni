<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'vendor/autoload.php';


/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

$mail->setFrom('admin@example.com');
$mail->addAddress('rodrigo19-1_1998@hotmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = 'Hello! use PHPMailer to send email using PHP';
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = '<a href="mailto:rodrigo19.1.1998@gmail.com">rodrigo19.1.1998@gmail.com</a>';

//Set the password of your gmail address here
$mail->Password = '19-Enero-1998';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>