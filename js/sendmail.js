function sendmail() {
    var nombre = document.getElementById('nombre-contacto-form').value;
    var mail = document.getElementById('mail-contacto-form').value;
    var asunto = document.getElementById('asunto-contacto-form').value;
    var telefono = document.getElementById('telefono-contacto-form').value;
    var mensaje = document.getElementById('mensaje-contacto-form').value;

    var str = {
        nombre: nombre,
        mail: mail,
        asunto: asunto,
        telefono: telefono,
        mensaje: mensaje
    };

    alert(str);

    $.ajax({
        type: "POST",
        url: "../php/mailer.php",
        data: str,
        success: function(msg){
           alert(msg);
            if(msg == 'OK') {
                alert('Mensaje enviado con exito');
            }
            else {
                alert('Error al enviar el mensaje');
            }
            
        }
    });
}