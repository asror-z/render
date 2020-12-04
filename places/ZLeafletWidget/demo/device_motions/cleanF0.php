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



    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet-src.js"></script>
    <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.rotatedMarker.js"></script>

   <script>
       var map = L.map('map').setView([13.08, 80.27], 10);

       L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
           attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
       }).addTo(map);

       function createMarkers(latlng) {
           console.log('Create markers ...');
           var imgMarker = L.marker(latlng, {icon: L.icon({
                   iconUrl: "https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png",
                   iconAnchor: [10, 10]
               })}).addTo(map);
           var circMarker = L.circleMarker(latlng, {
               stroke: true,
               color: '#96e9f2',
               weight: 4,
               opacity: 0.6,
               fill: true,
               fillColor: '#96e9f2',
               fillOpacity: 0.5,
           }).addTo(map);
           circMarker.setRadius(40);
           return [imgMarker, circMarker];
       }

       /**
        * Returns tracking state as boolean, markers & closure function / iterator
        */
       function initTracking() {
           console.log('Initialize tracking ...');
           /* ToDo: Below Hard Coded line need to be parameterized */
           var latlngList = [[-203, 121], [-208, 128], [-205, 134.5], [-209.5, 140.5], [-208.5, 147], [-208.5, 152], [-212, 158.5], [-208.5, 161.5]];
           var index = 0;
           if(!(latlngList.length > 0))
               return;
           return {
               trackingOn: false,
               markers: createMarkers(latlngList[index]),
               nextLatLng: function(){
                   index = ++index % latlngList.length;
                   return latlngList[index];
               }
           }
       }

       function trackCurrentPosition(tracker) {
           var latlng = tracker.nextLatLng();
           console.log('latlng:' + latlng);
           tracker.markers[0].setLatLng(latlng);
           tracker.markers[1].setLatLng(latlng);
           if(tracker.trackingOn) {
               setTimeout(function(){
                   trackCurrentPosition(tracker);
               }, 1000);
           }
       }

       function startTracking(tracker) {
           tracker.trackingOn = true;
           trackCurrentPosition(tracker)
           console.log('Tracker is started.');
       }

       function stopTracking(tracker) {
           tracker.trackingOn = false;
           console.log('Tracker is going to stop.');
       }

   </script>

</body>

</html>
