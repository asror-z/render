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


    <style>
        body {
            background: #b5d0d0;
            color: #285585;
            font-family: Arial;
        }

        body#home {
            background: url('https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/images/back.png') no-repeat top left #b5d0d0;
            margin-left: 150px;
        }

        #map {
            border-radius: .125em;
            border: 2px solid #1978cf;
            box-shadow: 0 0 8px #999;
            width: 100%;
            height: 90vh;
        }

        .leaflet-container .leaflet-control-gps {
            position: relative;
            float: left;
            background: #fff;
            color: #1978cf;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            /*background-color: rgba(0, 0, 0, 0.25);*/
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 1000;
            /*box-shadow: 0 1px 7px rgba(0,0,0,0.65);*/
            border: 2px solid rgba(0, 0, 0, 0.2);
            background-clip: padding-box;
            margin-left: 10px;
            margin-top: 10px;
        }

        .leaflet-control-gps .gps-button {
            display: block;
            float: left;
            width: 25px;
            height: 25px;
            background-image: url('https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/images/gps-icon.svg');
            background-repeat: no-repeat;
            background-position: 1px 1px;
            background-color: #fff;
            border-radius: 4px;
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
            position: absolute;
            left: 34px;
            bottom: -1px;
            width: 220px;
            padding: 2px;
            line-height: 1em;
            color: #e00;
            border: 2px solid rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 4px;
        }

        .leaflet-marker-icon {
            margin-left: 0px !important;
            margin-top: 0px !important;
        }

        #search-box {
            padding-left: 20px;
            padding-top: 20px;
            width: 800px;
            height: 100px;
        }
        #result {
            padding-left: 20px;
            padding-top: 20px;
            width: 800px;
            height: 100px;
        }
        .leaflet-locationiq-results{
            padding-top: 45px;
        }
    </style>
</head>

<body>

<div id="map"></div>

<br/>
<div id="search-box"></div>
<!-- To display the result -->
<div id="result"></div>

<button id="routeButton">routes</button>


<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/src/leaflet-gps.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/src/leaflet-compass.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/src/L.Control.Locate.min.js"
        charset="utf-8"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>
<script>

    var map = new L.map('map', {
        zoom: 16,
        center: new L.latLng([41.575730, 13.002411]),
        //searchControl: {layer: searchLayer},
    });

    var searchLayer = L.geoJson().addTo(map);
    //... adding data in searchLayer ...
    map.addControl(new L.Control.Search({layer: searchLayer}));

    var comp = new L.Control.Compass({autoActive: true, showDigit: true});
    var comp = map.addControl(new L.Control.Compass());
    map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer


    var greenIcon = L.icon({
        iconUrl: '/render/places/ZLeafletWidget/demo/device_motions/images/pngwing.png',
        iconSize: [25, 30], // size of the icon
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor
        shadowSize: [50, 64],
        iconAnchor: [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor: [-3, -76]
    });

    var lc = L.control.locate({
        marker: new L.Marker([0, 0], {
            icon: greenIcon,
            rotationAngle: comp,
            setView: false,
        }),
        position: 'topright',
        strings: {
            title: "Show me where I am, yo!"
        }
    }).addTo(map);

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

    var gps = new L.Control.Gps({
        //autoActive:true,
        marker: new L.Marker([0, 0], {
            icon: greenIcon,
            rotationAngle: comp
        }),
        autoCenter: true
    });

    var routeBtn = document.getElementById('routeButton');

    /*routeBtn.addEventListener('click', function (event) {
        L.Routing.control({
            waypoints: [
                L.latLng(45.575730, 15.002411),
                L.latLng(42.575730, 12.002411),
            ]
        }).addTo(map)

    });*/

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
    gps.addTo(map);

    /*
    varyant 2
     var greenIcon = L.icon({
           iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
           iconSize:     [15, 30], // size of the icon
           shadowAnchor: [4, 62],  // the same for the shadow
           popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
       });

       var m = L.marker(map.getCenter(), {
           //center: latLng,
           icon:  greenIcon,
           rotationAngle: 0,
           draggable: false
       }).addTo(map);

       setInterval(function() {
           map.locate({setView: true,  maximumAge:50000});
           navigator.geolocation.watchPosition(function (event) {

               m.setLatLng([e.coords.latitude, e.coords.longitude])
           })

       }, 500);*/
    //setInterval(lc.start(), 500);
    //lc.start();


    /*var current_position;
    var current_accuracy;

    function onLocationFound(e) {
        // if position defined, then remove the existing position marker and accuracy circle from the map
        if (current_position) {
            map.removeLayer(current_position);
            map.removeLayer(current_accuracy);
        }
        var radius = e.accuracy / 2;

        current_position = L.marker(e.latlng).addTo(map)
            .bindPopup("You are within " + radius + " meters from this point").openPopup();

        current_accuracy = L.circle(e.latlng, radius).addTo(map);
    }

    function onLocationError(e) {
        alert(e.message);
    }

    map.on('locationfound', onLocationFound);
    map.on('locationerror', onLocationError);

    // wrap map.locate in a function
    function locate() {
        map.locate({ setView: true, maxZoom: 16 });
    }

    // call locate every 3 seconds... forever
    setInterval(locate, 500);*/


    /*L.Routing.control({
        waypoints: [
            //L.latLng(e.latlng.lat, e.latlng.lng),
            L.latLng(45.575730, 15.002411),
            //console.log(L.latLng(e.latlng.lat, e.latlng.lng)),
            //console.log("L.latLng(e.latlng.lat, e.latlng.lng)"),
            L.latLng(42.575730, 12.002411),
            //console.log("L.latLng(45.575730, 15.002411)"),
            //console.log(L.latLng(45.575730, 15.002411)),
        ]
    }).addTo(map)*/

    /* var greenIcon = L.icon({
         iconUrl: 'https://cdn.pixabay.com/photo/2013/07/12/11/58/car-145008_960_720.png',
         iconSize: [20, 40], // size of the icon
         shadowAnchor: [4, 62],  // the same for the shadow
         popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
     })




     var gps = new L.Control.Gps({
         //autoActive:true,
         marker: new L.Marker([0, 0], {
             icon: greenIcon,
             rotationAngle: comp
         }),
         autoCenter: true
     });//inizialize control

     L.Routing.control({
         waypoints: [
             //L.latLng(e.latlng.lat, e.latlng.lng),
             L.latLng(45.575730, 15.002411),
             //console.log(L.latLng(e.latlng.lat, e.latlng.lng)),
             //console.log("L.latLng(e.latlng.lat, e.latlng.lng)"),
             L.latLng(42.575730, 12.002411),
             //console.log("L.latLng(45.575730, 15.002411)"),
             //console.log(L.latLng(45.575730, 15.002411)),
         ]
     }).addTo(map);



     gps.on('gps:located', function (event) {
         //	e.marker.bindPopup(e.latlng.toString()).openPopup()
         e.latlng
         //console.log(map.getCenter());

     });




     function onLocationFound(e) {
         var radius = e.accuracy;
         var myPosition = e.latlng;
         L.marker(myPosition).addTo(map)
             .bindPopup("You are within " + radius + " meters from this point").openPopup();
         L.circle(myPosition, radius).addTo(map);
         return myPosition;

     }

     map.on('locationfound', onLocationFound);

     if (window.DeviceOrientationEvent) {
         window.addEventListener('deviceorientation', function (event) {
             let alpha = event.alpha;
             let beta = event.beta;
             let gamma = event.gamma;
             //console.log(gps);
         })
     }
     gps.addTo(map);*/
</script>
</body>
</html>
