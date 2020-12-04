<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Leaflet.Control.Gps</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.min.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/dist/L.Control.Locate.min.css"/>
    <link rel="stylesheet"
          href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
    <link rel="stylesheet" href="/render/places/ZLeafletWidget/demo/device_motions/css/leafletNew.css">


    <style>

    </style>
</head>

<body>

<div id="map"></div>

<br/>
<div id="search-box"></div>
<!-- To display the result -->
<div id="result"></div>

<button id="routeButton">routes</button>


<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/src/leaflet-gps.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/src/leaflet-compass.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/src/L.Control.Locate.min.js"
        charset="utf-8"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-rotatedmarker@0.2.0/leaflet.rotatedMarker.min.js"></script>
<script src="https://cdn.statically.io/gh/JackZouShao/leaflet-marker-direction/master/src/marker-direction.js"></script>
<script>

    // inite map
    var map = L.map('map').setView([30.201479, 120.155908], 13);
    L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
    ).addTo(map);

    // your data
    var list = [
        {"lon":"41.12","lat":"70.12"},
        {"lon":"41.15","lat":"70.15"},
        {"lon":"41.50","lat":"70.50"},
        {"lon":"41","lat":"70"}
    ];
    // iterate your data
    for(var i in list){
        var img = new Image();
        img.src = '/render/places/ZLeafletWidget/demo/device_motions/images/pngwing.png';
        var options = {
            label: 'your label',
            //labelFlag: labelFlag,
            labelColor: 'black',
            img: img
        };

        // use angeMaker plugin
        var angleMarker = L.angleMarker(latlng, options);
        var angle = 0;

        // get angele between A(previousPoint) and B(nextPoint)
        angle = angleMarker.getAngle(previousLatLng, nextLanLng);

        // set angele A -> B
        angleMarker.setHeading(angle);
        map.addLayer(angleMarker);
    }

</script>
</body>
</html>
