var msj_open = false;
function msjEnviado(){
    if (msj_open) {
        var msj = document.getElementById('msj-enviado');
        msj.classList.remove('constru-fade-in');
        msj.classList.add("constru-fade-out");
        msj_open = false;
    }else{
        var msj = document.getElementById('msj-enviado');
        msj.classList.remove('constru-fade-out');
        msj.classList.add("constru-fade-in");
        msj_open = true;
    }
}