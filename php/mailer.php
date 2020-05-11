<?php

/* Contact form script configuartion */

// Enter your email, where you want to receive the messages.
$contact_email_to = "rodrigo19-1_1998@hotmail.com";

// Subject prefix
$contact_subject_prefix = "Lupenni.com: ";

// Name too short error text
$contact_error_name = "Nombre demasiado corto.";

// Email invalid error text
$contact_error_email = "E-mail incorrecto.";

// Subject too short error text
$contact_error_subject = "Asunto demasiado corto.";

// Message too short error text
$contact_error_message = "Mensaje demasiado corto.";

/********** Do not edit from the below line ***********/

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    die('Sorry Request must be Ajax POST');
}

if( isset($_POST) ) {

    $name = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST["asunto"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["mensaje"], FILTER_SANITIZE_STRING);

    if(strlen($name)<4){
        die($contact_error_name);
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die($contact_error_email);
    }

    if(strlen($message)<3){
        die($contact_error_subject);
    }

    if(strlen($message)<3){
        die($contact_error_message);
    }

    $sendemail = mail($contact_email_to, $contact_subject_prefix . $subject, $message,
         "From: Lupenni <info@lupenni.com>" . PHP_EOL
        ."Reply-To: ".$email . PHP_EOL
        ."X-Mailer: PHP/" . phpversion()
    );

    if( $sendemail ) {
        echo 'OK';
    } else {
        echo "Could not send mail! Please check your PHP mail configuration. $name --------- $email -------------- $subject -------------- $message -------------";
    }
}
?>
