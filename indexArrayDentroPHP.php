
<?php
// UTILIZZO PHP DENTRO IL FILE INDEX
  $albums = [
    [
      'title' => 'Titolo Uno',
      'artist' => 'Queen Uno',
      'year' => '1999',
      'img' => '_uno',
    ],
    [
      'title' => 'Titolo Due',
      'artist' => 'Queen Due',
      'year' => '2000',
      'img' => '_due',
    ],
    [
      'title' => 'Titolo Tre',
      'artist' => 'Queen Tre',
      'year' => '2001',
      'img' => '_tre',
    ],
    [
      'title' => 'Titolo Quattro',
      'artist' => 'Queen Quattro',
      'year' => '2002',
      'img' => '_quattro',
    ],
    [
      'title' => 'Titolo Cinque',
      'artist' => 'Queen Cinque',
      'year' => '2003',
      'img' => '_cinque',
    ],
    [
      'title' => 'Titolo Sei',
      'artist' => 'Queen Sei',
      'year' => '2004',
      'img' => '_sei',
    ],]

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
             <?php foreach ($albums as $key => $value): ?>
               <div class="card">
                 <div class="card-img">
                   <img src="img/album<?php echo $value[img] ?>.jpg" alt="img/album_uno">
                 </div>
                 <div class="card-description">
                   <p><span>Titolo Album: </span><span><?php echo $value[title] ?></span></p>
                   <p><span>Artista: </span><span></span><?php echo $value[artist] ?></p>
                   <p><span>Anno: </span><span><?php echo $value[year] ?></span></p>
                 </div>
               </div>
             <?php endforeach; ?>
            <!-- <div class="card">
              <div class="card-img">
                <img src="img/album_uno.jpg" alt="img/album_uno">
              </div>
              <div class="card-description">
                <p><span>Titolo Album: </span><span>AAAA</span></p>
                <p><span>Artista: </span><span></span>Queen</p>
                <p><span>Anno: </span><span>1999</span></p>
              </div>
            </div>
            <div class="card">
              <div class="card-img">
                <img src="img/album_uno.jpg" alt="img/album_uno">
              </div>
              <div class="card-description">
                <p><span>Titolo Album: </span><span>AAAA</span></p>
                <p><span>Artista: </span><span></span>Queen</p>
                <p><span>Anno: </span><span>1999</span></p>
              </div>
            </div> -->
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
