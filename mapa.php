<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Calcular distancia entre cidades (mapas e rotas)</title>
    <script src="http://code.jquery.com/jquery-1.8.1.js" type="text/javascript"></script>
    <style type="text/css">
      #forms{
        margin-left: 50px;
      }
    </style>
  </head>
  <body>
        <?php include_once "menu.php" ?>
    <!-- Parâmetro sensor é utilizado somente em dispositivos com GPS -->
    <script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyA3frGfKLCczK2SjrxuYMrJg5O_LL45boA"></script>
    <script type="text/javascript">
        function CalculaDistancia() {
            $('#litResultado').html('Aguarde...');
            //Instanciar o DistanceMatrixService
            var service = new google.maps.DistanceMatrixService();
            //executar o DistanceMatrixService
            service.getDistanceMatrix(
            {
                  //Origem
                  origins: [$("#txtOrigem").val()],
                  //Destino
                  destinations: [$("#txtDestino").val()],
                  //Modo (DRIVING | WALKING | BICYCLING)
                  travelMode: google.maps.TravelMode.WALKING,
                  //Sistema de medida (METRIC | IMPERIAL)
                  unitSystem: google.maps.UnitSystem.METRIC,
                  //Vai chamar o callback
              }, callback);
        }
        //Tratar o retorno do DistanceMatrixService
        function callback(response, status) {
            //Verificar o Status
            if (status != google.maps.DistanceMatrixStatus.OK)
                //Se o status não for "OK"
                $('#litResultado').html(status);
            else {
                //Se o status for OK
                //Endereço de origem = response.originAddresses
                //Endereço de destino = response.destinationAddresses
                //Distância = response.rows[0].elements[0].distance.text
                //Duração = response.rows[0].elements[0].duration.text
                $('#litResultado').html("<strong>Origem</strong>: " + response.originAddresses +
                    "<br /><strong>Destino:</strong> " + response.destinationAddresses +
                    "<br /><strong>Distância</strong>: " + response.rows[0].elements[0].distance.text +
                    " <br /><strong>Duração</strong>: " + response.rows[0].elements[0].duration.text
                    );
                //Atualizar o mapa
                $("#map").attr("src", "https://maps.google.com/maps?saddr=" + response.originAddresses + "&daddr=" + response.destinationAddresses + "&output=embed");
            }
          }

<?php $id = $_GET['id']; ?>
/*<!DOCTYPE html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Localização de Usuários</title>

    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"> 

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
    <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
/*      #map {
        margin-top: 100px;
        height: 80%;
        right: 40%;
        height: 100%;
        margin-right:210px;
      }
      /* Optional: Makes the sample page fill the window. */
