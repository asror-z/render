<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map - Display a map</title>
    <!--<script src="https://cdn.jsdelivr.net/npm/osrm-text-instructions@0.14.1-beta.3/index.min.js"></script>-->
    <link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">

    <style>
        .infoRoute {
            z-index: 9999;
            position: absolute;
            width: 17rem;
            height: 0;
            background: white;
            left: 2rem;
            /*bottom: -75%*/;
            overflow-y: auto;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;

        }

        .infoRouteToggle{
            left: 2rem;
            height: 75%;
            top: 8%;
            /*bottom: 8.6rem;*/
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

        .hideBtn {
            z-index: 99999;
            position: absolute;
            top: 15%;
            right: 1.5%
        }

        .toRoad {
            z-index: 9999;
            position: absolute;
            top: 1.5%;
            right: 1.5%;
            height: 2rem;
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
            /*position: absolute;*/
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

        .burgerDiv{
            z-index: 999999;
            position: absolute;
            top: 0.25rem;
            left: 1.2rem;
            background-color: white;
            padding: 5px;
        }
        .speechDiv{
            margin:10px 0px;
        }
        .speechInput{
            padding: 10px; width: 300px;border-radius: 5px; border: solid 2px #BBB;
        }
        .speechButton{
            padding:10px; background-color:#6a67ce; color: #FFFFFF; border: 0px; cursor:pointer;
            border-radius: 5px;
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
        <input type="search" value placeholder="Search...">
        <i class="fas fa-bars burgerIcon"></i>
    </div>
    <button id="toRoad" class="toRoad"><i class="fas fa-arrow-up">&nbsp;</i>В путь</button>
    <div id="infoRoute" class="row infoRoute">

        <div id="infoRouteTime" class="col-md-12"></div>
        <div id="infoText" class="col-md-12">
            <div class="row" id="dataDiv"></div>
        </div>
    </div>



    <div>
        <div class="speechDiv"><input type="text" class="speechInput" id="text-to-speech" placeholder="Enter text to speak..."/></div>
        <div><button class="speechButton" type="button" onclick="textToAudio()">Speak</button></div>
        <br/>

    </div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks.routeplayer/dist/maptalks.routeplayer.min.js"></script>
<script type="text/javascript" src="/render/places/ZMaptalks/demo/assets/js/ru.js"></script>

<script>
    var apiKey = 'pk.eyJ1Ijoiem9pcmpvbiIsImEiOiJja2VyazFteWsyNHdjMnltcTFybG54bm9yIn0.hkC_LwGxHGb3m0ukw2GkaQ';
    var resolutions = [];
    var lt = [0, 0];
    var bearing = 0;
    var whereIam = false; //  Qayerdaman
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
    }else{
        // Speech Synthesis Not Supported 😣
        alert("Sorry, your browser doesn't support text to speech!");
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

    /*Start Menu*/


    /*var options = {
        'items'  : [
            {item: 'item1', click: function () { alert('Click item1'); }},
            '-',
            {item: 'item2', click: function () { alert('Click item2'); }}
        ]
    };
    map.setMenu(options).openMenu();*/


    /*End Menu*/
    var btnStartDriving = document.getElementById('toRoad');
    var burgerIcon = document.querySelector('.burgerIcon');


    burgerIcon.addEventListener('click', function () {
        const infoRoute = document.getElementById('infoRoute');
        const burgerDiv = document.querySelector('.burgerDiv');
        infoRoute.classList.toggle('infoRouteToggle');
        burgerDiv.classList.toggle('burgerHideShow');
    });

    var btnStartDrivingState = false;
    btnStartDriving.addEventListener('click', function () {
        btnStartDrivingState = !btnStartDrivingState;

        map.animateTo({
            center: lt,
            pitch: 65,
            zoom: 19,
            //bearing: bearing,

        }, {
            duration: 1000,
            easing: 'out'
        });
        burgerIcon.click();

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
                var language = 'ru';   //ru, en, de, kor, ...

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
                    }
                    else if (direction > 22 && direction < 68) {
                        azimuth = "northeast";
                    } else if (direction >= 68 && direction <= 112){
                        azimuth = "east";
                    } else if (direction > 112 && direction <= 157) {
                        azimuth = "southeast";
                    } else if (direction >= 158 && direction < 203) {
                        azimuth = "south";
                    } else if (direction >= 203 && direction < 248) {
                        azimuth = "southwest";
                    }else if (direction >= 248 && direction < 293) {
                        azimuth = "west";
                    }else if (direction >= 293 && direction < 338) {
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

                        dataDiv.innerHTML += "<div class='col-md-2 iconsDiv'>" + turnTypeImage + "</div>" + "<div class='col-md-10 instructionsLabel'>" + updatedType + " " + adressName + "<br/>" + distancePerCoordinate + " " + stepIsMeters + "</div>";

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

                        dataDiv.innerHTML += "<div class='col-md-2 iconsDiv'>" + modifierImage + "</div>" + "<div class='col-md-10 instructionsLabel'> " + updatedManeuver + " " + adressName + "<br>" + distancePerCoordinate + " " + stepIsMeters + "<span class='d-none'>" +  stepPosition + "</span>" + "</div>";

                    }



                    for (var i = 0; i < inRoute.length; i++) {
                        arr.push(inRoute[i])
                    }

                }

                var currentDiv = document.querySelector('#dataDiv');

                currentDiv.addEventListener('click', function (e) {
                    //let clickedDiv = e.toElement.lastChild.innerText;
                    let clickedDiv = event.target.childNodes[3].innerText;
                    clickedDiv = clickedDiv.split(",");
                    var result1 = parseFloat(clickedDiv[0]);
                    var result2 =  parseFloat(clickedDiv[1]);

                    map.setView({
                        center: [result1,result2],
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
