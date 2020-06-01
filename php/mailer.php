<?php

$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$asunto = $_POST["asunto"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$to = "lupennimaquillaje@gmail.com";
$subject = $asunto;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: hola@lupenni.com";

$txt = " 
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='theme-color' content='#b05cab'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='http://lupenni.com/css/estilos-gral.css'>
</head>
<body style='background-color:#333; font-family: Verdana;'>
    <img style='width:30%;padding-left:35%;margin-top:10px;' id='logolupenni'  src='http://lupenni.com/img/Logo@2x.png' alt=''>
    <div style='width:90%; margin-top:60px; padding: 5%; color: white;'>
        <h2>Nombre: $nombre</h2>
        <br><br>
        <h3>Asunto: $asunto</h3>
        <br><br>
        <h5>Telefono: $telefono</h5>
        <h5>Email: $mail</h5>
        <br><br>
        <h4>
            $mensaje
        </h4>
        <br><br><br>
        <a style='color: white; text-decoration: none; font-size: 14px; background-color: #056b87; padding: 7px 20px; margin-right: 30px;' href='mailto:$mail?subject=Respuesta:%20$asunto&body=Como%20estas%20$nombre?'>Responderle un correo</a>
        <br>
        <br>
        <br>
        <a style=' color: white; text-decoration: none; font-size: 14px; background-color: #b05cab; padding: 7px 20px;' href='tel:$telefono'>Realizar una llamada</a>
   
      </div>
</body>
</html>
";

echo mail($to,$subject,$txt,$headers);
?>