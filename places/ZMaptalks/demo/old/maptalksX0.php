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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks@0.49.1/dist/maptalks.min.js"></script>

    <link href="https://cdn.osmbuildings.org/4.1.1/OSMBuildings.css" rel="stylesheet">
    <script src="https://cdn.osmbuildings.org/classic/0.2.2b/OSMBuildings-Leaflet.js"></script>
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
<div id="demo"></div>


<script>

    var latLng = [0, 0];

    // A complete customized TileLayer
    var resolutions = [];
    var d = 2 * 6378137 * Math.PI;
    for (var i = 0; i < 21; i++) {
        resolutions[i] = d / (256 * Math.pow(2, i));
    }

    var map = new maptalks.Map('map', {
        center:     [-0.113049,51.498568],
        zoom:  13,
        pitch: 45,
        // a custom version of default web-mercator spatial reference
        // map's spatial reference definition
        spatialReference : {
            projection : 'EPSG:3857', // geo projection, can be a string or a function
            resolutions : resolutions,
            fullExtent : {         // map's full extent
                'top': 6378137 * Math.PI,
                'left': -6378137 * Math.PI,
                'bottom': -6378137 * Math.PI,
                'right': 6378137 * Math.PI
            }
        },
        baseLayer : new maptalks.TileLayer('base',{
            urlTemplate: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            subdomains: ['a','b','c'],
            //  tileSystem : [1, -1, -20037508.34, 20037508.34], // tile system
            minZoom : 1,
            maxZoom : 19,
        })
    });




    var greenIcon = L.icon({
        iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
        iconSize:     [15, 30], // size of the icon
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var routeA = []
    var routeB = []


    var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }


    var options = {
        enableHighAccuracy: true,
        // timeout: 5000,
        maximumAge: 0
    };


</script>

</body>

</html>
