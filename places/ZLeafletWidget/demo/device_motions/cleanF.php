<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Leaflet rotated marker example</title>

    <link rel="stylesheet" href="/render/places/ZLeafletWidget/demo/device_motions/css/leaflet.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
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



    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.js"></script>
    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.rotatedMarker.js"></script>

    <script>

        var latLng = [0, 0];


        var map = L.map('map', {
            center: [41, 70],
            zoom: 20,
            layers: [
                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                })
            ]
        });


        var greenIcon = L.icon({
            iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
            iconSize:     [20, 40], // size of the icon
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        var m = L.marker(map.getCenter(), {
            //center: latLng,
            icon:  greenIcon,
            rotationAngle: 0,
            draggable: true
        });

        var options = {
            enableHighAccuracy: true,
           // timeout: 1000,
            maximumAge: 0
        };

        function success(pos) {
            var crd = pos.coords;

            console.log('Your current position is:');
            console.log(`Latitude : ${crd.latitude}`);
            console.log(`Longitude: ${crd.longitude}`);
            console.log(`More or less ${crd.accuracy} meters.`);


            latLng = new L.LatLng(crd.latitude, crd.longitude, map.getCenter());
            m.setLatLng(latLng);
            map.setView([crd.latitude, crd.longitude], 20)

            //m.center = [crd.latitude, crd.longitude];
            //, m.getCenter())
          //  m.setLatLng(latLng).update();


        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        //navigator.geolocation.getCurrentPosition(success, error, options);
        navigator.geolocation.watchPosition(success, error, options);





        if(window.DeviceOrientationEvent) {
            window.addEventListener('deviceorientation', function(event) {
                let alpha = event.alpha;
                let beta = event.beta;
                let gamma = event.gamma;
                console.log(event)


                /*setInterval(function () {

                alert(latLng)
                },3000)*/
                document.getElementById('lat').innerHTML = "<p>" +
                    'Cordinate ' + latLng + "</br>" +
                    "</p>";
                document.getElementById('alpha').innerHTML = "<p>" +
                    'alpha ' + alpha + "</br>" +
                    "</p>";
                document.getElementById('beta').innerHTML = "<p>" +
                    'beta ' +beta + "</br>" +
                    "</p>";
                document.getElementById('gamma').innerHTML = "<p>" +
                    'gamma '  + gamma + "</br>" +
                    "</p>";

                map.addLayer(m.setRotationAngle(-360 - alpha));

            })
        }
    </script>

</body>

</html>
