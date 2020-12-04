<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map - Display a map</title>
    <link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">

    <style>
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

        #infoRoute {
            z-index: 9999;
            position: fixed;
            width: 20rem;
            height: 100%;
            background: white;
            top: 0%;
            right: 0%;
            overflow-y: scroll;
            overflow: auto;
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

        .instructionsLabel:hover {
            cursor: pointer;
            color: #1a73e8 !important;
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

    <div id="map" class="contain position-relative"></div>
    <div id="infoRoute" class="row">
        <div id="infoRouteTime" class="col-md-12"></div>
        <div id="infoText">
            <div class="row">
                <div id="iconColumn" class="col-md-2"></div>
                <div id="textColumn" class="col-md-10"></div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/maptalks/dist/maptalks.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/maptalks.routeplayer/dist/maptalks.routeplayer.min.js"></script>

    <script>
        var apiKey = 'pk.eyJ1Ijoiem9pcmpvbiIsImEiOiJja2VyazFteWsyNHdjMnltcTFybG54bm9yIn0.hkC_LwGxHGb3m0ukw2GkaQ';
        var resolutions = [];

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
        var point = new maptalks.Marker(
            [69.28646924074461, 41.34406571580748], {
                properties: {
                    altitude: 400
                }
            }
        );

        new maptalks.VectorLayer('vector', [point], {
            enableAltitude: false, // enable altitude
            altitudeProperty: 'altitude' // altitude property in properties, default by 'altitude'
        }).addTo(map);

        var options = {
            enableHighAccuracy: true,
            // timeout: 5000,
            maximumAge: 0
        };

        var lt;

        function success(data) {
            lt = [data.coords.longitude, data.coords.latitude];

            // map.setCenter(lt)

            point.setCoordinates(lt);

        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        navigator.geolocation.watchPosition(success, error, options);

        var coords = [];
        fetch('http://router.project-osrm.org/route/v1/driving/69.286551,41.344058;69.298004,41.363308?overview=false&geometries=geojson&alternatives=true&steps=true')
            .then(response => response.json())
            .then(data => {
                var arr = [],
                    distance = data.routes[0].distance,
                    duration = data.routes[0].duration,
                    infoRouteTime = document.querySelector('#infoRouteTime'),
                    infoText = document.querySelector('#infoText'),
                    iconColumn = document.querySelector('#iconColumn'),
                    textColumn = document.querySelector('#textColumn'),
                    isMeters = "метров",
                    isMinutes = "сек",
                    coords = data.routes[0].legs[0].steps;

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

                infoRouteTime.innerHTML += `<div class='timeDiv'><label class='timeLabel'> ${duration}  ${isMinutes} </label></div>`;

                infoRouteTime.innerHTML += `<div class='distanceDiv'><label class='distanceLabel'>дистанция: ${distance}  ${isMeters}</label></div>`

                for (var j = 0; j < coords.length; j++) {
                    var dataLegs = data.routes[0].legs[0]
                    var inRoute = dataLegs.steps[j].geometry.coordinates
                    var infoRoutes = dataLegs.steps[j];
                    var turnType = dataLegs.steps[j].maneuver.type;
                    var modifier = dataLegs.steps[j].maneuver.modifier;
                    var adressName = dataLegs.steps[j].name;
                    var distancePerCoordinate = dataLegs.steps[j].distance;


                    if (distancePerCoordinate >= 1000) {
                        distancePerCoordinate = (distancePerCoordinate / 1000).toFixed(1);
                        stepIsMeters = "км";
                    } else {
                        distancePerCoordinate = Math.round(distancePerCoordinate);
                        stepIsMeters = "метров";
                    }

                    if (modifier == undefined || modifier == null) {
                        switch (turnType) {
                            case "depart":
                                turnTypeImage = "<i class=' icon-start d-block far fa-flag'></i>";
                                break;
                            case "arrive":
                                turnTypeImage = "<i class=' icon-start d-block fas fa-flag'></i>";
                                break;
                        }
                        infoText.innerHTML += `<div class='instructionsDiv'><label class='instructionsLabel  d-flex align-items-center justify-content-start mb-0'>${turnTypeImage}<p class='inline-block ml-3 mb-0'> ${adressName}</p><br/></label></div>`;
                    } else if (modifier != undefined || modifier != null) {
                        var modifierImage;
                        if( modifier === "left" || modifier === "right" || modifier === "uturn"){
                            modifierImage = `<i class='arrow-sprite arrow-${modifier} d-block '></i>`
                        }
                        

                        infoText.innerHTML += `<div class='instructionsDiv'><label class='instructionsLabel d-flex align-items-center justify-content-start mb-0 m-1'>${modifierImage}<p class='inline-block ml-3 mb-0'>поверните  
                        ${modifier} ${turnType} ${adressName} <p class="mb-0 text-center">${distancePerCoordinate} ${stepIsMeters}</p> </p></label></div>`;
                    }

                    for (var i = 0; i < inRoute.length; i++) {
                        arr.push(inRoute[i])
                    }
                }
                ;

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

                new maptalks.VectorLayer('vector2', line).addTo(map);
            })
            
        var cameraPosition = {
            "center": [
                69.291717669631,
                41.353240248408525
            ],
            "zoom": 15,
            "pitch": 49.40000000000005,
            "bearing": 105.59999999999957
        }
        var mp = map.setView(cameraPosition);

        /*var player = new maptalks.RoutePlayer(route, map);
        player.play();*/
    </script>
</body>

</html>