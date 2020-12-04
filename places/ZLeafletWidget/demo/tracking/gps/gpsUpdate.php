<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Leaflet.Control.Gps - Simple Example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />

    <link rel="stylesheet" href="leaflet-gps.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<div id="map"></div>

<br />
<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="../src/leaflet-gps.js"></script>
<script>
    /*start | Zoirjon Sobirov | 10.10.2020*/
    var map = new L.Map('map', {
        zoom: 12,
        center: new L.latLng([41.575730,13.002411])
    });

    map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

    var gps = new L.Control.Gps({
        //autoActive:true,
        autoCenter:true
    });//inizialize control

    gps
        .on('gps:located', function (event) {
            //	e.marker.bindPopup(e.latlng.toString()).openPopup()
            console.log(event.latlng, map.getCenter())
        })
        .on('gps:disabled', function (event) {
            e.marker.closePopup()
        });

    gps.addTo(map);
    /*end | Zoirjon Sobirov | 10.10.2020*/
</script>
</body>
</html>
