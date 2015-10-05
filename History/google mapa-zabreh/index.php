<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> AFK 1st project</title>
        <link rel="stylesheet" href="styl.css" type="text/css" />
         <script src="https://maps.googleapis.com/maps/api/js"></script>
         <script>
      function initialize() {
          var myLatLng = {lat: 49.8808694, lng: 16.8771643};
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(49.8808694,16.8771643),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'neurčité gymnázium!'
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </head>
    <body>
        <h1>Main Title</h1>
        <p>This is our 1st project</br>
        We test Cloud 9 right now, so it'll be about us :D I hope, that CIA or 
        FBI agent, who read it is a good guy and won't tell to somebody, what 
        we'll write there...
        </p>
        <p>
        <h5><u>Fous:</u></h5>
        Ahoj, teď už česky, ať to nemají američani tak jednoduché, zjistit co 
        tady píšeme :D </br>
        Já a KlimiCZ jsme spolužáci na jednom gymnáziu v Olomouckém kraji. Oba 
        máme vysokou náklonnost k počítačům a tuto stránku tvořímě jakožto test 
        Cloud 9 IDE. Pracujeme s ním asi 30 minut a už se Klimi rozhodl, že bude
         programovat pouze online :D Já si to se svou paranoiou moc netroufnu, 
         ale tato stránka bude tvořená pouze na free verzi Cloud 9 ID. Doufám, 
         že když už jsem někdo náhodou (nebo i nehodou, jak je ctěná libost)
          zabrousí, bude s naší prací spokojen. Jelikož já se HTML a CSS teprve 
          učím, tak na mě bude obsahová stránka webu, kdežto Klimi bude mít na 
          starost design. Snad se bude líbit ;)
        </p>
          <div id="map"></div>
        <footer>
            <p>
                <strong>
                Made by &copy;KlimiCZ &amp; Fous
                </strong>
            </p>
            </footer>
    </body>
</html>