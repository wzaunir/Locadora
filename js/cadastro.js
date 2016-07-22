$(document).ready(function() {

    var d = new Date();
    var ano = d.getFullYear();

    listarAnos(ano);

    function listarAnos(ano) {

        for ($x = ano; $x >= 1915; $x--) {

            $("#ano").append('<option value="' + $x + '">' + $x + '</option>');
        }
    }

});
