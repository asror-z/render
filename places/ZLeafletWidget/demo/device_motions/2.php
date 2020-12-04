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
    <div class="block_ac">

    </div>



    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.js"></script>
    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.rotatedMarker.js"></script>
    <script>
        window.addEventListener('deviceorientation', function(event) {
            console.log(event.alpha)
            console.log(event)
            console.log(event)
            console.log("event")
            console.log("event")
        })

        var map = L.map('map', {
            center: [48.8631169, 2.3708919],
            zoom: 8,
            layers: [
                L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                })
            ]
        });

        let alpha;
        let beta;
        let gamma;

        console.log(window.DeviceOrientationEvent);
        console.log("window.DeviceOrientationEvent");


        window.addEventListener('deviceorientation', function(event) {
            console.log(event);
            alpha = event.alpha;
            beta = event.beta;
            gamma = event.gamma;

            var markers = [];
            if(window.DeviceOrientationEvent) {
                window.addEventListener('deviceorientation', function(event) {

             
            var m = L.marker(map.getCenter(), {
                rotationAngle: alpha,
                draggable: false
            }).addTo(map);
            })
            }
            markers.push(m);
            for (let i = 0; i < markers.length; i--) {
                markers[i].remove();
            }

            if (alpha != null || beta != null || gamma != null)
                dataContainerOrientation.innerHTML = 'alpha: ' + alpha;

            /*if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                        let pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        dataContainerOrientation1.innerHTML = 'alpha: ' + alpha;
                         let markers = [];

                        alert(alpha);

                        markers.push(m);
                        for (let i = 0; i < markers.length - 1; i++) {
                            markers[i].remove();
                        }

                        // let iconic = marker.getIcon();
                        // iconic.rotation -= alpha;
                        // //alpha %= 360;
                        // marker.setIcon(iconic);


                        // infoWindow.open(map);
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
            // }, 5000)
*/
        }, false)






        console.log(this.alpha);
        setInterval(function() {
            this.m;
        }, 100);

        document.querySelector('.block_ac').innerHTML = "<p>" +
            alpha + "</br>" +
            beta + "</br>" +
            gamma + "</br>" +
            "</p>";

        /*document.querySelector("#alpha").value = 45;
        console.log("alpha");
        console.log(alpha);
        console.log("alpha");*/

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
            console.log("Hello World");
            console.log(ev);
            console.log(ev);
            console.log(ev);

        }


        /*  window.addEventListener("deviceorientation", function (event) {
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


          }, true);*/
    </script>

    <div id="alpha">alpha</div>
</body>

</html>
