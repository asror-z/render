<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map - Display a map</title>
    <script src="https://cdn.jsdelivr.net/npm/osrm-text-instructions@0.14.1-beta.3/index.min.js"></script>
    <link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">

    <style>
        #infoRoute {
            z-index: 9999;
            position: absolute;
            width: 17rem;
            height: 100%;
            background: white;
            top: 0%;
            right: 1.5%;
            overflow-y: auto;

        }

        .instructionsLabel {
            text-align: -webkit-right;
            padding-top: 0.5rem;
            border-top: 1px solid #d9d9d9;
            margin-bottom: 1rem;
            font-family: "Roboto,Arial,sans-serif";
            font-size: 0.9rem;
            font-weight: 600;
            color: black;
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

        .iconsDiv {
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>

<div id="map" class="contain position-relative"></div>

<div id="infoRoute" class="row">
    <div id="infoRouteTime" class="col-md-12"></div>

    <div id="infoText" class="col-md-12">
        <div class="row" id="dataDiv"></div>
    </div>

</div>

<button id="currentPosition" class="btn btn-primary" style="z-index: 9999; position: absolute;   top: 1.5%; left: 1.5%">
    Start driving
</button>
<button id="hideBtn" class="btn btn-primary"
        style="z-index: 99999; position: absolute;   top: 15%; left: 1.5%">Show-Hide
</button>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks.routeplayer/dist/maptalks.routeplayer.min.js"></script>
<script type="text/javascript" src="/render/places/ZMaptalks/demo/assets/js/ru.js"></script>

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
    var latLongFinish = [69.24881988859192, 41.31838202555613]
    var finishPoint = new maptalks.Marker(
        latLongFinish,
        {}
    );

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

    //getAPI(lt)

    function success(data) {
        lt = [data.coords.longitude, data.coords.latitude];

        circle.setCoordinates(lt);
        circle2.setCoordinates(lt);

        if (bearing > 180) {
            bearing = bearing - 180 + (-180)
        }
        if (btnStartDrivingState) {
            document.querySelector('#dataDiv').innerHTML = '';
            getAPI(lt)
            changeView()
        } else {

        }
    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    navigator.geolocation.watchPosition(success, error, options);


    var coords = []

    function getAPI(currentP) {
        fetch(`https://router.project-osrm.org/route/v1/driving/${currentP};${latLongFinish}?overview=false&geometries=geojson&alternatives=true&steps=true`)
            .then(response => response.json())
            .then(data => {
                var arr = [];
                var distance = data.routes[0].distance;
                var duration = data.routes[0].duration;
                var infoRouteTime = document.querySelector('#infoRouteTime');
                var infoText = document.querySelector('#infoText');
                var iconColumn = document.querySelector('#iconColumn');
                var textColumn = document.querySelector('#textColumn');
                var dataDiv = document.querySelector('#dataDiv');
                var modifierImage;
                var turnTypeImage;
                var isMeters = "метров";
                var stepIsMeters = "метров";
                var isMinutes = "сек";
                var language = 'ru'   //ru, en, de, kor, ...


                coords = data.routes[0].legs[0].steps;
                bearing = coords[0].maneuver.bearing_after;

                if (duration >= 60 && duration < 3600) {
                    duration = duration / 60;
                    duration = Math.round(duration);
                    isMinutes = "мин"
                } else if (duration >= 3600) {
                    duration = duration / 3600;
                    duration = duration.toFixed(2);
                    isMinutes = "ч";
                }

                if (distance >= 1000) {
                    distance = distance / 1000;
                    distance = distance.toFixed(1);
                    isMeters = "км";
                }

                infoRouteTime.innerHTML = `<div class='timeDiv'><label class='timeLabel'> ${duration}  ${isMinutes} </label></div><div class='distanceDiv'><label class='distanceLabel'>дистанция: ${distance}  ${isMeters}</label></div>`;

                //console.log(data);
                var response = data.routes[0].legs
                response.legs.forEach(function(leg) {
                    leg.steps.forEach(function(step) {
                        console.log(instruction = osrmTextInstructions.compile('en', step, options))
                    });
                });
                /*for (var j = 0; j < coords.length; j++) {
                    var inRoute = data.routes[0].legs[0].steps[j].geometry.coordinates
                    var infoRoutes = data.routes[0].legs[0].steps[j];
                    var turnType = data.routes[0].legs[0].steps[j].maneuver.type;
                    var modifier = data.routes[0].legs[0].steps[j].maneuver.modifier;
                    var adressName = data.routes[0].legs[0].steps[j].name;
                    var distancePerCoordinate = data.routes[0].legs[0].steps[j].distance;
                    var maneuver = data.routes[0].legs[0].steps[j].maneuver;
                    var lat = data.routes[0].legs[0].steps[j].maneuver.location[0]
                    var lng = data.routes[0].legs[0].steps[j].maneuver.location[1]

                   
                    if (distancePerCoordinate >= 1000) {
                        distancePerCoordinate = distancePerCoordinate / 1000;
                        distancePerCoordinate = distancePerCoordinate.toFixed(1);
                        stepIsMeters = "км";
                    } else {
                        distancePerCoordinate = Math.round(distancePerCoordinate);
                        stepIsMeters = "метров";
                    }


                    if (modifier == undefined || modifier == null) {
                        switch (turnType) {
                            case "depart":
                                turnTypeImage = "<i class='fas fa-arrow-alt-circle-up'></i>";
                                break;
                            case "arrive":
                                turnTypeImage = "<i class='fas fa-flag'></i>";
                                break;
                        }

                        console.log(adressName);

                        dataDiv.innerHTML += "<div class='col-md-2 iconsDiv'>" + turnTypeImage + "</div>" + "<div class='col-md-10 instructionsLabel'>" + turnType + " " + adressName + "<br/>" + distancePerCoordinate + " " + stepIsMeters + "</div>";

                    } else if (modifier != undefined || modifier != null) {

                        switch (modifier) {
                            case "left":
                                modifierImage = "<i class='fas fa-arrow-alt-circle-left'></i>";
                                break;
                            case "right":
                                modifierImage = "<i class='fas fa-arrow-alt-circle-right'></i>";
                                break;
                            case "uturn":
                                modifierImage = "<i class='fas fa-undo-alt'></i>";
                        }

                         var updatedManeuver = setLanguage(maneuver);

                         //console.log(updatedManeuver);

                      
                        dataDiv.innerHTML += "<div class='col-md-2 iconsDiv'>" + modifierImage + "</div>" + "<div class='col-md-10 instructionsLabel'>" + turnType + " " + updatedManeuver.modifier + " " + adressName + "<br>" + distancePerCoordinate + " " + stepIsMeters + "</div>";

                    }

                    for (var i = 0; i < inRoute.length; i++) {
                        arr.push(inRoute[i])
                    }
                }  */


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
                easing: 'out'
            });
        }, 0);

    }

</script>
</body>
</html>
