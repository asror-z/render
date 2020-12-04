<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Map - Display a map</title>
<link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
</head>
<body>

<div id="map" class="contain" style="position: relative; height: 97vh; width: 100%">
</div>
<button id="currentPosition" class="btn btn-primary" style="z-index: 9999; position: absolute;   top: 1.5%; left: 1.5%">
    Start driving
</button>
<button id="hideBtn" class="btn btn-primary"
        style="z-index: 99999; position: absolute;   top: 1.5%; right: 1.5%">Show-Hide
</button>
<div id="infoRoute"
round: #1b8ebc; top: 10%; right: 1.5%; opacity: 0.7">     style="z-index: 9999; position: absolute; width: 300px; height: 600px; backg
    <div id="infoText" style="color: #fff"></div>
</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks.routeplayer/dist/maptalks.routeplayer.min.js"></script>

<script>
    var apiKey = 'pk.eyJ1Ijoiem9pcmpvbiIsImEiOiJja2VyazFteWsyNHdjMnltcTFybG54bm9yIn0.hkC_LwGxHGb3m0ukw2GkaQ';
    var resolutions = [];
    var lt = [0, 0];
    var bearing = 0;
    var d = 2 * 6378137 * Math.PI;
    for (var i = 0; i < 21; i++) {
        resolutions[i] = d / (256 * Math.pow(2, i));
    }


    var map = new maptalks.Map('map', {
        center: [69.286551, 41.344058],
        zoom: 10,
        //pitch: 45,
        // a custom version of default web-mercator spatial reference
        // map's spatial reference definition
        spatialReference: {
            projection: 'EPSG:3857', // geo projection, can be a string or a function
            resolutions: resolutions,
            fullExtent: {         // map's full extent
                'top': 6378137 * Math.PI,
                'left': -6378137 * Math.PI,
                'bottom': -6378137 * Math.PI,
                'right': 6378137 * Math.PI
            }
        },
        baseLayer: new maptalks.TileLayer('base', {
            urlTemplate: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            subdomains: ['a', 'b', 'c'],
            //  tileSystem : [1, -1, -20037508.34, 20037508.34], // tile system
            minZoom: 1,
            maxZoom: 19,
        })
    });

    // point with altitude
    var latLongFinish = [69.24881988859192,41.31838202555613]
    var finishPoint = new maptalks.Marker(
        latLongFinish,
        {}
    );
    console.log(finishPoint)
    /*  var circle = new maptalks.Marker(
          [69.28646924074461, 41.34406571580748],
          {
              'symbol' : {
                  'markerFile'   : '/render/places/ZMapTalks/demo/assets/images/circle.png',
                  'markerWidth'  : 80,
                  'markerHeight' : 80,
                  'markerDx'     : 0,
                  'markerDy'     : 0,
                  'markerOpacity': 1,

              }
          }
      );*/

    var circle = new maptalks.Circle(lt, 25, {
        symbol: {
            lineColor: '#34495e',
            lineWidth: 2,
            polygonFill: '#1b8ebc',
            polygonOpacity: 0.4
        }
    });
    var circle2 = new maptalks.Circle(lt, 5, {
        symbol: {
            lineColor: '#e7ecf1',
            lineWidth: 4,
            polygonFill: '#0429f1',
            polygonOpacity: 1
        }
    });

    new maptalks.VectorLayer('vector3', {
        zIndex: 99
    }).addGeometry([circle, circle2, finishPoint]).addTo(map);
    /* new maptalks.VectorLayer('vector', [point], {
         enableAltitude: false,        // enable altitude
         altitudeProperty: 'altitude' // altitude property in properties, default by 'altitude'
     }).addTo(map);*/

    var options = {
        enableHighAccuracy: true,
        // timeout: 5000,
        maximumAge: 0
    };



    var btnStartDriving = document.getElementById('currentPosition');
    var hideBtn = document.getElementById('hideBtn');
    var infoRoute = document.getElementById('infoRoute');
    $(hideBtn).ready(function () {
        $(infoRoute).hide();
        $(hideBtn).click(function () {
            $(infoRoute).toggle();
        })
    })

    var btnStartDrivingState = false;
    btnStartDriving.addEventListener('click', function () {
        btnStartDrivingState = !btnStartDrivingState;
        console.log(btnStartDrivingState)

        map.animateTo({
            pitch: 55,
            zoom: 19,
            center: lt,
            bearing: bearing,

        }, {
            duration: 4000,
            easing : 'out'
        });
        
    })

    function success(data) {
        lt = [data.coords.longitude, data.coords.latitude];

        circle.setCoordinates(lt);
        circle2.setCoordinates(lt);

        if (bearing>180){
        bearing = bearing - 180 + (-180)
        }
        if (btnStartDrivingState) {
            document.querySelector('#infoText').innerHTML = '';
            getAPI(lt)
            changeView()
        } else {

        }
       // map.setBearing(bearing);
        // map.setCenter(lt)
         console.log(bearing)
        // point.setCoordinates(lt);

        // var mp = map.setView(cameraPosition);
    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    navigator.geolocation.watchPosition(success, error, options);


    var coords = [];

    function getAPI(currentP) {
        fetch(' https://api.mapbox.com/directions/v5/mapbox/driving/' + currentP + ';' + latLongFinish + '?alternatives=false&geometries=geojson&steps=true&language=ru&access_token=' + apiKey)
            .then(response => response.json())
            .then(data => {
                var arr = []
                /* console.log(data)
                 console.log('111')*/

                    var infoHtml = ' ';
                coords = data.routes[0].legs[0].steps
                bearing = coords[0].maneuver.bearing_after
                for (var j = 0; j < coords.length; j++) {
                    var inRoute = data.routes[0].legs[0].steps[j].geometry.coordinates
                    var infoRoutes = data.routes[0].legs[0].steps[j]
                    infoHtml +=  data.routes[0].legs[0].steps[j].maneuver.instruction
                    document.querySelector('#infoText').innerHTML = infoHtml;
                    for (var i = 0; i < inRoute.length; i++) {
                        arr.push(inRoute[i])
                    }
                }

                var line = new maptalks.LineString(arr, {
                    arrowStyle: null, // arrow-style : now we only have classic
                    arrowPlacement: 'vertex-last', // arrow's placement: vertex-first, vertex-last, vertex-firstlast, point
                    visible: true,
                    editable: true,
                    cursor: null,
                    shadowBlur: 0,
                    shadowColor: 'black',
                    draggable: false,
                    dragShadow: false, // display a shadow during dragging
                    drawOnAxis: null,  // force dragging stick on a axis, can be: x, y
                    symbol: {
                        'lineColor': '#6c73ef',
                        'lineWidth': 4
                    }
                });

                if (map.getLayer('vector2')) {
                    map.removeLayer('vector2')
                    new maptalks.VectorLayer('vector2', line).addTo(map);
                } else {
                    new maptalks.VectorLayer('vector2', line).addTo(map);
                }
            })
    }


    //  changeView();

    function changeView() {
        map.animateTo(
            map.getView()
            , {
                duration: 1000
            });
        setTimeout(function () {
            map.animateTo({
                center: lt,
                //zoom: 19,
                bearing: bearing,
                pitch: 55,

            }, {
                duration: 2000,
                easing : 'out'
            });
        }, 0);

    }


    /*var cameraPosition = {
        "center": lt,
        "zoom": 18,
        "pitch": 45,
        "bearing": 8
    }
    var mp = map.setView(cameraPosition);
*/

</script>
</body>
</html>
<!--<svg class='leaflet-control-locate-location' xmlns="http://www.w3.org/2000/svg" width="100" height="100" version="1.1"
     viewBox="-12 -12 24 24">
    <style>
        .leaflet-control-locate-location{
            border-radius: 50%;
        }

        .leaflet-control-locate-location .circleAnim {
            animation: leaflet-control-locate-throb 4s ease infinite
        }
        .leaflet-control-locate-location .circleStat {


        }


        @keyframes leaflet-control-locate-throb {
            0% {
                stroke-width: 0.4
            }

            50% {
                stroke-width: 0.9;
                transform: scale(0.8, 0.8)
            }

            100% {
                stroke-width: 0.4
            }
        }

    </style>
    <circle class="circleAnim"r="3" style="stroke:#fff;stroke-width:1;fill:#2A93EE;fill-opacity:1;opacity:1; " />
    <circle class="circleStat"r="15" style="stroke:#2A93EE;stroke-width:0;fill:#2A93EE;fill-opacity:0.5;opacity:0.5; " />
</svg>
-->
