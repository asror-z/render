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


        function success(data) {
            var lt = [data.coords.longitude, data.coords.latitude];

            map.setCenter(lt)
            point.setCoordinates(lt);
        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        navigator.geolocation.watchPosition(success, error, options);
        var coords = [];
        var arrI = []
        fetch('https://api.mapbox.com/directions/v5/mapbox/driving/69.286551,%2041.344058;69.298004,41.363308?geometries=geojson&access_token=' + apiKey)
            .then(response => response.json())
            .then(data => {
                    coords = data.routes[0].geometry.coordinates
                    for (var i = 0; i < coords.length; i++) {
                        coords[i].push(10000 + i * 1000)
                        arrI.push(coords[i])
                    }
                    console.log('data')
                    console.log(data)
                    console.log('data')

                    var route = [{
                        "path": arrI,


                        // [
                        //     //[x, y, time]
                        //     [69.286551, 41.344058, 11000],
                        //     [69.289209, 41.358464, 21000],
                        //     [69.295272, 41.360704, 31000],
                        //     [69.297741, 41.363244, 41000],
                        //     [69.300406, 41.365281, 51000],
                        //     [69.298004, 41.363308, 61000],
                        // ],
                        //marker's symbol
                        "markerSymbol": null,
                        //route line's symbol
                        "lineSymbol": {
                            lineColor: '#f00'
                        }
                    }];

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

                    var player = new maptalks.RoutePlayer(route, map);
                    player.play();

                }

            );
        console.log('arrI')
        console.log(arrI)
        console.log('arrI')
    </script>
</body>

</html>
