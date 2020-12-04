<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map - Display a map</title>
    <link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
    <style>
        .w-mc{
            width: max-content;
        }
        .arrow-sprite {
            background-image: url(http://map.project-osrm.org/images/osrm.directions.icons.color.svg);
            background-repeat: no-repeat;
            background-size: 455px 20px;
            width: 30px;
            height: 20px;

        }

        .icon-start {
            width: 30px;
            height: 20px;

        }

        .arrow-A {
            background-position: -200px 0px;
        }

        .arrow-B {
            background-position: -247px 0px;

        }

        .arrow-left {
            background-position: -150px 0px;
        }

        .arrow-right {
            background-position: -50px 0px;
        }

        .arrow-uturn {
            background-position: -227px 0px
        }

        #map {
            height: 100vh;
        }

        #content {
            padding: 0 !important;
            max-width: 100%;
            overflow: hidden;
            box-sizing: border-box;
        }

        #contain {
            position: relative;
            height: 97vh;
            width: 100%
        }

        #currentPosition {
            z-index: 9999;
            position: absolute;
            top: 1.5%;
            left: 1.5%
        }

        #hideBtn {
            z-index: 99999;
            position: absolute;
            top: 1.5%;
            right: 1.5%
        }

        #infoRoute {
            z-index: 9999;
            position: fixed;
            width: 20rem;
            height: 400px;
            width: 300px;
            background: whitesmoke;
            top: 10%;
            right: 1.5%;
            opacity: 0.9;
            overflow-y: auto;
            

        }
        #infoRoute::-webkit-scrollbar { 
            width: 0;
            }
        #infoRoute:hover {
            opacity: 1;
        }

        #infoText {
            color: #000
        }

        .instructionsDiv {
            display: flex;
            border-top: 1px solid #d9d9d9;
            color: black;
            line-height: 24px;
            min-height: 60px;
            padding: 0% 2%;
        }

        .instructionsDiv:last-child {
            border-bottom: 1px solid #d9d9d9;
        }

        .timeDiv {
            text-align: center;
        }

        .distanceDiv {
            text-align: center;
        }

        .timeLabel {
            padding-top: 0.5rem;
            text-align: center;
            font-family: "Roboto,Arial,sans-serif";
            font-size: 1.5rem;
            font-weight: 600;
            color: seagreen;
        }

        .distanceLabel {
            text-align: center;
            font-family: "Roboto,Arial,sans-serif";
            font-size: 1.2rem;
            font-weight: 600;
            color: dimgrey;
        }
    </style>

</head>