/*      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">Simbora</a> 
        </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#about" class="page-scroll">Sobre</a>
            </li>
            <li>
              <a href="#services" class="page-scroll">Serviços</a>
            </li>
            <!--<li><a href="#portfolio" class="page-scroll">Gallery</a></li>
            <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>-->
            <li>
              <a href="#contact" class="page-scroll">Fale Conosco</a>
            </li>
          </ul>
        </div>
           <!-- /.navbar-collapse --> 
      </div>
         <!-- /.container-fluid --> 
    </nav>
       <!--______________________________________________-->
    <div id="map"></div><br><br>
    <a href="cads_horarios.php?id=<?=$id?>">Cadastre seu Horário</a><br>
    <a href="cads_lugar.php?id=<?=$id?>">Cadastre sua Rotina</a><br>
    <a href="sair.php">Sair</a>
    
    <script>
      /*var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };*/


    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <?php $id = $_GET['id']; ?>
    <form action="processa_horario.php?id=<?=$id?>" method="POST">
        Nome:<input type="text" name="nome" placeholder="Nome"><br><br>
        Parada de Origem<input type="text" name="paradaorigem" id="txtOrigem" placeholder="Parada de Origem"><br><br>
        Parada de Destino<input type="text" name="paradadestino" id="txtDestino" placeholder="Parada de Destino"><br><br>
        Horário:<select name="horario">

      <!--<div id="forms">
        Nome:  <input type="text" name="nome" placeholder="Nome"><br><br>

        Parada de Origem:  <input type="text" name="paradaorigem"  id="txtOrigem" class="field" style="width: 400px" placeholder="Parada de Origem"><br><br>
        Parada de Destino:  <input type="text" name="paradadestino"  style="width: 400px" class="field" id="txtDestino" placeholder="Parada de Destino"><br><br>
        Horário:  <select name="horario"> !-->
            <option value="00:00 - 00:15">00:00 - 00:15</option>
            <option value="00:15 - 00:30">00:15 - 00:30</option>
            <option value="00:30 - 00:45">00:30 - 00:45</option>
            <option value="00:45 - 01:00">00:45 - 01:00</option>

            <option value="01:00 - 01:15">01:00 - 01:15</option>
            <option value="01:15 - 01:30">01:15 - 01:30</option>
            <option value="01:30 - 01:45">01:30 - 01:45</option>
            <option value="01:45 - 02:00">01:45 - 02:00</option>

            <option value="02:00 - 02:15">02:00 - 02:15</option>
            <option value="02:15 - 02:30">02:15 - 02:30</option>
            <option value="02:30 - 02:45">02:30 - 02:45</option>
            <option value="02:45 - 03:00">02:45 - 03:00</option>


            <option value="03:00 - 03:15">03:00 - 03:15</option>
            <option value="03:15 - 03:30">03:15 - 03:30</option>
            <option value="03:30 - 03:45">03:30 - 03:45</option>
            <option value="03:45 - 04:00">03:45 - 04:00</option>

            <option value="04:00 - 04:15">04:00 - 04:15</option>
            <option value="04:15 - 04:30">04:15 - 04:30</option>
            <option value="04:30 - 04:45">04:30 - 04:45</option>
            <option value="04:45 - 05:00">04:45 - 05:00</option>

            <option value="05:00 - 05:15">05:00 - 05:15</option>
            <option value="05:15 - 05:30">05:15 - 05:30</option>
            <option value="05:30 - 05:45">05:30 - 05:45</option>
            <option value="05:45 - 06:00">05:45 - 06:00</option>

            <option value="06:00 - 06:15">06:00 - 06:15</option>
            <option value="06:15 - 06:30">06:15 - 06:30</option>
            <option value="06:30 - 06:45">06:30 - 06:45</option>
            <option value="06:45 - 07:00">06:45 - 07:00</option>

            <option value="07:00 - 07:15">07:00 - 07:15</option>
            <option value="07:15 - 07:30">07:15 - 07:30</option>
            <option value="07:30 - 07:45">07:30 - 07:45</option>
            <option value="07:45 - 08:00">07:45 - 08:00</option>

            <option value="08:00 - 08:15">08:00 - 08:15</option>
            <option value="08:15 - 08:30">08:15 - 08:30</option>
            <option value="08:30 - 08:45">08:30 - 08:45</option>
            <option value="08:45 - 09:00">08:45 - 09:00</option>

            <option value="09:00 - 09:15">09:00 - 09:15</option>
            <option value="09:15 - 09:30">09:15 - 09:30</option>
            <option value="09:30 - 09:45">09:30 - 09:45</option>
            <option value="09:45 - 10:00">09:45 - 10:00</option>

            <option value="10:00 - 10:15">10:00 - 10:15</option>
            <option value="10:15 - 10:30">10:15 - 10:30</option>
            <option value="10:30 - 10:45">10:30 - 10:45</option>
            <option value="10:45 - 11:00">10:45 - 11:00</option>

            <option value="11:00 - 11:15">11:00 - 11:15</option>
            <option value="11:15 - 11:30">11:15 - 11:30</option>
            <option value="11:30 - 11:45">11:30 - 11:45</option>
            <option value="11:45 - 12:00">11:45 - 12:00</option>

            <option value="12:00 - 12:15">12:00 - 12:15</option>
            <option value="12:15 - 12:30">12:15 - 12:30</option>
            <option value="12:30 - 12:45">12:30 - 12:45</option>
            <option value="12:45 - 13:00">12:45 - 13:00</option>

            <option value="13:00 - 13:15">13:00 - 13:15</option>
            <option value="13:15 - 13:30">13:15 - 13:30</option>
            <option value="13:30 - 13:45">13:30 - 13:45</option>
            <option value="13:45 - 14:00">13:45 - 14:00</option>

            <option value="14:00 - 14:15">14:00 - 14:15</option>
            <option value="14:15 - 14:30">14:15 - 14:30</option>
            <option value="14:30 - 14:45">14:30 - 14:45</option>
            <option value="14:45 - 15:00">14:45 - 15:00</option>

            <option value="15:00 - 15:15">15:00 - 15:15</option>
            <option value="15:15 - 15:30">15:15 - 15:30</option>
            <option value="15:30 - 15:45">15:30 - 15:45</option>
            <option value="15:45 - 16:00">15:45 - 16:00</option>

            <option value="16:00 - 16:15">16:00 - 16:15</option>
            <option value="16:15 - 16:30">16:15 - 16:30</option>
            <option value="16:30 - 16:45">16:30 - 16:45</option>
            <option value="16:45 - 17:00">16:45 - 17:00</option>

            <option value="17:00 - 17:15">17:00 - 17:15</option>
            <option value="17:15 - 17:30">17:15 - 17:30</option>
            <option value="17:30 - 17:45">17:30 - 17:45</option>
            <option value="17:45 - 18:00">17:45 - 18:00</option>

            <option value="18:00 - 18:15">18:00 - 18:15</option>
            <option value="18:15 - 18:30">18:15 - 18:30</option>
            <option value="18:30 - 18:45">18:30 - 18:45</option>
            <option value="18:45 - 19:00">18:45 - 19:00</option>

            <option value="19:00 - 19:15">19:00 - 19:15</option>
            <option value="19:15 - 19:30">19:15 - 19:30</option>
            <option value="19:30 - 19:45">19:30 - 19:45</option>
            <option value="19:45 - 20:00">19:45 - 20:00</option>

            <option value="20:00 - 20:15">20:00 - 20:15</option>
            <option value="20:15 - 20:30">20:15 - 20:30</option>
            <option value="20:30 - 20:45">20:30 - 20:45</option>
            <option value="20:45 - 21:00">20:45 - 21:00</option>

            <option value="21:00 - 21:15">21:00 - 21:15</option>
            <option value="21:15 - 21:30">21:15 - 21:30</option>
            <option value="21:30 - 21:45">21:30 - 21:45</option>
            <option value="21:45 - 22:00">21:45 - 22:00</option>

            <option value="22:00 - 22:15">22:00 - 22:15</option>
            <option value="22:15 - 22:30">22:15 - 22:30</option>
            <option value="22:30 - 22:45">22:30 - 22:45</option>
            <option value="22:45 - 23:00">22:45 - 23:00</option>

            <option value="23:00 - 23:15">23:00 - 23:15</option>
            <option value="23:15 - 23:30">23:15 - 23:30</option>
            <option value="23:30 - 23:45">23:30 - 23:45</option>
            <option value="23:45 - 00:00">23:45 - 00:00</option>
        </select><br><br>
       <input type="button" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
        

    </form>
        <!--<tbody>
            <tr>

              <input type="button" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
              <!--<button type="button" class="btn btn-custom btn-lg" onclick="CalculaDistancia()">Calcular distância</button>-->
                <!--<input type="submit" value="Enviar">-->
               
            <!--<tr>
>>>>>>> dcf6b2a35e7b0727518175c527341fd14ad4ff7b
                <td>
                    <label for="txtOrigem"><strong>Endere&ccedil;o de origem</strong></label>
                    <input type="text" id="txtOrigem" class="field" style="width: 400px" />

                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtDestino"><strong>Endere&ccedil;o de destino</strong></label>
                    <input type="text" style="width: 400px" class="field" id="txtDestino" />

                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="Calcular dist&acirc;ncia" onclick="CalculaDistancia()" class="btnNew" />
                </td>
<<<<<<< HEAD
            </tr>
        </tbody>-->

            </tr> 
      </div>          
    </form>
        </tbody>
    </table>
    <div><span id="litResultado">&nbsp;</span></div>
    <div style="padding: 10px 0 0; clear: both; margin-left: 600px; margin-top: -200px">
        <iframe width="750" scrolling="no" height="350" frameborder="0" id="map" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=são paulo&daddr=rio de janeiro&output=embed"></iframe>
 
    </div>
    </div>
<!--=======
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

        function doNothing() {} -->
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3frGfKLCczK2SjrxuYMrJg5O_LL45boA&callback=initMap">
    </script>
  </div>
</body>
</html>
