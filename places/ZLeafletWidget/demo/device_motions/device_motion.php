<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Leaflet rotated marker example</title>

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v1.1.0/leaflet.css" />
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
            width:80vh;
            height: 80%;
        }

        .block_ac {
            height: 20%;
            width: 100%;
        }
    </style>


</head>

<body>
    <div id="map"></div>
    <div class="block_ac">

    </div>

    <script src="http://cdn.leafletjs.com/leaflet/v1.1.0/leaflet-src.js"></script>
    <script src="leaflet.rotatedMarker.js"></script>
    <script>
        window.onload = function () {
            var map = L.map('map', {
                center: [48.8631169, 2.3708919],
                zoom: 8,
                layers: [
                    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                    })
                ]
            });

            var m = L.marker(map.getCenter(), {
                rotationAngle: 45,
                draggable: true
            }).addTo(map);


            // setInterval(function () {
            //     var deviceMotionEvent = new DeviceMotionEvent("devicemotion"[, options])
            //     var acceleration = deviceMotionEvent.acceleration;
            //     console.log(acceleration);
            //     document.querySelector('.block_ac').innerHTML = "<p>" + acceleration + "</p>";
            // }, 1000)
            // console.log(window.DeviceOrientationEvent);
            // document.querySelector('.block_ac').innerHTML = "<p>" + window.DeviceOrientationEvent + "</p>";
            // window.addEventListener('devicemotion', function (event) {
            //     console.log( "Hellow World");
            //     console.log(event.acceleration.x + ' m/s2');
            // });
            console.log(window);
            window.ondevicemotion = myFunc;
            function myFunc(ev) {
                console.log(ev);
                console.log(ev);
                console.log(ev);

            }

            window.addEventListener("deviceorientation", function (event) {
                let alpha = event.alpha;
                let beta = event.beta;
                let gamma = event.gamma;
                document.querySelector('.block_ac').innerHTML = "<p>"
                    + alpha + "</br>"
                    + beta + "</br>"
                    + gamma + "</br>"
                    + "</p>";

                console.log(alpha);
                console.log('alpha');
                console.log(beta);
                console.log('beta');
                console.log(gamma);
                console.log('gamma');
                console.log("hello world");
                console.log("hello world");


            }, true);

        };
    </script>


</body>

</html>