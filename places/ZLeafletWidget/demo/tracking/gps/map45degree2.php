<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Display map navigation controls</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="https://cdn.osmbuildings.org/4.1.1/OSMBuildings.css" rel="stylesheet">
    <script src="https://cdn.osmbuildings.org/4.1.1/OSMBuildings.js"></script>
    <style>
        /*start | Zoirjon Sobirov | 10.10.2020*/
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body style=" background:cadetblue;">

<div id="map"></div>
<script>
    var map = new OSMBuildings({
        container: 'map',
        position: { latitude: 52.51836, longitude: 13.40438 },
        zoom: 16,
        minZoom: 15,
        maxZoom: 20,
        attribution: '© Data <a href="https://openstreetmap.org/copyright/">OpenStreetMap</a> © Map <a href="https://mapbox.com/">Mapbox</a> © 3D <a href="https://osmbuildings.org/copyright/">OSM Buildings</a>'

    })
    map.addMapTiles('https://{s}.tiles.mapbox.com/v3/[YOUR_MAPBOX_KEY]/{z}/{x}/{y}.png');

    map.addGeoJSONTiles('https://{s}.data.osmbuildings.org/0.2/anonymous/tile/{z}/{x}/{y}.json');
    /*end | Zoirjon Sobirov | 10.10.2020*/
</script>

</body>
</html>

