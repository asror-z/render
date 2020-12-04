<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Map4</title>
  
  <style>
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto', 'sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        #floating-panel {
            background-color: #fff;
            border: 1px solid #999;
            left: 65%;
            padding: 5px;
            position: absolute;
            top: 10px;
            z-index: 5;
        }

        #title {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            margin: 10px 10px 0 0;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            font-family: Roboto;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 100%;

            position:unset!important;
        }


        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }

        #floating {
            position: absolute;
            top: 30px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto', 'sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        #btn-location {
            position: absolute;
            right: 20px;
            top: 50px;
            z-index: 1;
            padding: 20px;
            border: none;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.8);
            transition: 0.5s;
        }

        #btn-location:hover {
            background-color: rgba(0, 0, 0, 1);
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
<button id="btn-location">Go to my Location</button>
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map"></div>
<div id="floating-panel">
  <button onclick="toggleHeatmap()">Toggle Heatmap</button>
  <button onclick="changeGradient()">Change gradient</button>
  <button onclick="changeRadius()">Change radius</button>
  <button onclick="changeOpacity()">Change opacity</button>
</div>
<div id="floating">
  <b>Start: </b>
  <select id="start">
    <option value="chicago, il">Chicago</option>
    <option value="st louis, mo">St Louis</option>
    <option value="joplin, mo">Joplin, MO</option>
    <option value="oklahoma city, ok">Oklahoma City</option>
    <option value="amarillo, tx">Amarillo</option>
    <option value="gallup, nm">Gallup, NM</option>
    <option value="flagstaff, az">Flagstaff, AZ</option>
    <option value="winona, az">Winona</option>
    <option value="kingman, az">Kingman</option>
    <option value="barstow, ca">Barstow</option>
    <option value="san bernardino, ca">San Bernardino</option>
    <option value="los angeles, ca">Los Angeles</option>
  </select>
  <b>End: </b>
  <select id="end">
    <option value="chicago, il">Chicago</option>
    <option value="st louis, mo">St Louis</option>
    <option value="joplin, mo">Joplin, MO</option>
    <option value="oklahoma city, ok">Oklahoma City</option>
    <option value="amarillo, tx">Amarillo</option>
    <option value="gallup, nm">Gallup, NM</option>
    <option value="flagstaff, az">Flagstaff, AZ</option>
    <option value="winona, az">Winona</option>
    <option value="kingman, az">Kingman</option>
    <option value="barstow, ca">Barstow</option>
    <option value="san bernardino, ca">San Bernardino</option>
    <option value="los angeles, ca">Los Angeles</option>
  </select>
