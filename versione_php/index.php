<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/main.css">
        <title> musica versione PHP </title>
    </head>
    <body>
        <main>
            <div class="container d-flex flex-wrap justify-content-around">
                <?php  foreach ($dischi as $disco) { ?>
                    <div class="card">
                        <img class="img-fluid" src=" <?php echo $disco['poster']; ?>" alt="">
                        <p><?php echo $disco['title']; ?></p>
                        <small class="artista"><?php echo $disco['author']; ?></small>
                        <small class="anno"><?php echo $disco['year']; ?></small>
                    </div>
                    <?php
                }  ?>
            </div>
        </main>
    </body>
</html>
