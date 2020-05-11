<?php
$from = 'Darth Vader <info@lupenni.com>';
$to = 'Emperor <rodrigo19-1_1998@hotmail.com>';
$subject = 'Force';
$message = 'There is a great disturbance in the Force.';
$headers = 'From: ' . $from;
 
if (!mail($to, $subject, $message, $headers))
{
    echo "Error.";
}
else
{
    echo "Message sent.";
}

?>
