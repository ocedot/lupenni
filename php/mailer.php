<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require 'vendor/autoload.php';


/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('info@lupenni.com', 'Darth Vader');

   /* Add a recipient. */
   $mail->addAddress('rodrigo19-1_1998@hotmail.com', 'Emperor');

   /* Set the subject. */
   $mail->Subject = 'Force';

   /* Set the mail message body. */
   $mail->Body = 'There is a great disturbance in the Force.';

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}