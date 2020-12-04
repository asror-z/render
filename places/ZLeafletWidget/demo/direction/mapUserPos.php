<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Leaflet.Control.Gps</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />


    <style>
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



    </style>
    <style>
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
            width:100%;
            height:400px;
            float:left;
        }
    </style>

</head>

<body>

<div id="map"></div>
<div id="lat"></div>
<div id="alpha"></div>
<div id="beta"></div>
<div id="gamma"></div>

<br />
<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>


<script>

    console.log('hi')
</script>
</body>
</html>
