<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Leaflet rotated marker example</title>



    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
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





<script>

    var latLng = [0, 0];


    var map = L.map('map', {
        center: [41, 70],
        zoom: 25,
        layers: [
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            })
        ]
    });


    var greenIcon = L.icon({
        iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
        iconSize:     [15, 30], // size of the icon
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
     /*
    var m = L.marker(map.getCenter(), {
        //center: latLng,
        icon:  greenIcon,
        rotationAngle: 0,
        draggable: false
    }).addTo(map);
    */
    var lc = L.control.locate({
        position: [41, 72],
        icon:greenIcon,
        strings: {
            title: "Show me where I am, yo!"
        }
    });
    r = L.Routing.control({

        strings: {
            title: "Show me where I am, yo!"
        },
        waypoints: [
            L.latLng(41, 72)
        ],
        //show: true
    }).addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(function (data) {

            /*
            map.addLayer(m.setRotationAngle(heading));

           document.getElementById('lat').innerHTML = "<p>" +
                'Cordinate ' + heading + "</br>" +
                "</p>";*/

            var lt = [data.coords.latitude, data.coords.longitude]

            m.setLatLng(lt);
            map.setView(m.getLatLng());

            r.setWaypoints([
                L.latLng(lt)
            ])
            // r.setWaypoints(lt)
            // r.setWaypoints(40, 70)
            // routeControl.getPlan().setWaypoints({latLng: L.latLng([0, 0])});
        });
    }



    //var nr = r.getWaypoints()

    /* navigator.geolocation.getCurrentPosition(function (data) {

     });*/




    // let heading = geolocationCoordinatesInstance.heading

    /* if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(showPosition)

     } else {
         // Browser doesn't support Geolocation
         handleLocationError(false, infoWindow, map.getCenter());
     }

     function showPosition(position) {
         console.log(position.coords)
     }   */
    /*     var options = {
             enableHighAccuracy: true,
            // timeout: 5000,
             maximumAge: 0
         };



         function success(pos) {
             var crd = pos.coords;

             console.log('Your current position is:');
             console.log(`Latitude : ${crd.latitude}`);
             console.log(`Longitude: ${crd.longitude}`);
             console.log(`More or less ${crd.accuracy} meters.`);
             console.log(pos);
             latLng = new L.LatLng(crd.latitude, crd.longitude);
             m.setLatLng(latLng);
             map.setView(m.getLatLng(), map.getZoom());
             /!*latLng = new L.LatLng(crd.latitude, crd.longitude, map.getCenter());
             m.setLatLng(latLng);
             map.setView([crd.latitude, crd.longitude], 20)*!/

             //m.center = [crd.latitude, crd.longitude];
             //, m.getCenter())
           //  m.setLatLng(latLng).update();


         }

         function error(err) {
             console.warn(`ERROR(${err.code}): ${err.message}`);
         }

         navigator.geolocation.getCurrentPosition(success, error, options);
         //navigator.geolocation.watchPosition(success, error, options);

 */
</script>

</body>

</html>
