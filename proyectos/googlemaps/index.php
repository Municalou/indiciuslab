<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <title>Indicius Lab - Proyectos - Google Maps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indicus Lab es un sitio de pruebas">
    <meta name="author" content="Indicius">
    <!-- Le styles -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="icon" type="image/png" href="http://www.indiciuslab.com.ar/favicon.png"><!-- Major Browsers -->
    <!--[if IE]><link rel="SHORTCUT ICON" href="http://www.indiciuslab.com.ar/favicon.ico"/><![endif]--><!-- Internet Explorer-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
  
     <style type="text/css">
      #map_canvas,#map_canvas2 { height: 350px;width:995px; }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=weather&key=AIzaSyBKgf8E3Tc8eVj0ZM9xnISF6CNr7L-0PgA&sensor=false"></script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(-34.46942, -58.51131),
          mapTypeControl: true,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
          },
          streetViewControl: false,
          zoomControl: true,
          zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE
          },
          mapTypeId: google.maps.MapTypeId.HYBRID
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        
        var mapOptions2 = {
          zoom: 5,
          center: new google.maps.LatLng(-34.46942, -58.51131),
          mapTypeId: google.maps.MapTypeId.HYBRID
        };
        var map2 = new google.maps.Map(document.getElementById("map_canvas2"), mapOptions2);
        var weatherLayer = new google.maps.weather.WeatherLayer({
          temperatureUnits: google.maps.weather.TemperatureUnit.CELSIUS,
          WindSpeedUnit: google.maps.weather.WindSpeedUnit.KILOMETERS_PER_HOUR
        });
        weatherLayer.setMap(map2);

        var cloudLayer = new google.maps.weather.CloudLayer();
        cloudLayer.setMap(map2);
      }
    </script>
  </head>
  
  <body onload="initialize()">
    
      <?php include('../../includes/header.php'); ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <div class="row">
            <div class="span5">
              <a id="logo" href="/"></a><h2 class="title">Google Maps</h2>
            </div>
            <div class="span5">
              <?php $pag="proy-googlemaps";include('../../includes/menu.php'); ?>
            </div>
          </div>
        </div>
        <p class="lead">Diferentes pruebas con google maps.</p>
        <p>Prueba numero (1).</p>
        <div id="map_canvas" style="height: 350px;width:995px;"></div>
        <p>&nbsp;</p>
        <p>Prueba numero (2).</p>
        <div id="map_canvas2" style="height: 350px;width:995px;"></div>
        <p>&nbsp;</p>
        <p>Prueba numero (3).</p>
      </div>
      <div id="push"></div>
    </div>
    
    <?php include('../../includes/footer.php'); ?>
    
  </body>

</html>