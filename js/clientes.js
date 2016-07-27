$(document).ready(function() {

    $('#seletor-data .input-group.date').datepicker({
        format: "dd/mm/yyyy",
        endDate: "today",
        todayBtn: "linked",
        language: "pt-BR",
        autoclose: true
    });

$("#data-nascimento").mask('00/00/0000');

    var SPMaskBehavior = function(val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

    $('#telefone').mask(SPMaskBehavior, spOptions);



////////////BUSCA CADASTRO DE CLIENTE

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

////////FORMULARIO DE CADASTRO DE CLIENTES /////////////
    $("#form-cliente").submit(function(event) {
        event.preventDefault();
        var dados = $(this).serialize();

        //validaForm(this);

        $.post("model/clientes.php", dados).done(function(retorno) {

            if ($('#id').val() == '') {
                $("#alertas").empty(); //remove o conteudo do HTML
                var msg = 'adicionado';
            } else {
                var msg = 'alterado';
            }
           
            var retorno = JSON.parse(retorno);
           
            
            /*trata o retorno do ajax*/
            if (retorno.status == 'ok') {
                var alerta = $('<div class="col-md-8 col-md-offset-2 alert alert-success alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        '<i class="glyphicon glyphicon-thumbs-up" ></i><strong> Sucesso!</strong> O filme foi ' + msg + ' corretamente.' +
                        '</div>');
                if (msg === 'adicionado') {
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


    });

    
});

function validaForm(form) {

    var valido = true;

    $(form).find('input,select,textarea').each(function(idx, elem) {

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

