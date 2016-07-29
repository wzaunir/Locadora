$(document).ready(function() {

    getCatalogo('all');

    $("#filtro button").click(function() {
        $(this).parent().find('button').removeClass('active');
        $(this).addClass('active');

        getCatalogo($(this).attr('data-target'));

    });

    $("#filtro-categoria").change(function() {

        getCatalogo('', $(this).val());


    });
    $("#busca").keyup(function(){
        
       var busca = {
           busca: $(this).val()
       }
       console.log(busca);
       getCatalogo();
    });
});





function getCatalogo() {
    var parametro = {
        filtro: $("#filtro button.active").attr('data-target'),
        categoria: $("#filtro-categoria").val(),
        busca: $("#busca").val()
    };
    $(".table-filter tbody").fadeOut();
    $(".table-filter tbody").empty();
    $.getJSON("/model/catalogo.php", parametro, function(data) {

        if (data.length == 0) {

            $('<tr><td>Categoria não possui filmes cadastrados. Aguarde ... </td></tr>').appendTo(".table-filter tbody");
            return;
        }
        $(data).each(function(i, elem) {
            var lancamento = (elem.tipo == "lancamento") ? 'glyphicon glyphicon-star star-lancamento' : 'glyphicon glyphicon-star star-catalogo';


            var filme = $('<tr><td><div class="ckbox">' +
                    '<input type="checkbox" id="checkbox1">' +
                    '<label for="checkbox1"></label>' +
                    '</div>' +
                    '</td>' +
                    '<td>' +
                    '<i class="' + lancamento + '"></i>' +
                    '</td>' +
                    '<td>' +
                    '<div class="media">' +
                    '<a href="#" class="pull-left">' +
                    '<img src="img/'+elem.imagem+'" class="media-photo img-thumbnail" width=150>' +
                    '</a>' +
                    '<div class="media-body">' +
                    '<h4 class="title">' +
                    '<a href="/cadastro.php?id=' + elem.id + '">' + elem.nome + '</a>' +
                    '<span class="pull-right"> (' + elem.categoria + ') </span>' +
                    '<span class="media-meta pull-right">' + elem.ano + '</span> ' +
                    '</h4>' +
                    '<p class="summary">' + elem.sinopse + '</p>' +
                    '<span class="pull-right">Quantidade disponível: <strong>' + elem.disponivel + '</strong></span>' +
                    '</div>' +
                    '</div>' +
                    '</td></tr>');

            $(".table-filter tbody").append(filme);

        });
    });
    $(".table-filter tbody").fadeIn();
}