</div>
<script>
    var map, heatmap, infoWindows;
    var btnLocation = document.getElementById("btn-location");
    var myLocation = {lat: -34.397, lng: 150.644};

    function initMap() {

        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 41.3, lng: 69.25},
            zoom: 12,
            backgroundColor: 'none',
            panControl: true,
            rotateControl: true,
            clickableIcons: true,
            controlSize: 28,
            draggable: true,
            disableDefaultUI: false,
            disableDoubleClickZoom: false,
            draggableCursor: '',
            draggingCursor: '',
            fullscreenControl: true,

            /**
             BOTTOM_CENTER |TOP_RIGHT |  BOTTOM_LEFT |BOTTOM_RIGHT |LEFT_BOTTOM  | LEFT_CENTER |LEFT_TOP  |RIGHT_BOTTOM |RIGHT_CENTER  |RIGHT_TOP |TOP_CENTER  |TOP_LEFT
             */
            fullscreenControlOptions: {
                position: google.maps.ControlPosition.RIGHT_TOP
            },
            gestureHandling: "auto",
            heading: 90,
            tilt: 45,
            keyboardShortcuts: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                /**
                 DEFAULT | DROPDOWN_MENU | HORIZONTAL_BAR
                 */
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                /***
                 BOTTOM_CENTER |TOP_RIGHT |  BOTTOM_LEFT |BOTTOM_RIGHT |LEFT_BOTTOM  | LEFT_CENTER |LEFT_TOP  |RIGHT_BOTTOM |RIGHT_CENTER  |RIGHT_TOP |TOP_CENTER  |TOP_LEFT

                 */
                position: google.maps.ControlPosition.TOP_LEFT,
                /**
                 HYBRID | ROADMAP| TERRAIN | SATELLITE
                 */
                mapTypeId: google.maps.MapTypeId.ROADMAP,

            },
            maxZoom: 30,
            minZoom: 2,
            noClear: false,
            scrollwheel: true,
            zoomControl: true,
            /***
             BOTTOM_CENTER |TOP_RIGHT |  BOTTOM_LEFT |BOTTOM_RIGHT |LEFT_BOTTOM  | LEFT_CENTER |LEFT_TOP  |RIGHT_BOTTOM |RIGHT_CENTER  |RIGHT_TOP |TOP_CENTER  |TOP_LEFT

             */
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            scaleControl: true,

            streetViewControl: true,
            /***
             BOTTOM_CENTER |TOP_RIGHT |  BOTTOM_LEFT |BOTTOM_RIGHT |LEFT_BOTTOM  | LEFT_CENTER |LEFT_TOP  |RIGHT_BOTTOM |RIGHT_CENTER  |RIGHT_TOP |TOP_CENTER  |TOP_LEFT

             */
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM,
                addressControl: true,
                addressControlOptions: {
                    heading: 270,
                    pitch: 90
                },
                clickToGo: true,
                controlSize: 5,
                disableDefaultUI: false,
                disableDoubleClickZoom: false,
                enableCloseButton: true,
                fullscreenControl: true,
                imageDateControl: true,
                linksControl: true,
                motionTracking: true,
                motionTrackingControl: true,
                motionTrackingControlOptions: {
                    position: google.maps.ControlPosition.LEFT_BOTTOM
                },
                panControl: true,
                panControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                },
                pov: {
                    heading: 34,
                    pitch: 10
                },
                pano: '',
                visible: true,
                scrollwheel: true,
                showRoadLabels: true,
                zoom: 0.5,
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_BOTTOM
                }


            },
            /* restriction: {
                /!* latLngBounds: {
                     north: 100,
                     south: -100,
                     west: -80,
                     east: 100
                 },
                 strictBounds: false,*!/
             },*/
            styles: [
                {

                    /**
                     *The feature, or group of features, to which a styler should be applied. Optional. If featureType is not specified, the value is assumed to be 'all'. For details of usage and allowed values, see the style reference.
                     */
                    featureType: 'poi.park',
                    /**
                     * The element to which a styler should be applied. An element is a visual aspect of a feature on the map. Example: a label, an icon, the stroke or fill applied to the geometry, and more. Optional. If elementType is not specified, the value is assumed to be 'all'. For details of usage and allowed values, see the style reference.
                     */
                    elementType: 'geometry',
                    /**
                     * The style rules to apply to the selected map features and elements. The rules are applied in the order that you specify in this array. For guidelines on usage and allowed values, see the style reference.
                     */
                    /* stylers: [{color: '#'}]*/
                }
            ]
        });


        var marker = new google.maps.Marker({
            anchorPoint: {
                Point: google.maps.Point(55, 35)
            },
            /**
             * DROP | BOUNCE
             */
            animation: google.maps.Animation.DROP,
            clickable: true,
            crossOnDrag: true,
            /**
             *  auto | crosshair | default | e-resize | help | move | n-resize | ne-resize | nw-resize | pointer | progress | s-resize | se-resize | sw-resize | text | w-resize | wait | inherit
             */
            cursor: 'pointer',
            draggable: false,
            icon: '',
            map: map,
            position: {
                lat: 41.3,
                lng: 69.25
            },
            opacity: 1.1,
            optimized: true,
            shape: {},
            title: "Tashkent",
            visible: true,
            zIndex: 2


        })
        var info = new google.maps.InfoWindow({
            content: "This is sample for you",
            map: map,
            title: "Tashkent",
            disableAutoPan: false,
            maxWidth: 200,
            pixelOffset: {
                height: 50,
                width: 55
            }
        })
        marker.addListener('click', function () {
            info.open(map, marker);
        });
        var bermudaTriangle = new google.maps.Polygon({
            paths: [
                {lat: 25.774, lng: -80.190},
                {lat: 18.466, lng: -66.118},
                {lat: 32.321, lng: -64.757},
                {lat: 25.774, lng: -80.190}
            ],
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 0.5,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            clickable: true,
            draggable: true,
            editable: false,
            geodesic: false,
            map: map,
            icon: '',
            visible: true,
            zIndex: 5
        });
        bermudaTriangle.setMap(map);

        /***
         *
         * @type {google.maps.Data.StyleOption}
         * url: https://developers.google.com/maps/documentation/javascript/reference/data
         */
        // Load GeoJSON.
        map.data.loadGeoJson(
            'https://storage.googleapis.com/mapsdevsite/json/google.json');

        // Color each letter gray. Change the color when the isColorful property
        // is set to true.
        map.data.setStyle(function (feature) {
            var color = 'gray';
            if (feature.getProperty('isColorful')) {
                color = feature.getProperty('color');
            }
            return /** @type {!google.maps.Data.StyleOptions} */({
                fillColor: color,
                strokeColor: color,
                strokeWeight: 0.5,
                clickable: true,
                cursor: 'pointer',
                draggable: false,
                editable: false,
                icon: '',
                shape: '',
                title: '',
                visible: true,
                zIndex: 6
            });
        });

        map.data.addListener('click', function (event) {
            event.feature.setProperty('isColorful', true);
        });

        map.data.addListener('mouseover', function (event) {
            map.data.revertStyle();
            map.data.overrideStyle(event.feature, {strokeWeight: 8});
        });

        map.data.addListener('mouseout', function (event) {
            map.data.revertStyle();
        });

        /***
         *
         * @type {google.maps.KmlLayer}
         * https://developers.google.com/maps/documentation/javascript/reference/kml
         */
        var kmlLayer = new google.maps.KmlLayer({
            suppressInfoWindows: true,
            preserveViewport: false,
            map: map,
            screenOverlays: false,
            zIndex: 5,
            clickable: true,
            url: 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml'
        });

        /*       var trafficLayer = new google.maps.TrafficLayer();
               trafficLayer.setMap(map);*/
        /*   map.setTilt(45);*/

        /***
         *
         * url: https://developers.google.com/maps/documentation/javascript/reference/drawing
         * @type {google.maps.drawing.DrawingManager}
         */
        var drawingManager = new google.maps.drawing.DrawingManager({
            drawingMode: google.maps.drawing.OverlayType.MARKER,
            drawingControl: true,
            drawingControlOptions: {

                // google.maps.ControlPosition.TOP_CENTER
                // google.maps.ControlPosition.TOP_RIGHT
                position: google.maps.ControlPosition.TOP_CENTER,
                drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
            },

            markerOptions: {icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'},
            circleOptions: {
                fillColor: '#ffff00',
                fillOpacity: 1,
                strokeWeight: 5,
                clickable: false,
                editable: true,
                zIndex: 5
            },

        });
        /*drawingManager.setMap(map);*/
        heatmap = new google.maps.visualization.HeatmapLayer({
            data: getPoints(),
            map: map
        });
        /***
         * @type {google.maps.places.AutocompleteOptions}
         * ulr: https://developers.google.com/maps/documentation/javascript/reference/places-widget
         */

            // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function () {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return null;
            }

            // Clear out the old markers.
            markers.forEach(function (marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return null;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
        });

        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);
        var onChangeHandler = function () {
            calculateAndDisplayRoute(directionsService, directionsRenderer);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);

        var moonMapType = new google.maps.ImageMapType({
            getTileUrl: function (coord, zoom) {
                var normalizedCoord = getNormalizedCoord(coord, zoom);
                if (!normalizedCoord) {
                    return null;
                }
                var bound = Math.pow(2, zoom);
                return '//mw1.google.com/mw-planetary/lunar/lunarmaps_v1/clem_bw' +
                    '/' + zoom + '/' + normalizedCoord.x + '/' +
                    (bound-normalizedCoord.y-1) + '.jpg';
            },
            tileSize: new google.maps.Size(256, 256),
            maxZoom: 9,
            minZoom: 0,
            radius: 1738000,
            name: 'Moon'
        });

        var elevator = new google.maps.ElevationService;
        var infowindow = new google.maps.InfoWindow({map: map});

        // Add a listener for the click event. Display the elevation for the LatLng of
        // the click inside the infowindow.
        map.addListener('click', function (event) {
            displayLocationElevation(event.latLng, elevator, infowindow);
        });

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {

                myLocation.lat = position.coords.latitude;
                myLocation.lng = position.coords.longitude;

                var marker = new google.maps.Marker({
                    position: {
                      lat:position.coords.latitude,
                      lgn:position.coords.longitude
                    },
                    map: map
                });
                map.setCenter(myLocation);
            }, function () {
                handleLocationError(true, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        console.log(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
    }


    btnLocation.addEventListener('click', function () {
        goToMyLocation();
    });

    function goToMyLocation() {
        map.setCenter(myLocation);
    }

    function displayLocationElevation(location, elevator, infowindow) {
        // Initiate the location request
        elevator.getElevationForLocations({
            'locations': [location]
        }, function (results, status) {
            infowindow.setPosition(location);
            if (status === 'OK') {
                // Retrieve the first result
                if (results[0]) {
                    // Open the infowindow indicating the elevation at the clicked position.
                    infowindow.setContent('The elevation at this point <br>is ' +
                        results[0].elevation + ' meters.');
                } else {
                    infowindow.setContent('No results found');
                }
            } else {
                infowindow.setContent('Elevation service failed due to: ' + status);
            }
        });
    }

    function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        directionsService.route(
            {
                origin: {query: document.getElementById('start').value},
                destination: {query: document.getElementById('end').value},
                travelMode: 'DRIVING',
                avoidFerries: true,
                avoidHighways: true,
                avoidTolls: true,
                optimizeWaypoints: true,
                provideRouteAlternatives: true,
                region: "Uzbekistan",
                unitSystem: google.maps.UnitSystem.IMPERIAL
            },
            function (response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
    }
    function getNormalizedCoord(coord, zoom) {
        var y = coord.y;
        var x = coord.x;
        var tileRange = 1 << zoom;
        if (y < 0 || y >= tileRange) {
            return null;
        }
        if (x < 0 || x >= tileRange) {
            x = (x % tileRange + tileRange) % tileRange;
        }

        return {x: x, y: y};
    }

    function toggleHeatmap() {
        heatmap.setMap(heatmap.getMap() ? null : map);
    }

    function changeGradient() {
        var gradient = [
            'rgba(0, 255, 255, 0)',
            'rgba(0, 255, 255, 1)',
            'rgba(0, 191, 255, 1)',
            'rgba(0, 127, 255, 1)',
            'rgba(0, 63, 255, 1)',
            'rgba(0, 0, 255, 1)',
            'rgba(0, 0, 223, 1)',
            'rgba(0, 0, 191, 1)',
            'rgba(0, 0, 159, 1)',
            'rgba(0, 0, 127, 1)',
            'rgba(63, 0, 91, 1)',
            'rgba(127, 0, 63, 1)',
            'rgba(191, 0, 31, 1)',
            'rgba(255, 0, 0, 1)'
        ]
        heatmap.set('gradient', heatmap.get('gradient') ? null : gradient);
    }

    function changeRadius() {
        heatmap.set('radius', heatmap.get('radius') ? null : 20);
    }

    function changeOpacity() {
        heatmap.set('opacity', heatmap.get('opacity') ? null : 0.2);
    }

    // Heatmap data: 500 Points
    function getPoints() {
        return [
            new google.maps.LatLng(37.782551, -122.445368),
            new google.maps.LatLng(37.782745, -122.444586),
            new google.maps.LatLng(37.782842, -122.443688),
            new google.maps.LatLng(37.782919, -122.442815),
            new google.maps.LatLng(37.782992, -122.442112),
            new google.maps.LatLng(37.783100, -122.441461),
            new google.maps.LatLng(37.783206, -122.440829),
            new google.maps.LatLng(37.783273, -122.440324),
            new google.maps.LatLng(37.783316, -122.440023),
            new google.maps.LatLng(37.783357, -122.439794),
            new google.maps.LatLng(37.783371, -122.439687),
            new google.maps.LatLng(37.783368, -122.439666),
            new google.maps.LatLng(37.783383, -122.439594),
            new google.maps.LatLng(37.783508, -122.439525),
            new google.maps.LatLng(37.783842, -122.439591),
            new google.maps.LatLng(37.784147, -122.439668),
            new google.maps.LatLng(37.784206, -122.439686),
            new google.maps.LatLng(37.784386, -122.439790),
            new google.maps.LatLng(37.784701, -122.439902),
            new google.maps.LatLng(37.784965, -122.439938),
            new google.maps.LatLng(37.785010, -122.439947),
            new google.maps.LatLng(37.785360, -122.439952),
            new google.maps.LatLng(37.785715, -122.440030),
            new google.maps.LatLng(37.786117, -122.440119),
            new google.maps.LatLng(37.786564, -122.440209),
            new google.maps.LatLng(37.786905, -122.440270),
            new google.maps.LatLng(37.786956, -122.440279),
            new google.maps.LatLng(37.800224, -122.433520),
            new google.maps.LatLng(37.800155, -122.434101),
            new google.maps.LatLng(37.800160, -122.434430),
            new google.maps.LatLng(37.800378, -122.434527),
            new google.maps.LatLng(37.800738, -122.434598),
            new google.maps.LatLng(37.800938, -122.434650),
            new google.maps.LatLng(37.801024, -122.434889),
            new google.maps.LatLng(37.800955, -122.435392),
            new google.maps.LatLng(37.800886, -122.435959),
            new google.maps.LatLng(37.800811, -122.436275),
            new google.maps.LatLng(37.800788, -122.436299),
            new google.maps.LatLng(37.800719, -122.436302),
            new google.maps.LatLng(37.800702, -122.436298),
            new google.maps.LatLng(37.800661, -122.436273),
            new google.maps.LatLng(37.800395, -122.436172),
            new google.maps.LatLng(37.800228, -122.436116),
            new google.maps.LatLng(37.800169, -122.436130),
            new google.maps.LatLng(37.800066, -122.436167),
            new google.maps.LatLng(37.784345, -122.422922),
            new google.maps.LatLng(37.784389, -122.422926),
            new google.maps.LatLng(37.784437, -122.422924),
            new google.maps.LatLng(37.784746, -122.422818),
            new google.maps.LatLng(37.785436, -122.422959),
            new google.maps.LatLng(37.786120, -122.423112),
            new google.maps.LatLng(37.786433, -122.423029),
            new google.maps.LatLng(37.786631, -122.421213),
            new google.maps.LatLng(37.786660, -122.421033),
            new google.maps.LatLng(37.786801, -122.420141),
            new google.maps.LatLng(37.786823, -122.420034),
            new google.maps.LatLng(37.786831, -122.419916),
            new google.maps.LatLng(37.787034, -122.418208),
            new google.maps.LatLng(37.787056, -122.418034),
            new google.maps.LatLng(37.787169, -122.417145),
            new google.maps.LatLng(37.787217, -122.416715),
            new google.maps.LatLng(37.786144, -122.416403),
            new google.maps.LatLng(37.785292, -122.416257),
            new google.maps.LatLng(37.780666, -122.390374),
            new google.maps.LatLng(37.780501, -122.391281),
            new google.maps.LatLng(37.780148, -122.392052),
            new google.maps.LatLng(37.780173, -122.391148),
            new google.maps.LatLng(37.780693, -122.390592),
            new google.maps.LatLng(37.781261, -122.391142),
            new google.maps.LatLng(37.781808, -122.391730),
            new google.maps.LatLng(37.782340, -122.392341),
            new google.maps.LatLng(37.782812, -122.393022),
            new google.maps.LatLng(37.783300, -122.393672),
            new google.maps.LatLng(37.783809, -122.394275),
            new google.maps.LatLng(37.784246, -122.394979),
            new google.maps.LatLng(37.784791, -122.395958),
            new google.maps.LatLng(37.785675, -122.396746),
            new google.maps.LatLng(37.786262, -122.395780),
            new google.maps.LatLng(37.786776, -122.395093),
            new google.maps.LatLng(37.787282, -122.394426),
            new google.maps.LatLng(37.787783, -122.393767),
            new google.maps.LatLng(37.788343, -122.393184),
            new google.maps.LatLng(37.788895, -122.392506),
            new google.maps.LatLng(37.789371, -122.391701),
            new google.maps.LatLng(37.789722, -122.390952),
            new google.maps.LatLng(37.790315, -122.390305),
            new google.maps.LatLng(37.790738, -122.389616),
            new google.maps.LatLng(37.779448, -122.438702),
            new google.maps.LatLng(37.779023, -122.438585),
            new google.maps.LatLng(37.778542, -122.438492),
            new google.maps.LatLng(37.778100, -122.438411),
            new google.maps.LatLng(37.777986, -122.438376),
            new google.maps.LatLng(37.777680, -122.438313),
            new google.maps.LatLng(37.777316, -122.438273),
            new google.maps.LatLng(37.777135, -122.438254),
            new google.maps.LatLng(37.776987, -122.438303),
            new google.maps.LatLng(37.776946, -122.438404),
            new google.maps.LatLng(37.776944, -122.438467),
            new google.maps.LatLng(37.776892, -122.438459),
            new google.maps.LatLng(37.776842, -122.438442),
            new google.maps.LatLng(37.776822, -122.438391),
            new google.maps.LatLng(37.776814, -122.438412),
            new google.maps.LatLng(37.776787, -122.438628),
            new google.maps.LatLng(37.776729, -122.438650),
            new google.maps.LatLng(37.776759, -122.438677),
            new google.maps.LatLng(37.776772, -122.438498),
            new google.maps.LatLng(37.776787, -122.438389),
            new google.maps.LatLng(37.776848, -122.438283),
            new google.maps.LatLng(37.776870, -122.438239),
            new google.maps.LatLng(37.777015, -122.438198),
            new google.maps.LatLng(37.777333, -122.438256),
            new google.maps.LatLng(37.777595, -122.438308),
            new google.maps.LatLng(37.777797, -122.438344),
            new google.maps.LatLng(37.778160, -122.438442),
            new google.maps.LatLng(37.778414, -122.438508),
            new google.maps.LatLng(37.778445, -122.438516),
            new google.maps.LatLng(37.778503, -122.438529),
            new google.maps.LatLng(37.778607, -122.438549),
            new google.maps.LatLng(37.778670, -122.438644),
            new google.maps.LatLng(37.778847, -122.438706),
            new google.maps.LatLng(37.779240, -122.438744),
            new google.maps.LatLng(37.779738, -122.438822),
            new google.maps.LatLng(37.780201, -122.438882),
            new google.maps.LatLng(37.780400, -122.438905),
            new google.maps.LatLng(37.780501, -122.438921),
            new google.maps.LatLng(37.780892, -122.438986),
            new google.maps.LatLng(37.781446, -122.439087),
            new google.maps.LatLng(37.781985, -122.439199),
            new google.maps.LatLng(37.782239, -122.439249),
            new google.maps.LatLng(37.782286, -122.439266),
            new google.maps.LatLng(37.797847, -122.429388),
            new google.maps.LatLng(37.797874, -122.429180),
            new google.maps.LatLng(37.797885, -122.429069),
            new google.maps.LatLng(37.797887, -122.429050),
            new google.maps.LatLng(37.797933, -122.428954),
            new google.maps.LatLng(37.798242, -122.428990),
            new google.maps.LatLng(37.798617, -122.429075),
            new google.maps.LatLng(37.798719, -122.429092),
            new google.maps.LatLng(37.798944, -122.429145),
            new google.maps.LatLng(37.799320, -122.429251),
            new google.maps.LatLng(37.799590, -122.429309),
            new google.maps.LatLng(37.799677, -122.429324),
            new google.maps.LatLng(37.799966, -122.429360),
            new google.maps.LatLng(37.800288, -122.429430),
            new google.maps.LatLng(37.800443, -122.429461),
            new google.maps.LatLng(37.800465, -122.429474),
            new google.maps.LatLng(37.800644, -122.429540),
            new google.maps.LatLng(37.800948, -122.429620),
            new google.maps.LatLng(37.801242, -122.429685),
            new google.maps.LatLng(37.801375, -122.429702),
            new google.maps.LatLng(37.801400, -122.429703),
            new google.maps.LatLng(37.801453, -122.429707),
            new google.maps.LatLng(37.801473, -122.429709),
            new google.maps.LatLng(37.801532, -122.429707),
            new google.maps.LatLng(37.801852, -122.429729),
            new google.maps.LatLng(37.802173, -122.429789),
            new google.maps.LatLng(37.802459, -122.429847),
            new google.maps.LatLng(37.802554, -122.429825),
            new google.maps.LatLng(37.802647, -122.429549),
            new google.maps.LatLng(37.802693, -122.429179),
            new google.maps.LatLng(37.802729, -122.428751),
            new google.maps.LatLng(37.766104, -122.409291),
            new google.maps.LatLng(37.766103, -122.409268),
            new google.maps.LatLng(37.766138, -122.409229),
            new google.maps.LatLng(37.766183, -122.409231),
            new google.maps.LatLng(37.766153, -122.409276),
            new google.maps.LatLng(37.766005, -122.409365),
            new google.maps.LatLng(37.765897, -122.409570),
            new google.maps.LatLng(37.765767, -122.409739),
            new google.maps.LatLng(37.765693, -122.410389),
            new google.maps.LatLng(37.765615, -122.411201),
            new google.maps.LatLng(37.765533, -122.412121),
            new google.maps.LatLng(37.765467, -122.412939),
            new google.maps.LatLng(37.765444, -122.414821),
            new google.maps.LatLng(37.765444, -122.414964),
            new google.maps.LatLng(37.765318, -122.415424),
            new google.maps.LatLng(37.763961, -122.415296),
            new google.maps.LatLng(37.763115, -122.415196),
            new google.maps.LatLng(37.762967, -122.415183),
            new google.maps.LatLng(37.762278, -122.415127),
            new google.maps.LatLng(37.761675, -122.415055),
            new google.maps.LatLng(37.760932, -122.414988),
            new google.maps.LatLng(37.759337, -122.414862),
            new google.maps.LatLng(37.773187, -122.421922),
            new google.maps.LatLng(37.773043, -122.422118),
            new google.maps.LatLng(37.773007, -122.422165),
            new google.maps.LatLng(37.772979, -122.422219),
            new google.maps.LatLng(37.772865, -122.422394),
            new google.maps.LatLng(37.772779, -122.422503),
            new google.maps.LatLng(37.772676, -122.422701),
            new google.maps.LatLng(37.772606, -122.422806),
            new google.maps.LatLng(37.772566, -122.422840),
            new google.maps.LatLng(37.772508, -122.422852),
            new google.maps.LatLng(37.772387, -122.423011),
            new google.maps.LatLng(37.772099, -122.423328),
            new google.maps.LatLng(37.771704, -122.423783),
            new google.maps.LatLng(37.771481, -122.424081),
            new google.maps.LatLng(37.771400, -122.424179),
            new google.maps.LatLng(37.771352, -122.424220),
            new google.maps.LatLng(37.771248, -122.424327),
            new google.maps.LatLng(37.770904, -122.424781),
            new google.maps.LatLng(37.770520, -122.425283),
            new google.maps.LatLng(37.770337, -122.425553),
            new google.maps.LatLng(37.770128, -122.425832),
            new google.maps.LatLng(37.769756, -122.426331),
            new google.maps.LatLng(37.769300, -122.426902),
            new google.maps.LatLng(37.769132, -122.427065),
            new google.maps.LatLng(37.769092, -122.427103),
            new google.maps.LatLng(37.768979, -122.427172),
            new google.maps.LatLng(37.768595, -122.427634),
            new google.maps.LatLng(37.768372, -122.427913),
            new google.maps.LatLng(37.768337, -122.427961),
            new google.maps.LatLng(37.768244, -122.428138),
            new google.maps.LatLng(37.767942, -122.428581),
            new google.maps.LatLng(37.767482, -122.429094),
            new google.maps.LatLng(37.767031, -122.429606),
            new google.maps.LatLng(37.766732, -122.429986),
            new google.maps.LatLng(37.766680, -122.430058),
            new google.maps.LatLng(37.766633, -122.430109),
            new google.maps.LatLng(37.766580, -122.430211),
            new google.maps.LatLng(37.766367, -122.430594),
            new google.maps.LatLng(37.765910, -122.431137),
            new google.maps.LatLng(37.765353, -122.431806),
            new google.maps.LatLng(37.764962, -122.432298),
            new google.maps.LatLng(37.764868, -122.432486),
            new google.maps.LatLng(37.764518, -122.432913),
            new google.maps.LatLng(37.763435, -122.434173),
            new google.maps.LatLng(37.762847, -122.434953),
            new google.maps.LatLng(37.762291, -122.435935),
            new google.maps.LatLng(37.762224, -122.436074),
            new google.maps.LatLng(37.761957, -122.436892),
            new google.maps.LatLng(37.761652, -122.438886),
            new google.maps.LatLng(37.761284, -122.439955),
            new google.maps.LatLng(37.761210, -122.440068),
            new google.maps.LatLng(37.761064, -122.440720),
            new google.maps.LatLng(37.761040, -122.441411),
            new google.maps.LatLng(37.761048, -122.442324),
            new google.maps.LatLng(37.760851, -122.443118),
            new google.maps.LatLng(37.759977, -122.444591),
            new google.maps.LatLng(37.759913, -122.444698),
            new google.maps.LatLng(37.759623, -122.445065),
            new google.maps.LatLng(37.758902, -122.445158),
            new google.maps.LatLng(37.758428, -122.444570),
            new google.maps.LatLng(37.757687, -122.443340),
            new google.maps.LatLng(37.757583, -122.443240),
            new google.maps.LatLng(37.757019, -122.442787),
            new google.maps.LatLng(37.756603, -122.442322),
            new google.maps.LatLng(37.756380, -122.441602),
            new google.maps.LatLng(37.755790, -122.441382),
            new google.maps.LatLng(37.754493, -122.442133),
            new google.maps.LatLng(37.754361, -122.442206),
            new google.maps.LatLng(37.753719, -122.442650),
            new google.maps.LatLng(37.753096, -122.442915),
            new google.maps.LatLng(37.751617, -122.443211),
            new google.maps.LatLng(37.751496, -122.443246),
            new google.maps.LatLng(37.750733, -122.443428),
            new google.maps.LatLng(37.750126, -122.443536),
            new google.maps.LatLng(37.750103, -122.443784),
            new google.maps.LatLng(37.750390, -122.444010),
            new google.maps.LatLng(37.750448, -122.444013),
            new google.maps.LatLng(37.750536, -122.444040),
            new google.maps.LatLng(37.750493, -122.444141),
            new google.maps.LatLng(37.790859, -122.402808),
            new google.maps.LatLng(37.790864, -122.402768),
            new google.maps.LatLng(37.790995, -122.402539),
            new google.maps.LatLng(37.791148, -122.402172),
            new google.maps.LatLng(37.791385, -122.401312),
            new google.maps.LatLng(37.791405, -122.400776),
            new google.maps.LatLng(37.791288, -122.400528),
            new google.maps.LatLng(37.791113, -122.400441),
            new google.maps.LatLng(37.791027, -122.400395),
            new google.maps.LatLng(37.791094, -122.400311),
            new google.maps.LatLng(37.791211, -122.400183),
            new google.maps.LatLng(37.791060, -122.399334),
            new google.maps.LatLng(37.790538, -122.398718),
            new google.maps.LatLng(37.790095, -122.398086),
            new google.maps.LatLng(37.789644, -122.397360),
            new google.maps.LatLng(37.789254, -122.396844),
            new google.maps.LatLng(37.788855, -122.396397),
            new google.maps.LatLng(37.788483, -122.395963),
            new google.maps.LatLng(37.788015, -122.395365),
            new google.maps.LatLng(37.787558, -122.394735),
            new google.maps.LatLng(37.787472, -122.394323),
            new google.maps.LatLng(37.787630, -122.394025),
            new google.maps.LatLng(37.787767, -122.393987),
            new google.maps.LatLng(37.787486, -122.394452),
            new google.maps.LatLng(37.786977, -122.395043),
            new google.maps.LatLng(37.786583, -122.395552),
            new google.maps.LatLng(37.786540, -122.395610),
            new google.maps.LatLng(37.786516, -122.395659),
            new google.maps.LatLng(37.786378, -122.395707),
            new google.maps.LatLng(37.786044, -122.395362),
            new google.maps.LatLng(37.785598, -122.394715),
            new google.maps.LatLng(37.785321, -122.394361),
            new google.maps.LatLng(37.785207, -122.394236),
            new google.maps.LatLng(37.785751, -122.394062),
            new google.maps.LatLng(37.785996, -122.393881),
            new google.maps.LatLng(37.786092, -122.393830),
            new google.maps.LatLng(37.785998, -122.393899),
            new google.maps.LatLng(37.785114, -122.394365),
            new google.maps.LatLng(37.785022, -122.394441),
            new google.maps.LatLng(37.784823, -122.394635),
            new google.maps.LatLng(37.784719, -122.394629),
            new google.maps.LatLng(37.785069, -122.394176),
            new google.maps.LatLng(37.785500, -122.393650),
            new google.maps.LatLng(37.785770, -122.393291),
            new google.maps.LatLng(37.785839, -122.393159),
            new google.maps.LatLng(37.782651, -122.400628),
            new google.maps.LatLng(37.782616, -122.400599),
            new google.maps.LatLng(37.782702, -122.400470),
            new google.maps.LatLng(37.782915, -122.400192),
            new google.maps.LatLng(37.783137, -122.399887),
            new google.maps.LatLng(37.783414, -122.399519),
            new google.maps.LatLng(37.783629, -122.399237),
            new google.maps.LatLng(37.783688, -122.399157),
            new google.maps.LatLng(37.783716, -122.399106),
            new google.maps.LatLng(37.783798, -122.399072),
            new google.maps.LatLng(37.783997, -122.399186),
            new google.maps.LatLng(37.784271, -122.399538),
            new google.maps.LatLng(37.784577, -122.399948),
            new google.maps.LatLng(37.784828, -122.400260),
            new google.maps.LatLng(37.784999, -122.400477),
            new google.maps.LatLng(37.785113, -122.400651),
            new google.maps.LatLng(37.785155, -122.400703),
            new google.maps.LatLng(37.785192, -122.400749),
            new google.maps.LatLng(37.785278, -122.400839),
            new google.maps.LatLng(37.785387, -122.400857),
            new google.maps.LatLng(37.785478, -122.400890),
            new google.maps.LatLng(37.785526, -122.401022),
            new google.maps.LatLng(37.785598, -122.401148),
            new google.maps.LatLng(37.785631, -122.401202),
            new google.maps.LatLng(37.785660, -122.401267),
            new google.maps.LatLng(37.803986, -122.426035),
            new google.maps.LatLng(37.804102, -122.425089),
            new google.maps.LatLng(37.804211, -122.424156),
            new google.maps.LatLng(37.803861, -122.423385),
            new google.maps.LatLng(37.803151, -122.423214),
            new google.maps.LatLng(37.802439, -122.423077),
            new google.maps.LatLng(37.801740, -122.422905),
            new google.maps.LatLng(37.801069, -122.422785),
            new google.maps.LatLng(37.800345, -122.422649),
            new google.maps.LatLng(37.799633, -122.422603),
            new google.maps.LatLng(37.799750, -122.421700),
            new google.maps.LatLng(37.799885, -122.420854),
            new google.maps.LatLng(37.799209, -122.420607),
            new google.maps.LatLng(37.795656, -122.400395),
            new google.maps.LatLng(37.795203, -122.400304),
            new google.maps.LatLng(37.778738, -122.415584),
            new google.maps.LatLng(37.778812, -122.415189),
            new google.maps.LatLng(37.778824, -122.415092),
            new google.maps.LatLng(37.778833, -122.414932),
            new google.maps.LatLng(37.778834, -122.414898),
            new google.maps.LatLng(37.778740, -122.414757),
            new google.maps.LatLng(37.778501, -122.414433),
            new google.maps.LatLng(37.778182, -122.414026),
            new google.maps.LatLng(37.777851, -122.413623),
            new google.maps.LatLng(37.777486, -122.413166),
            new google.maps.LatLng(37.777109, -122.412674),
            new google.maps.LatLng(37.776743, -122.412186),
            new google.maps.LatLng(37.776440, -122.411800),
            new google.maps.LatLng(37.776295, -122.411614),
            new google.maps.LatLng(37.776158, -122.411440),
            new google.maps.LatLng(37.775806, -122.410997),
            new google.maps.LatLng(37.775422, -122.410484),
            new google.maps.LatLng(37.775126, -122.410087),
            new google.maps.LatLng(37.775012, -122.409854),
            new google.maps.LatLng(37.775164, -122.409573),
            new google.maps.LatLng(37.775498, -122.409180),
            new google.maps.LatLng(37.775868, -122.408730),
            new google.maps.LatLng(37.776256, -122.408240),
            new google.maps.LatLng(37.776519, -122.407928),
            new google.maps.LatLng(37.776539, -122.407904),
            new google.maps.LatLng(37.776595, -122.407854),
            new google.maps.LatLng(37.776853, -122.407547),
            new google.maps.LatLng(37.777234, -122.407087),
            new google.maps.LatLng(37.777644, -122.406558),
            new google.maps.LatLng(37.778066, -122.406017),
            new google.maps.LatLng(37.778468, -122.405499),
            new google.maps.LatLng(37.778866, -122.404995),
            new google.maps.LatLng(37.779295, -122.404455),
            new google.maps.LatLng(37.779695, -122.403950),
            new google.maps.LatLng(37.779982, -122.403584),
            new google.maps.LatLng(37.780295, -122.403223),
            new google.maps.LatLng(37.780664, -122.402766),
            new google.maps.LatLng(37.781043, -122.402288),
            new google.maps.LatLng(37.781399, -122.401823),
            new google.maps.LatLng(37.781727, -122.401407),
            new google.maps.LatLng(37.781853, -122.401247),
            new google.maps.LatLng(37.781894, -122.401195),
            new google.maps.LatLng(37.782076, -122.400977),
            new google.maps.LatLng(37.782338, -122.400603),
            new google.maps.LatLng(37.782666, -122.400133),
            new google.maps.LatLng(37.783048, -122.399634),
            new google.maps.LatLng(37.783450, -122.399198),
            new google.maps.LatLng(37.783791, -122.398998),
            new google.maps.LatLng(37.784177, -122.398959),
            new google.maps.LatLng(37.784388, -122.398971),
            new google.maps.LatLng(37.784404, -122.399128),
            new google.maps.LatLng(37.784586, -122.399524),
            new google.maps.LatLng(37.784835, -122.399927),
            new google.maps.LatLng(37.785116, -122.400307),
            new google.maps.LatLng(37.785282, -122.400539),
            new google.maps.LatLng(37.785346, -122.400692),
            new google.maps.LatLng(37.765769, -122.407201),
            new google.maps.LatLng(37.765790, -122.407414),
            new google.maps.LatLng(37.765802, -122.407755),
            new google.maps.LatLng(37.765791, -122.408219),
            new google.maps.LatLng(37.765763, -122.408759),
            new google.maps.LatLng(37.765726, -122.409348),
            new google.maps.LatLng(37.765716, -122.409882),
            new google.maps.LatLng(37.765708, -122.410202),
            new google.maps.LatLng(37.765705, -122.410253),
            new google.maps.LatLng(37.765707, -122.410369),
            new google.maps.LatLng(37.765692, -122.410720),
            new google.maps.LatLng(37.765699, -122.411215),
            new google.maps.LatLng(37.765687, -122.411789),
            new google.maps.LatLng(37.765666, -122.412373),
            new google.maps.LatLng(37.765598, -122.412883),
            new google.maps.LatLng(37.765543, -122.413039),
            new google.maps.LatLng(37.765532, -122.413125),
            new google.maps.LatLng(37.765500, -122.413553),
            new google.maps.LatLng(37.765448, -122.414053),
            new google.maps.LatLng(37.765388, -122.414645),
            new google.maps.LatLng(37.765323, -122.415250),
            new google.maps.LatLng(37.765303, -122.415847),
            new google.maps.LatLng(37.765251, -122.416439),
            new google.maps.LatLng(37.765204, -122.417020),
            new google.maps.LatLng(37.765172, -122.417556),
            new google.maps.LatLng(37.765164, -122.418075),
            new google.maps.LatLng(37.765153, -122.418618),
            new google.maps.LatLng(37.765136, -122.419112),
            new google.maps.LatLng(37.765129, -122.419378),
            new google.maps.LatLng(37.765119, -122.419481),
            new google.maps.LatLng(37.765100, -122.419852),
            new google.maps.LatLng(37.765083, -122.420349),
            new google.maps.LatLng(37.765045, -122.420930),
            new google.maps.LatLng(37.764992, -122.421481),
            new google.maps.LatLng(37.764980, -122.421695),
            new google.maps.LatLng(37.764993, -122.421843),
            new google.maps.LatLng(37.764986, -122.422255),
            new google.maps.LatLng(37.764975, -122.422823),
            new google.maps.LatLng(37.764939, -122.423411),
            new google.maps.LatLng(37.764902, -122.424014),
            new google.maps.LatLng(37.764853, -122.424576),
            new google.maps.LatLng(37.764826, -122.424922),
            new google.maps.LatLng(37.764796, -122.425375),
            new google.maps.LatLng(37.764782, -122.425869),
            new google.maps.LatLng(37.764768, -122.426089),
            new google.maps.LatLng(37.764766, -122.426117),
            new google.maps.LatLng(37.764723, -122.426276),
            new google.maps.LatLng(37.764681, -122.426649),
            new google.maps.LatLng(37.782012, -122.404200),
            new google.maps.LatLng(37.781574, -122.404911),
            new google.maps.LatLng(37.781055, -122.405597),
            new google.maps.LatLng(37.780479, -122.406341),
            new google.maps.LatLng(37.779996, -122.406939),
            new google.maps.LatLng(37.779459, -122.407613),
            new google.maps.LatLng(37.778953, -122.408228),
            new google.maps.LatLng(37.778409, -122.408839),
            new google.maps.LatLng(37.777842, -122.409501),
            new google.maps.LatLng(37.777334, -122.410181),
            new google.maps.LatLng(37.776809, -122.410836),
            new google.maps.LatLng(37.776240, -122.411514),
            new google.maps.LatLng(37.775725, -122.412145),
            new google.maps.LatLng(37.775190, -122.412805),
            new google.maps.LatLng(37.774672, -122.413464),
            new google.maps.LatLng(37.774084, -122.414186),
            new google.maps.LatLng(37.773533, -122.413636),
            new google.maps.LatLng(37.773021, -122.413009),
            new google.maps.LatLng(37.772501, -122.412371),
            new google.maps.LatLng(37.771964, -122.411681),
            new google.maps.LatLng(37.771479, -122.411078),
            new google.maps.LatLng(37.770992, -122.410477),
            new google.maps.LatLng(37.770467, -122.409801),
            new google.maps.LatLng(37.770090, -122.408904),
            new google.maps.LatLng(37.769657, -122.408103),
            new google.maps.LatLng(37.769132, -122.407276),
            new google.maps.LatLng(37.768564, -122.406469),
            new google.maps.LatLng(37.767980, -122.405745),
            new google.maps.LatLng(37.767380, -122.405299),
            new google.maps.LatLng(37.766604, -122.405297),
            new google.maps.LatLng(37.765838, -122.405200),
            new google.maps.LatLng(37.765139, -122.405139),
            new google.maps.LatLng(37.764457, -122.405094),
            new google.maps.LatLng(37.763716, -122.405142),
            new google.maps.LatLng(37.762932, -122.405398),
            new google.maps.LatLng(37.762126, -122.405813),
            new google.maps.LatLng(37.761344, -122.406215),
            new google.maps.LatLng(37.760556, -122.406495),
            new google.maps.LatLng(37.759732, -122.406484),
            new google.maps.LatLng(37.758910, -122.406228),
            new google.maps.LatLng(37.758182, -122.405695),
            new google.maps.LatLng(37.757676, -122.405118),
            new google.maps.LatLng(37.757039, -122.404346),
            new google.maps.LatLng(37.756335, -122.403719),
            new google.maps.LatLng(37.755503, -122.403406),
            new google.maps.LatLng(37.754665, -122.403242),
            new google.maps.LatLng(37.753837, -122.403172),
            new google.maps.LatLng(37.752986, -122.403112),
            new google.maps.LatLng(37.751266, -122.403355)
        ];

    }


</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=drawing,visualization,places&callback=initMap"
    async defer></script>

</body>
</html>
