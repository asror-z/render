<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Leaflet.Control.Gps</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.min.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/dist/L.Control.Locate.min.css"/>
    <link rel="stylesheet"
          href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
    <link rel="stylesheet" href="/render/places/ZLeafletWidget/demo/device_motions/css/leafletNew.css">


    <style>

    </style>
</head>

<body>

<div id="map"></div>

<br/>
<div id="search-box"></div>
<!-- To display the result -->
<div id="result"></div>

<!--<button id="routeButton">routes</button>-->


<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/src/leaflet-gps.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/src/leaflet-compass.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/src/L.Control.Locate.min.js"
        charset="utf-8"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-rotatedmarker@0.2.0/leaflet.rotatedMarker.min.js"></script>
<script>

    var greenIcon = L.icon({
        iconUrl: '/render/places/ZLeafletWidget/demo/device_motions/images/pngwing.png',
        iconSize: [25, 30], // size of the icon
    });

    var gpsPoint = null;

    var myGpsButton = document.getElementsByClassName("gps-button");

    var map = new L.map('map', {
        zoom: 16,
        center: new L.latLng([51.575730, 23.002411]),
        //searchControl: {layer: searchLayer},
    });

    var searchLayer = L.geoJson().addTo(map);

    map.addControl(new L.Control.Search({layer: searchLayer}));

    var comp = new L.Control.Compass({
        autoActive: true,
        showDigit: true
    }).addTo(map);


    map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

    /*var gps = new L.Control.Gps({
        autoActive:true,
        marker: new L.Marker([0, 0], {
            icon: greenIcon,
            rotationAngle: 0
        }),
        autoCenter: true
    }).addTo(map);*/

    //L.circle([50.5, 30.5], {radius: 10}).addTo(map);

    var lc = L.control.locate({
        marker: new L.Marker([0, 0], {
            icon: greenIcon,
            //rotationAngle: comp,
            setView: false,
        }),
        enableHighAccuracy: true,
        position: 'topright',
        strings: {
            title: "Show me where I am, yo!"
        }
    }).addTo(map);
    lc . start () ;


    /*function setRotate(angle){
    console.log(gps._gpsMarker.options.rotationAngle);
        gps._gpsMarker.options.rotationAngle = -360 - angle;
        //map.addLayer(gps.setRotationAngle(angle));
    }*/

    /*comp.on('compass:rotated', function () {
        var compdegree = comp.getAngle();
        setRotate(compdegree);

        /!*if (gpsPoint !== null){
            map.removeControl(gpsPoint);
            gpsPoint = gps.addTo(map);
            console.log("Working IF condition");
            //alert("Working IF condition");
        }else {
            gpsPoint = gps.addTo(map);
            console.log("Working ELSE condition");
            //alert("Working ELSE condition");
        }

        console.log(gpsPoint);*!/


    })*/





    /*var lc = L.control.locate({
        marker: new L.Marker([0, 0], {
            icon: greenIcon,
            rotationAngle: comp,
            setView: false,
        }),
        position: 'topright',
        strings: {
            title: "Show me where I am, yo!"
        }
    }).addTo(map);*/

    /*setInterval(L.control.locate({
        marker: new L.Marker([0, 0], {
            icon: greenIcon,
            rotationAngle: comp,
            setView: false,
        }),
        position: 'topright',
        strings: {
            title: "Show me where I am, yo!"
        }
    }).addTo(map), 500);*/

    function locate() {
        map.locate({setView: false});
    }

    // call locate every 3 seconds... forever
    //setInterval(locate, 500);



    //var routeBtn = document.getElementById('routeButton');
    var waypoint = null;

    function setWayPoints(latA,lngA,latB,lngB){
        var routeWaypoint = (L.Routing.control({
            waypoints: [
                L.latLng(latA, lngA),
                L.latLng(latB, lngB)
            ]
        }));

        if (waypoint !== null){
            map.removeControl(waypoint);
            waypoint = routeWaypoint.addTo(map);
            console.log("Working IF condition");
        }else {
        waypoint = routeWaypoint.addTo(map);
            console.log("Working ELSE condition")
        }
    }

    if (window.DeviceOrientationEvent) {
        window.addEventListener('deviceorientation', function (event) {
            let alpha = event.alpha;
            let beta = event.beta;
            let gamma = event.gamma;
            //console.log(gps);
        })
    }
    //gps.addTo(map);

</script>
</body>
</html>
