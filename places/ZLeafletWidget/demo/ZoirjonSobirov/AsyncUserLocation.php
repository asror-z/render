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
<title>Leaflet.Control.Gps</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />


    <style>
        /*start | Zoirjon Sobirov | 10.10.2020*/
        .leaflet-container .leaflet-control-gps {
            position:relative;
            float:left;
            background:#fff;
            color:#1978cf;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            /*background-color: rgba(0, 0, 0, 0.25);*/
            background-color: rgba(255, 255, 255, 0.8);
            z-index:1000;
            /*box-shadow: 0 1px 7px rgba(0,0,0,0.65);*/
            border: 2px solid rgba(0,0,0,0.2);
            background-clip: padding-box;
            margin-left:10px;
            margin-top:10px;
        }
        .leaflet-control-gps .gps-button {
            display:block;
            float:left;
            width:22px;
            height:22px;
            background-image: url('https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/images/gps-icon.svg');
            background-repeat: no-repeat;
            background-position: 1px 1px;
            background-color: #fff;
            border-radius:4px;
            padding: 2px;
            margin: 2px;
        }
        .leaflet-control-gps .gps-button:hover,
        .leaflet-control-gps .gps-button.active:hover {
            background-color: #f4f4f4;
        }
        .leaflet-control-gps .gps-button.loading,
        .leaflet-control-gps .gps-button.loading:hover {
            background-position: 1px -28px;
        }
        .leaflet-control-gps .gps-button.active {
            background-position: 1px -52px;
        }
        .leaflet-control-gps .gps-button.disabled {
            background-position: 1px -24px;
        }

        .leaflet-control-gps .gps-alert {
            position:absolute;
            left:34px;
            bottom:-1px;
            width:220px;
            padding:2px;
            line-height:1em;
            color:#e00;
            border: 2px solid rgba(0,0,0,0.2);
            background-color: rgba(255, 255, 255, 0.75);
            border-radius:4px;
        }
        body {
            background:#b5d0d0;
            color:#285585;
            font-family:Arial;
        }
        body#home {
            background:url('https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/images/back.png') no-repeat top left #b5d0d0;
            margin-left:150px;
        }
        #map {
            border-radius:.125em;
            border:2px solid #1978cf;
            box-shadow: 0 0 8px #999;
            width:350px;
            height:400px;
            float:left;
        }
    </style>

</head>

<body>

<div id="map"></div>

<br />
<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/src/leaflet-gps.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/src/leaflet-compass.js"></script>
<script>

	var map = new L.Map('map', {
		zoom: 14,
		center: new L.latLng([41.575730,13.002411])
	});

    var comp = new L.Control.Compass({autoActive: true, showDigit:true});
	map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

    var greenIcon = L.icon({
        iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
        iconSize:     [20, 40], // size of the icon
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    
	var gps = new L.Control.Gps({

		//autoActive:true,
        marker: new L.Marker([0,0], {icon:greenIcon,  rotationAngle: comp}),
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
