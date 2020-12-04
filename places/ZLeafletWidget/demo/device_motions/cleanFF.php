<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Leaflet rotated marker example</title>


</head>

<body>

<div id="map"></div>

<style>
    #map { height: 300px; }
</style>

<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>

 <!--   <script src="/render/places/ZLeafletWidget/demo/device_motions/js/leaflet.js"></script>
-->
    <script>

        function init(){
            var map             = L.map('map', {center: [51.505, -0.09], zoom: 13}),
                marker          = L.marker(map.getCenter()).addTo(map),
                glcl            = google.loader.ClientLocation,
                onLocationfound = function (event){
                    marker.setLatLng(e.latlng);
                    map.setView(marker.getLatLng(),map.getZoom());
                    alert('Marker has been set to position :'+marker.getLatLng().toString());
                };

            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            map.on('locationfound', onLocationfound);

            if(glcl){//when google.loader.ClientLocation contains result
                onLocationfound({latlng:[glcl.latitude,glcl.longitude]});
            }else{alert('google.loader.ClientLocation fails');}
            map.locate();
        }
    </script>

</body>

</html>
