
<?php
  include 'data.php'; // inserisoco un file esterno con i miei dati PHP
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Ajax Dischi</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <link rel="stylesheet" href="dist/css/style.css">
    </head>
    <body>
      <header>
        <div class="header-box-img">
          <a href="index.php"><img src="https://pluspng.com/img-png/spotify-logo-png-icons-logos-emojis-tech-companies-2000.png" alt="https://pluspng.com/img-png/spotify-logo-png-icons-logos-emojis-tech-companies-2000.png"></a>
        </div>
      </header>
      <main>
        <div class="container-main">
          <div class="container-main-title">
            <h2>SELEZIONE ALBUM MUSICALI</h2>
          </div>
          <div class="container-main-cards">
             <?php foreach ($albums as $key => $album): ?>
               <div class="card">
                 <div class="card-img">
                   <img src="img/album<?php echo $album['img'] ?>.jpg" alt="img/album_uno">
                 </div>
                 <div class="card-description">
                   <p><span>Titolo Album: </span><span><?php echo $album['title'] ?></span></p>
                   <p><span>Artista: </span><span></span><?php echo $album['artist'] ?></p>
                   <p><span>Anno: </span><span><?php echo $album['year'] ?></span></p>
                 </div>
               </div>
             <?php endforeach; ?>
          </div>
        </div>
      </main>
      <footer>
        <ul>
          <li>Informazioni legali</li>
          <li>Centro sulla privacy</li>
          <li>Informativa sulla privacy</li>
          <li>Cookies</li>
          <li>Info annunci</li>
        </ul>
      </footer>

      <script id="template-card" type="text/x-handlebars-template">
        <div class="card">
          <div class="card-img">
            <img src="img/album_{{cover}}" alt="img/album_uno">
          </div>
          <div class="card-description">
            <p><span>Titolo Album: </span><span>{{titolo}}</span></p>
            <p><span>Artista: </span><span></span>{{Artista}}</p>
            <p><span>Anno: </span><span>{{anno}}</span></p>
          </div>
        </div>
      </script>


      <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
