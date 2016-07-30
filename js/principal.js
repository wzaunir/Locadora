$(document).ready(function() {

    var usuario = document.cookie.split('=');

    usuario = decodeURIComponent(usuario[1]);
    usuario = JSON.parse(usuario);

    $("#nomeusuario").html(usuario.nome + (' (logout)'));

    $("#nomeusuario").click(function(e) {
        e.preventDefault();
        var data = new Date();
        data.setHours(-1);

        document.cookie = "locadora=off; expires=" + data.toUTCString() + " ; path=/";
        window.location = '/index.php';
    });

});