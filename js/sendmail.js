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
    $.ajax({
        type: "POST",
        url: "../php/mailer.php",
        data: str,
        success: function(msg){
            if(msg == '1') {
                var paragraph = document.getElementById("msj-msj-enviado");
                var text = document.createTextNode("Gracias por comunicarte conmigo, te responderé a la brevedad ♥");
                paragraph.appendChild(text);
                msjEnviado()
            }
            else {
                var paragraph = document.getElementById("msj-msj-enviado");
                var text = document.createTextNode("Ups! Algo salio mal😢");
                paragraph.appendChild(text);
                msjEnviado()
            }
        }
    });
}