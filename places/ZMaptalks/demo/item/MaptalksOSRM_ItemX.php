<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\App\eyuf\MapItem;
use zetsoft\dbitem\eyuf\SIPMLItem;
use zetsoft\system\Az;

//start|XakimjonErgashov|2020-10-14

if (!isset($item)) {
    $item = new MapItem();
    $item->startingPoint = [69.25, 41.40];
    $item->endPoint = [69.24881988859192, 41.31838202555613];
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map - Display a map</title>
    <!--<script src="https://cdn.jsdelivr.net/npm/osrm-text-instructions@0.14.1-beta.3/index.min.js"></script>-->
    <link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .infoRoute {
            z-index: 9999;
            position: absolute;
            height: 0;
            background: white;
            left: 2rem;
            overflow-y: auto;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 90%;
        }

        .infoRouteToggle {
            left: 2rem;
            height: 9%;
            bottom: 0;
            transition: all ease 1s;
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
            text-align: center;
            font-family: "Roboto,Arial,sans-serif";
            font-size: 1.2em;
            font-weight: 600;
            color: seagreen;
        }

        .distanceLabel {
            text-align: center;
            font-family: "Roboto,Arial,sans-serif";
            font-size: 1em;
            font-weight: 600;
            color: dimgrey;
        }

        .iconsDiv {
            margin-top: 0.5rem;
        }

        .hideBtn {
            z-index: 99999;
            position: absolute;
            top: 15%;
            right: 1.5%
        }

        .toRoad {
            height: 2.2em;
            z-index: 9999;
            position: absolute;
            bottom: 15%;
            right: 5%;
            border-radius: 5rem;
            color: white;
            background-color: royalblue;
            border: none;
            padding-left: 0.7rem;
            padding-right: 0.7rem;
        }

        .burgerIcon {
            cursor: pointer;
            z-index: 999999;
            top: 0;
            left: 1.2rem;
        }

        .burgerHideShow {
            /*transition: all ease 0.5s;*/
            z-index: 999999;
            position: absolute;
            top: 0;
            left: 14rem;
        }

        .burgerDiv {
            z-index: 999999;
            position: absolute;
            top: 0.25rem;
            left: 1.2rem;
            background-color: white;
            padding: 5px;
            width: 90%;
        }

        .speechDiv {
            margin: 10px 0px;
        }

        .speechInput {
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: solid 2px #BBB;
        }

        .speechButton {
            padding: 10px;
            background-color: #6a67ce;
            color: #FFFFFF;
            border: 0px;
            cursor: pointer;
            border-radius: 5px;
        }

        .infoRouteUnToggle {
            left: 2rem;
            height: 90%;
            bottom: 0;
            transition: all ease 1s;
        }

        .search {
            width: inherit;
        }

        /*
                z-index: 999999;
                position: absolute;
                top: 0.25rem;
                left: 1.2rem;
                background-color: white;
        */

    </style>
</head>
<body>

<div id="map" class="contain position-relative"></div>

<div class="border rounded px-2 burgerDiv">
    <input type="search" value placeholder="Search..." class="search">
    <i class="fas fa-bars burgerIcon"></i>
</div>
<button id="toRoad" class="toRoad"><i class="fas fa-arrow-up"></i></button>
<div id="infoRoute" class="row infoRoute">

    <div id="infoRouteTime" class="col-12">
        <div class="row">
            <div id="infoRouteChild" class="col-9">
                <div class="timeLabel"></div>
                <div class="distanceLabel"></div>
            </div>
            <div class="col-3">
                <i class="fas fa-angle-up fa-2x float-right cursor-pointer" id="angleIcon"></i>
            </div>
        </div>

    </div>
    &nbsp;
    <div id="infoText" class="col-12">
        <div class="row" id="dataDiv"></div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks.routeplayer/dist/maptalks.routeplayer.min.js"></script>
<script type="text/javascript" src="/render/places/ZMaptalks/demo/assets/js/ru.js"></script>

<script>

    var angleIcon = document.querySelector('#angleIcon');

    angleIcon.addEventListener('click', function () {
        let infoRoute = document.querySelector('#infoRoute');
        angleIcon.classList.toggle('fa-angle-up');
        angleIcon.classList.toggle('fa-angle-down');
        infoRoute.classList.toggle('infoRouteToggle');
        infoRoute.classList.toggle('infoRouteUnToggle');
        btnStartDriving.classList.toggle("d-none");
    })

    var resolutions = [];
    var lt = <?=json_encode($item->startingPoint)?>; //[float,float]
    var bearing = 0;
    var d = 2 * 6378137 * Math.PI;
    for (var i = 0; i < 21; i++) {
        resolutions[i] = d / (256 * Math.pow(2, i));
    }

    if ('speechSynthesis' in window) {
        console.log('speechSynthesis supported')

        function textToAudio() {
            let msg = document.getElementById("text-to-speech").value;

            let speech = new SpeechSynthesisUtterance();
            speech.lang = "ru-RU";
            speech.text = msg;
            speech.volume = 5;
            speech.rate = .9;
            speech.pitch = 1;

            window.speechSynthesis.speak(speech);
        }
    } else {
        // Speech Synthesis Not Supported 😣
        alert("Sorry, your browser doesn't support text to speech!");
    }
    var map = new maptalks.Map('map', {
        center: [69.286551, 41.344058],
        zoom: 10,
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

    var latLongFinish = <?=json_encode($item->endPoint)?>; //[float,float]


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

    var btnStartDriving = document.getElementById('toRoad');
    var burgerIcon = document.querySelector('.burgerIcon');


    burgerIcon.addEventListener('click', function () {
        /*const infoRoute = document.getElementById('infoRoute');
        const burgerDiv = document.querySelector('.burgerDiv');
        infoRoute.classList.toggle('infoRouteToggle');
        burgerDiv.classList.toggle('burgerHideShow');*/
    });

    var btnStartDrivingState = false;
    btnStartDriving.addEventListener('click', function () {
        btnStartDrivingState = !btnStartDrivingState;
        const infoRoute = document.getElementById('infoRoute');
        const burgerDiv = document.querySelector('.burgerDiv');
        infoRoute.classList.toggle('infoRouteToggle');
        burgerDiv.classList.toggle('burgerHideShow');


        map.animateTo({
            center: lt,
            pitch: 65,
            zoom: 19,
            //bearing: bearing,
        }, {
            duration: 1000,
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

        } else {

        }
    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    navigator.geolocation.watchPosition(success, error, options);


    var coords = [];

    function getAPI(currentP) {
        fetch(`https://router.project-osrm.org/route/v1/driving/${currentP};${latLongFinish}?overview=false&geometries=geojson&alternatives=true&steps=true`)
            .then(response => response.json())
            .then(data => {

                var arr = [];
                var distance = data.routes[0].distance;
                var duration = data.routes[0].duration;
                var infoRouteTime = document.querySelector('#infoRouteTime');
                var infoRouteChild = document.querySelector('#infoRouteChild');
                var infoText = document.querySelector('#infoText');
                var iconColumn = document.querySelector('#iconColumn');
                var textColumn = document.querySelector('#textColumn');
                var dataDiv = document.querySelector('#dataDiv');
                var modifierImage;
                var turnTypeImage;
                var isMeters = "метров";
                var stepIsMeters = "метров";
                var isMinutes = "сек";
                var language = 'ru';   //ru, en, de, kor, ...
                var timeLabel = document.querySelector('.timeLabel');
                var distanceLabel = document.querySelector('.distanceLabel');

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

                var prevTime = timeLabel.innerText = duration + isMinutes;
                var prevDistance = distanceLabel.innerText = distance + isMeters;

                for (var j = 0; j < coords.length; j++) {
                    var steps = data.routes[0].legs[0].steps[j];
                    var inRoute = steps.geometry.coordinates
                    var infoRoutes = steps;
                    var turnType = steps.maneuver.type;
                    var modifier = steps.maneuver.modifier;
                    var adressName = steps.name;
                    var distancePerCoordinate = steps.distance;
                    var maneuver = steps.maneuver;
                    var lat = steps.maneuver.location[0];
                    var lng = steps.maneuver.location[1];
                    var direction = steps.maneuver.bearing_after;
                    var azimuth = null;

                    const stepPosition = inRoute[0];

                    if (direction <= 22 && direction >= 338) {
                        azimuth = "north";
                    } else if (direction > 22 && direction < 68) {
                        azimuth = "northeast";
                    } else if (direction >= 68 && direction <= 112) {
                        azimuth = "east";
                    } else if (direction > 112 && direction <= 157) {
                        azimuth = "southeast";
                    } else if (direction >= 158 && direction < 203) {
                        azimuth = "south";
                    } else if (direction >= 203 && direction < 248) {
                        azimuth = "southwest";
                    } else if (direction >= 248 && direction < 293) {
                        azimuth = "west";
                    } else if (direction >= 293 && direction < 338) {
                        azimuth = "northwest";
                    }

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

                        var updatedType = setLanguage(maneuver, azimuth);

                        dataDiv.innerHTML += "<div class='col-10 instructionsLabel'>" + updatedType + " " + adressName + "<br/>" + distancePerCoordinate + " " + stepIsMeters + "</div>" + "<div class='col-2 iconsDiv'>" + turnTypeImage + "</div>";

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

                        var updatedManeuver = setLanguage(maneuver, azimuth);

                        dataDiv.innerHTML += "<div class='col-10 instructionsLabel'> " + updatedManeuver + " " + adressName + "<br>" + distancePerCoordinate + " " + stepIsMeters + "<span class='d-none'>" + stepPosition + "</span>" + "</div>" + "<div class='col-2 iconsDiv'>" + modifierImage + "</div>";

                    }


                    for (var i = 0; i < inRoute.length; i++) {
                        arr.push(inRoute[i])
                    }

                }

                //start|XakimjonErgashov|2020-10-10
                var currentDiv = document.querySelector('#dataDiv');

                currentDiv.addEventListener('click', function (e) {
                    angleIcon.click();
                    //let clickedDiv = e.toElement.lastChild.innerText;
                    let clickedDiv = event.target.childNodes[3].innerText;
                    clickedDiv = clickedDiv.split(",");
                    var result1 = parseFloat(clickedDiv[0]);
                    var result2 = parseFloat(clickedDiv[1]);

                    map.setView({
                        center: [result1, result2],
                        pitch: 45,
                        zoom: 16,
                    });

                })
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
