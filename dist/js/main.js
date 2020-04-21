var source = $('#template-card').html();
var template = Handlebars.compile(source);

$.ajax({
  url: 'server.php',
  method: 'GET',
  success: function(data) {
    console.log(data);
    // se non usassimo la riga 4 di server.php JSON.parse(data)
    var albums = data;
    for (var i = 0; i < albums.length; i++) {
      var album =albums[i];
      console.log(album);
      var albumDati = {
        titolo: album.title,
        artista: album.artist,
        anno: album.year,
        cover: album.img

      };
      var templateAlbum = template(albumDati); // popolo con il template con le le chiavi degli oggetti(album)
      $(".container-main-cards").append(templateAlbum); // inseriamo il ns Template popolato nell HTML
    }
  },
  error: function(error) {
    alert('errore di comunicazione');
  }
});
