$(document).ready(function() {

    var d = new Date();
    var ano = d.getFullYear();

    listarAnos(ano);

    function listarAnos(ano) {

        for ($x = ano; $x >= 1915; $x--) {

            $("#ano").append('<option value="' + $x + '">' + $x + '</option>');
        }
    }

    $("#form-cadastro").submit(function(event) {
        event.preventDefault();
        var dados = $(this).serialize();


        validaForm(this);
        return;

        $.post("model/cadastro.php", dados).done(function(retorno) {

            $("#alertas").empty(); //remove o conteudo do HTML


            var retorno = JSON.parse(retorno);
            /*trata o retorno do ajax*/
            if (retorno.status == 'ok') {
                var alerta = $('<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        '<i class="glyphicon glyphicon-thumbs-up" ></i><strong> Sucesso!</strong> O filme foi adicionado corretamente.' +
                        '</div>');
                $('input,textaera,select').val('');
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



});
function validaForm(form) {

    $(form).find('.form-group').removeClass('has-error');
    $(form).find('span.glyphicon-remove').remove('span');
    var valido = true;
    
    $(form).find('input,select,textarea').each(function(idx, elem) {
        if ($(elem).val() == '') {

            $(elem).parent().parent().addClass('has-error');
            valido = false;
        }

       if($(elem).attr('type') == 'text'){
           
           $(elem).after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>                                <span class="sr-only">(success)</span>');
           
       }
        
    })

return valido;



}