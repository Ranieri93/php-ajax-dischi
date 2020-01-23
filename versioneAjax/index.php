<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/main.css">
        <title> musica versione AJAX </title>
    </head>
    <body>

        <main>
            <div class="container">
                <div id="dischiContainer" class="d-flex flex-wrap justify-content-around"></div>
            </div>
        </main>
        <script id="card-template" type="text/x-handlebars-template">
            <div class="singlecard" data-genere="{{ genre }}">
                <img class="img-fluid" src="{{ coverImg }}" alt="coverImg of {{ songTitle }} played by {{ author}}">
                <p> {{ songTitle }} </p>
                <small>{{ author }}</small>
                <small>{{ year }}</small>
            </div>
        </script>
        <script src="public/js/main.js"></script>
    </body>
</html>
