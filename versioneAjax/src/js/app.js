
var $ = require('jquery');

$(document).ready(function(){

    const Handlebars = require("handlebars");
    var source = $("#card-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        'url':'data.php',
        'method': 'GET',
        'dataType': 'json',// posso inserire questa istruzione alla chiamata per il parse
        'success': function(data) {
            //var newdata = JSON.parse(data); // o farlo direttamente nella function tramite JSON.parse
            var dischi = data.response;
            for (var i = 0; i < dischi.length; i++) {
                var disco_singolo = dischi[i];
                var copertinaImg = disco_singolo.poster;
                var titolo = disco_singolo.title;
                var autore = disco_singolo.author;
                var anno = disco_singolo.year;
                var genere = disco_singolo.genre;
                var context = {
                    coverImg: copertinaImg,
                    songTitle: titolo,
                    author: autore,
                    year: anno,
                    genre: genere
                };
                var html = template(context);
                $('#dischiContainer').append(html);
            }
        },
        'error': function() {
            alert('error');
        }
    });

});
