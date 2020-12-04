<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Leaflet rotated marker example</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"           integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <style>
        * { margin: 0; padding: 0; }
        html, body { height: 100%; }
        #map { width:100%; height:100%; }
    </style>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://rawcdn.githack.com/bbecquet/Leaflet.RotatedMarker/6a3e9fecfd0cfc76205484987f97975de6de3dcd/leaflet.rotatedMarker.js"></script>
    <script>
        window.onload = function() {
            var map = L.map('map', {
                center: [48.8631169, 2.3708919],
                zoom: 8,
                layers: [
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                    })
                ]
            });

            var m = L.marker(map.getCenter(), {
                rotationAngle: new L.Control.Compass(),
                draggable: true
            }).addTo(map);
        };
    </script>
</head>

<body>
<div id="map"></div>
</body>
</html>
