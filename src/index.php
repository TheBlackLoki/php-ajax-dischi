<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="https://kit.fontawesome.com/4f5771c9fa.js" crossorigin="anonymous"></script>
    <?php
    require_once '../src/php/db.php';
     ?>
    <title></title>
  </head>
  <body>
    <header>
        <img src="img/spotifyIcon.png" alt="">
    </header>
    <main>
      <div class="libreriaMusica">
        <?php
        foreach ($dischi as $brano) {
          echo '<div class="brano">
          <img src="'.$brano["poster"].'" alt="">
          <h3>'.$brano["title"].'</h3>
          <span>'.$brano["author"].'</span>
          <span>'.$brano["year"].'</span></div>';
        }
        ?>
      </div>
    </main>

    <!-- <script id="dischiMusicali" type="text/x-handlebars-template">
      <div class="brano">
          <img src="{{cover}}" alt="">
          <h3>{{title}}</h3>
          <span>{{author}}</span>
          <span>{{year}}</span>
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js" charset="utf-8"></script>
  </body>
</html>
