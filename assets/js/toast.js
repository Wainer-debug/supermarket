function alerta(btn_clik){

    var name_cancion = document.getElementById(btn_clik);
    var name_cancion = name_cancion.innerHTML;
    toastr.success('Canción '+name_cancion+' enviada', 'Cantina del Poli',{"progressBar": true,});
}