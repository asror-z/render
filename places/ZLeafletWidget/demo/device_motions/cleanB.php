<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <title>Leaflet rotated marker example</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

    <link rel="stylesheet" href="/render/places/ZLeafletWidget/demo/device_motions/css/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css"/>

    <style>

        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
        }

        #mapid {
            height: 180px;
        }

        #map {
            width: 100%;
            height: 75vh;
        }

        .block_ac {
            height: 20%;
            width: 100%;
        }
    </style>


</head>

<body>
<div id="map"></div>
<div id="lat"></div>
<div id="alpha"></div>
<div id="beta"></div>
<div id="gamma"></div>
<div id="mapid"></div>


<script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.js"></script>
<script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.rotatedMarker.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/src/leaflet-gps.js"></script>


<script>

    var map = new L.map('map', {
        zoom: 15,
        center: new L.latLng([40.575730, 69.002411]),
        layers: [
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            })
        ]
    });
    /*  var map = L.map('map', {
          center: new L.latLng([41.575730,70.002411]),
          zoom: 15,
          layers: [
              L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
              })
          ]
      });*/


    var greenIcon = L.icon({
        iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
        iconSize: [20, 40], // size of the icon
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var m = L.marker(map.getCenter(), {
        // autoCenter: true,
        icon: greenIcon,
        rotationAngle: 0,
        draggable: true
    });

    var gps = new L.Control.Gps({

        //autoActive:true,
        marker: new L.Marker([0, 0], {icon: greenIcon}),
        autoCenter: true
    });//inizialize control

    gps
        .on('gps:located', function (e) {

            //	e.marker.bindPopup(e.latlng.toString()).openPopup()
            console.log(event.latlng, map.getCenter())
        })
        .on('gps:disabled', function (e) {
            e.marker.closePopup()
        });

    gps.addTo(map);


    if (window.DeviceOrientationEvent) {
        window.addEventListener('deviceorientation', function (event) {
            let alpha = event.alpha;
            let beta = event.beta;
            let gamma = event.gamma;

            document.getElementById('lat').innerHTML = "<p>" +
                'gps ' + "</br>" +
                "</p>";
            document.getElementById('alpha').innerHTML = "<p>" +
                'alpha ' + alpha + "</br>" +
                "</p>";
            document.getElementById('beta').innerHTML = "<p>" +
                'beta ' + beta + "</br>" +
                "</p>";
            document.getElementById('gamma').innerHTML = "<p>" +
                'gamma ' + gamma + "</br>" +
                "</p>";

            map.addLayer(m.setRotationAngle(-360 - alpha));
        })
    }

    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
    }).addTo(mymap);

    var marker = L.marker([51.5, -0.09]).addTo(mymap);
    var circle = L.circle([51.508, -0.11], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);

</script>

</body>

</html>