<body>

    <div id="map" class="contain">

    </div>
    <div id="infoRoute" class="row">
        <div id="infoRouteTime" class="col-md-12"></div>
        <ul id="infoText" class="list-group" >
            
        </ul>

    </div>
    <button id="currentPosition" class="btn btn-primary">
        Start driving
    </button>
    <button id="hideBtn" class="btn btn-primary">Show-Hide
    </button>

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
            zoom: 13,
            pitch: 45,
            // a custom version of default web-mercator spatial reference
            // map's spatial reference definition
            spatialReference: {
                projection: 'EPSG:3857', // geo projection, can be a string or a function
                resolutions: resolutions,
                fullExtent: { // map's full extent
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
        var latLongFinish = [69.24881988859192, 41.31838202555613]
        var finishPoint = new maptalks.Marker(
            latLongFinish, {}
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
        $(hideBtn).ready(function() {
            $(infoRoute).show();
            $(hideBtn).click(function() {
                $(infoRoute).toggle();
            })
        })

        var btnStartDrivingState = false;
        btnStartDriving.addEventListener('click', function() {
            btnStartDrivingState = !btnStartDrivingState;
            console.log(btnStartDrivingState)

            map.animateTo({
                pitch: 55,
                zoom: 19,
                center: lt,
                bearing: bearing,

            }, {
                duration: 4000,
                easing: 'out'
            });

        })

        function success(data) {
            lt = [data.coords.longitude, data.coords.latitude];

            circle.setCoordinates(lt);
            circle2.setCoordinates(lt);

            if (bearing > 180) {
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
                .then(data => renderRouteSidebar(data))
        }

        //
        function renderRouteSidebar(data) {
            var arr = [],
                infoRouteTime = document.querySelector('#infoRouteTime'),
                infoText = document.querySelector('#infoText'),
                iconColumn = document.querySelector('#iconColumn'),
                textColumn = document.querySelector('#textColumn')



            renderDurationAndDistance(data)


            renderRouteList(data, arr)

            







            /* console.log(data)
             console.log('111')*/



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
                drawOnAxis: null, // force dragging stick on a axis, can be: x, y
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
        }


        function renderDurationAndDistance(data) {

            let distance = data.routes[0].distance,
                duration = data.routes[0].duration,
                isMeters = "м",
                isMinutes = "сек"


            if (duration >= 60) {
                duration = Math.round(duration / 60);
                isMinutes = "мин"
            } else if (duration >= 3600) {
                duration = (duration / 3600).toFixed(2);
                isMinutes = "ч";
            }
            if (distance >= 1000) {
                distance = (distance / 1000).toFixed(1);
                isMeters = "км";
            }

            infoRouteTime.innerHTML = `<div class='timeDiv'><label class='timeLabel'> ${duration}  ${isMinutes} </label></div><div class='distanceDiv'><label class='distanceLabel'>дистанция: ${distance}  ${isMeters}</label></div>`


        }

        function renderRouteList(data, arr) {
            let coords = data.routes[0].legs[0].steps;
            for (var j = 0; j < coords.length; j++) {
                var dataLegs = data.routes[0].legs[0].steps[j]
                var inRoute = dataLegs.geometry.coordinates
                var infoRoutes = dataLegs;
                var turnType = dataLegs.maneuver.type;
                var modifier = dataLegs.maneuver.modifier;
                var adressName = dataLegs.name;
                var distancePerCoordinate = dataLegs.distance;

                let varCheckDistance = checkDistance(distancePerCoordinate);

                


                if (modifier == undefined || modifier == null) {
                    switch (turnType) {
                        case "depart":
                            turnTypeImage = "<i class=' icon-start d-block far fa-flag'></i>";
                            break;
                        case "arrive":
                            turnTypeImage = "<i class=' icon-start d-block fas fa-flag'></i>";
                            break;
                    }
                    infoText.innerHTML += `<li class="list-group-item d-flex justify-content-between align-items-center">${turnTypeImage}<p class='inline-block ml-3 mb-0'> ${adressName}</p></li>`;


                } else if (modifier != undefined || modifier != null) {
                    var modifierImage;
                    if (modifier === "left" || modifier === "right" || modifier === "uturn") {
                        modifierImage = `<i class='arrow-sprite arrow-${modifier} d-block '></i>`
                    }


                    // infoText.innerHTML += `<div class='instructionsDiv'><label class='instructionsLabel d-flex align-items-center justify-content-start mb-0 m-1'>${modifierImage}<p class='inline-block ml-3 mb-0'> 
                    //     ${modifier} ${turnType} ${adressName} <p class="mb-0 text-center">${varCheckDistance.distancePerCoordinate} ${varCheckDistance.stepIsMeters}</p> </p></label></div>`;
                    infoText.innerHTML += `
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                    ${modifierImage}<p class='block ml-3 mb-0'> 
                        ${modifier} ${turnType} ${adressName} <span class="badge w-mc d-block badge-primary badge-pill">${varCheckDistance.distancePerCoordinate} ${varCheckDistance.stepIsMeters}</span> </p></li>`;
                }
                renderRouteLine(arr, inRoute)
                
            }


        }

        function checkDistance(distancePerCoordinate) {
            if (distancePerCoordinate >= 1000) {
                distancePerCoordinate = (distancePerCoordinate / 1000).toFixed(1);
                stepIsMeters = "км";
                return {
                    distancePerCoordinate: distancePerCoordinate,
                    stepIsMeters: stepIsMeters
                }
            } else {
                distancePerCoordinate = Math.round(distancePerCoordinate);
                stepIsMeters = "м";
                return {
                    distancePerCoordinate: distancePerCoordinate,
                    stepIsMeters: stepIsMeters
                }
            }
        }

        function renderRouteLine(arr, inRoute ) {
            for (var i = 0; i < inRoute.length; i++) {
                arr.push(inRoute[i])
            }

        }




        //  changeView();

        function changeView() {
            map.animateTo(
                map.getView(), {
                    duration: 1000
                });
            setTimeout(function() {
                map.animateTo({
                    center: lt,
                    //zoom: 19,
                    bearing: bearing,
                    pitch: 55,

                }, {
                    duration: 2000,
                    easing: 'out'
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
