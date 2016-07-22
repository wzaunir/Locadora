$(document).ready(function() {

    $.getJSON("/model/catalogo.php", function(data) {

        $(data).each(function(i, elem) {
            var lancamento = (elem.tipo == "lancamento") ? 'glyphicon glyphicon-star-empty' : 'glyphicon glyphicon-star';
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
                    '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">' +
                    '</a>' +
                    '<div class="media-body">' +                    
                    '<h4 class="title">'
                    + elem.nome +                    
                    '<span class="pull-right"> (' + elem.categoria + ') </span>' +
                    '<span class="media-meta pull-right">' + elem.ano + '</span> ' +
                    '</h4>' +
                    '<p class="summary">' + elem.sinopse + '</p>' +
                    '</div>' +
                    '</div>' +
                    '</td></tr>');

            $(".table-filter tbody").fadeIn().append(filme);
        });
    });

});



