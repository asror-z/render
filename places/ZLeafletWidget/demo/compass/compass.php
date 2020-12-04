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
    <title>Leaflet.Control.Compass - Simple Example</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"           integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <style>
        body {
            background:#b5d0d0;
            color:#285585;
            font-family:Arial;
        }

        a {
            color:#1978cf;
        }
        a:hover {
            color:#fff;
        }
        h2, h3, h4 {
            white-space:nowrap;
            margin:1em 0 0 0;
        }
        hr {
            border:none;
            margin: 20px 0;
            clear:both;
        }
        #desc {
            white-space:nowrap;
            font-size:1em;
        }
        #map {
            border-radius:.125em;
            border-top:2px solid #1978cf;
            box-shadow: 0 0 8px #999;
            width: 100%;
            height: 300px;
        }
        ul {
            font-size:.85em;
            margin:0;
            padding:0;
        }
        li {
            margin:0 0 2px 18px;
        }
        #post-it {
            width:8em;
            height:8em;
            margin-left:2em;
            padding:1em;
            float:left;
            background:#fbf5bf;
            border:1px solid #c6bb58;
            box-shadow: 2px 2px 6px #999;
            color:#666;
        }
        #copy {
            position:fixed;
            z-index:1000;
            right:150px;
            top:-6px;
            font-style:italic;
            font-size:.85em;
            padding:5px 8px;
            background: #ccc;
            border: 2px solid #3e5585;
            border-radius:.7em;
            opacity: 0.8;
        }
        #copy a {
            color:#285585
        }
        #ribbon {
            position: absolute;
            top: 0;
            right: 0;
            border: 0;
            filter: alpha(opacity=80);
            -khtml-opacity: .8;
            -moz-opacity: .8;
            opacity: .8;
        }
        #content {
            float:left;
            margin:0 3em 3em 0;
        }
        #refs {
            float:left;
            margin:0 3em 3em 0;
        }
        #comments {
            clear:both;
        }

        .box {
            float:left;
            margin:0 10px;
        }
        .screenshot {
            background:#fff;
            padding:8px;
            margin:8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
        }

    </style>
    <style>
        .leaflet-control.leaflet-compass {
            position:relative;
            color:#1978cf;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            /*background-color: rgba(0, 0, 0, 0.25);*/
            background-color: rgba(255, 255, 255, 0.8);
            /*background: none;*/
            box-shadow: 0 1px 7px rgba(0,0,0,0.65);
            margin-left:10px;
            margin-top:10px;
        }
        .leaflet-compass .compass-button {
            display:block;
            float:left;
            width:36px;
            height:36px;
            border-radius:4px;
        }
        .leaflet-compass .compass-button.active {
            background: #fff;
        }
        .leaflet-compass .compass-icon {
            height: 32px;
            width: 32px;
            margin: 2px;
            background: url('https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/images/compass-icon.png') center center no-repeat;
        }

        .leaflet-compass .compass-digit {
        }

        .leaflet-compass .compass-alert {
            position:absolute;
            right:0;
            bottom:-30px;
            width:100px;
            padding:2px;
            line-height:.95em;
            color:#e00;
            border: 1px solid #888;
            background-color: rgba(255, 255, 255, 0.75);
            border-radius:4px;
        }
    </style>

</head>

<body>
<h3 style=""><big>◄</big> <a href="../">Leaflet.Control.Compass</a></h3>
Simple Example: <em>auto rotating compass</em>
<div id="map"></div>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/src/leaflet-compass.js"></script>
<script>
  //start | Zoirjon Sobirov | 10.10.2020
    var map = new L.Map('map', {zoom: 12, center: new L.latLng([42.5,12.5]) });

    map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

    var comp = new L.Control.Compass({autoActive: true, showDigit:true});

    map.addControl(comp);
  //end | Zoirjon Sobirov | 10.10.2020
</script>

</body>
</html>
