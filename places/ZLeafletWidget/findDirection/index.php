<!--FIND DIRECTION-->
<!DOCTYPE html>

<html>
<head>
  <title>Find Direction</title>
  <style>
  /* Always set the map height explicitly to define the size of the div
   * element that contains the map. */
  #map {
    height: 100%;
  }
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
<!--<script src="./index.js"></script>-->
</head>
<body onLoad = "getLocation()">
  <style>
   #wrapper { position: relative; height: 100%; margin: 0; padding: 0;}
   #over_map { position: absolute; bottom: 10px; right: 10px; z-index: 99; }
  </style>
  <div id="wrapper">
     <div id="map">

     </div>

     <div id="over_map">
       <img id='compass' height = "400" width = "400" src = "./assets/compass.png" />
     </div>
  </div>
  <script>

    function initMap() {
     map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: {lat: 0, lng: -180},
        mapTypeId: 'terrain'
      });
      flightPath = new google.maps.Polyline({
        path: {},
        geodesic: false,
        icons: [{
                  icon: {path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW},
                  offset: '100%',
                  repeat: '20px'
              }],
        geodesic: true,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2
      });

      flightPath.setMap(map);
    }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&callback=initMap">
  </script>
</body>
</html>
