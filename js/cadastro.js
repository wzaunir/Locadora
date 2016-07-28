$(document).ready(function() {

    var d = new Date();
    var ano = d.getFullYear();

    listarAnos(ano);

    function listarAnos(ano) {

        for ($x = ano; $x >= 1915; $x--) {

            $("#ano").append('<option value="' + $x + '">' + $x + '</option>');
        }
    }

    id = getId();
    if (id != null) {
        $.getJSON('/model/cadastro.php', {id: id})
        .done(
        function(retorno) {
             $("#id").val(retorno.id);
            $("#ano").val(retorno.ano);
            $("#nome").val(retorno.nome);
            $("#sinopse").val(retorno.sinopse);
            $("#disponivel").val(retorno.disponivel);
            var cat = retorno.categoria.split(',');
            $("[name=tipo]").each(function(i, elem) {
                if ($(elem).val() == retorno.tipo) {
                    $(elem).prop('checked', true);
                }
            });
            $("[name=midia]").each(function(i, elem) {
                if ($(elem).val() == retorno.midia) {
                    $(elem).prop('checked', true);
                }
            });
            $("#categoria").val(cat);
            $("#cadastrar").html('Alterar');
        });
                
    }

    $("#form-cadastro").submit(function(event) {
        event.preventDefault();
        var dados = $(this).serialize();

        validaForm(this);

        $.post("model/cadastro.php", dados).done(function(retorno) {

            if($('#id').val() == '' ){
                $("#alertas").empty(); //remove o conteudo do HTML
                var msg = 'adicionado';
            }else{
                var msg = 'alterado';
            }

            var retorno = JSON.parse(retorno);
            /*trata o retorno do ajax*/
            if (retorno.status == 'ok') {
                var alerta = $('<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        '<i class="glyphicon glyphicon-thumbs-up" ></i><strong> Sucesso!</strong> O filme foi '+msg+' corretamente.' +
                        '</div>');
                if(msg === 'adicionado'){
                    $('input,textaera,select').val('');
                }
            } else {
                var alerta = $('<div class="col-md-8 col-md-offset-2 alert alert-danger alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        '<i class="glyphicon glyphicon-thumbs-up" ></i>strong> Erro!</strong> O filme não foi adicionado. Tente novamente em instantes.' +
                        '</div>');

            }
            $('#form-cadastro div.form-group:first').focus();
            $("#alertas").append(alerta);
        }); //


    }); //Fim Submit

    $('#disponivel').keydown(function(event) {

        if ((event.keyCode >= 48 && event.keyCode <= 59) || (event.keyCode >= 96 && event.keyCode <= 105) || (event.keyCode >= 35 && event.keyCode <= 40) || event.keyCode == 20) {
            return true;
        } else {
            return false;
        }

    });

});



function validaForm(form) {

    var valido = true;

    $(form).find('input[type="text"],select,textarea').each(function(idx, elem) {

        $(elem).parent().parent().removeClass('has-error');
        if ($(elem).val() == '') {

            $(elem).parent().parent().addClass('has-error');
            valido = false;
        }

        if ($(elem).attr('type') == 'text') {

            $(elem).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>                                <span class="sr-only">(success)</span>');

        }

    })

    return valido;



}
function getId() {


    var uri = window.location.search;
    var dado = uri.split("=");
    return dado[1];


}