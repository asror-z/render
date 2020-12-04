<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Map - Display a map</title>
<link rel="stylesheet" href="/render/places/ZMapTalks/demo/assets/css/maptalksNew.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">

<body>

<div id="map" class="contain"></div>
<div id="demo"></div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks/dist/maptalks.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/maptalks.routeplayer/dist/maptalks.routeplayer.min.js"></script>

<script>

    var resolutions = [];
    var d = 2 * 6378137 * Math.PI;
    for (var i = 0; i < 21; i++) {
        resolutions[i] = d / (256 * Math.pow(2, i));
    }


    var map = new maptalks.Map('map', {
        center:     [69.286551, 41.344058],
        zoom:  13,
        pitch: 45,
        // a custom version of default web-mercator spatial reference
        // map's spatial reference definition
        spatialReference : {
            projection : 'EPSG:3857', // geo projection, can be a string or a function
            resolutions : resolutions,
            fullExtent : {         // map's full extent
                'top': 6378137 * Math.PI,
                'left': -6378137 * Math.PI,
                'bottom': -6378137 * Math.PI,
                'right': 6378137 * Math.PI
            }
        },
        baseLayer : new maptalks.TileLayer('base',{
            urlTemplate: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            subdomains: ['a','b','c'],
            //  tileSystem : [1, -1, -20037508.34, 20037508.34], // tile system
            minZoom : 1,
            maxZoom : 19,
        })
    });

 /*   var map = new maptalks.Map('map', {
        center: [-0.113049, 51.498568],
        zoom: 20,
        baseLayer: new maptalks.TileLayer('base', {
            urlTemplate: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            subdomains: ['a','b','c'],
            attribution: {
                content: '&copy; <a href="http://osm.org">OpenStreetMap</a> contributors, &copy; <a href="https://carto.com/">CARTO</a>, &copy ESRI'
            },
            baseLayer : new maptalks.TileLayer('base',{
                urlTemplate: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}.jpg',
                minZoom : 1,
                maxZoom : 19,
            })
        }),
        pitch : 45,
        //attribution: true,
        zoomControl : true, // add zoom control
        scaleControl : true, // add scale control
        //overviewControl : true, // add overview control

    });*/

    /*map.addLayer(new maptalks.TileLayer('carto',{
        opacity : 0.6, // TileLayer's opacity, 0-1
        urlTemplate: 'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',
        subdomains: ['a','b','c','d'],
        attribution: '&copy; <a href="http://osm.org">OpenStreetMap</a> contributors, &copy; <a href="https://carto.com/">CARTO</a>'
    }));
    */

    // point with altitude
    var point = new maptalks.Marker(
        [69.28646924074461, 41.34406571580748],
        {
            properties : {
                altitude : 400
            }
        }
    );

    // same point without altitude
/*
    var point0 = new maptalks.Marker(
        [ 69.2486144, 41.304064 ]

    ).updateSymbol({
        markerOpacity : 0.5,
        markerFill : '#bbb'
    });
*/

    new maptalks.VectorLayer('vector', [point], {
        enableAltitude : false,        // enable altitude
        altitudeProperty : 'altitude' // altitude property in properties, default by 'altitude'
    }).addTo(map);

    var options = {
        enableHighAccuracy: true,
        // timeout: 5000,
        maximumAge: 0
    };


    function success(data) {
        var lt = [ data.coords.longitude, data.coords.latitude];
       
        //map.setCenter(lt)
       // point.setCoordinates(lt);
    }

    function error(err) {
        console.warn(`ERROR(${err.code}): ${err.message}`);
    }

    navigator.geolocation.watchPosition(success, error, options);

    var route = [
        {
            "path" : [
                //[x, y, time]
                [69.286551, 41.344058, 11000],
                [69.289209, 41.358464, 21000],
                [69.295272, 41.360704, 31000],
                [69.297741, 41.363244, 41000],
                [69.300406, 41.365281, 51000],
                [69.298004, 41.363308, 61000],
            ],
            //marker's symbol
            "markerSymbol" : null,
            //route line's symbol
            "lineSymbol" : { lineColor : '#f00' }
        }
    ];
    var lm = {
        "center": [
            69.291717669631,
            41.353240248408525
        ],
        "zoom": 15,
        "pitch": 49.40000000000005,
        "bearing": 105.59999999999957
    }
    var mp = map.setView(lm);

    var player = new maptalks.RoutePlayer(route, map);
    player.play();


</script>
</body>
</html>
