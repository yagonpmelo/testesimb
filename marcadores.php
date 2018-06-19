<!-- Página apois logar -->
<?php $id = $_GET['id']; ?>
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Localização de Usuários</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
        padding: 10px 0 0;
        clear: both;
        margin-left: 400px;
        margin-top: 70px;
      }
      #a{
        height: 80%;
        padding: 10px 0 0;
        clear: both;
        margin-left: 80px;
        margin-top: -500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <?php include_once "menu.php" ?>
    <div id="map"></div><br><br>
    <div id="a"> 
      <a href="marcadores.php?id=<?=$id?>" class="btn btn-custom btn-lg">Cadastre seu Local</a><br>
      <a href="mapa.php?id=<?=$id?>" class="btn btn-custom btn-lg">Veja sua Rota</a><br>
      <a href="sair.php" class="btn btn-custom btn-lg" style="margin-left: 70px;">Sair</a>
    </div>

    <script>
      /*var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };*/

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-7.840372, -34.909090),
          zoom: 5
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('resultado.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var destino = markerElem.getAttribute('destino');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              //var icon = customLabel['R'] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                //label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3frGfKLCczK2SjrxuYMrJg5O_LL45boA&callback=initMap">
    </script>
  </body>
</html>