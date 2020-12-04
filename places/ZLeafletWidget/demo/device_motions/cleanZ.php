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
    <div id="alpha"></div>
    <div id="beta"></div>
    <div id="gamma"></div>



    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.js"></script>
    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.rotatedMarker.js"></script>

    <script>

        var map = L.map('map', {
            center: [50.33, 69.33],
            zoom: 15,
            layers: [
                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                })
            ]
        });
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                    let pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    var greenIcon = L.icon({
                        iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
                        iconSize:     [20, 40], // size of the icon
                        shadowAnchor: [4, 62],  // the same for the shadow
                        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
                    });

                    var m = L.marker(map.getCenter(), {
                        position: pos,
                        icon:  greenIcon,
                        rotationAngle: 0,
                        draggable: false
                    });
                    map.setCenter(pos);
                    // Sets the map on all markers in the array.

                },
                function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }


        if(window.DeviceOrientationEvent) {
            window.addEventListener('deviceorientation', function(event) {
                let alpha = event.alpha;
                let beta = event.beta;
                let gamma = event.gamma;
                console.log(event)

                document.getElementById('alpha').innerHTML = "<p>" +
                    'alpha ' + alpha + "</br>" +
                    "</p>";
                document.getElementById('beta').innerHTML = "<p>" +
                    'beta ' +beta + "</br>" +
                    "</p>";
                document.getElementById('gamma').innerHTML = "<p>" +
                    'gamma '  + gamma + "</br>" +
                    "</p>";
                    //L.marker([51.5, -0.09], {icon: greenIcon}).addTo(map)
                map.addLayer(m.setRotationAngle(-360 - alpha));
            console.log('map ' + map.center.latitude)

            })
        }
    </script>

</body>

</html>
