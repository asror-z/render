<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 * 44 lines
 */
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/dexie/dist/dexie.min.js"></script>
    <script src="https://rawcdn.githack.com/helgasoft/leaflet.dexie/319e585048a6b28047fa33c0d6ba9c643faa511d/dist/leaflet.dexie.min.js"></script>

</head>
<body>
<div id="map" style="height: 95vh"></div>
<script>
//start | Zoirjon Sobirov | 10.10.2020

    $(function(){
// set up the map
// Create the map
        var latitude, longitude, accuracy;
        var prev_lat, prev_lng;

        var map = L.map('map').setView([-27.943598, 153.409756], 8);

// Set up the OSM layer
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {maxZoom: 18}).addTo(map);
// add a marker in the given location
        var marker = L.marker([-27.943598, 153.409756]).addTo(map);

        /*  for simluation we will walk through each of the lat/lng in the array each 30 secs  */
       var simulation_points =  [  [-27.923123, 153.404006],   [-27.9190623, 153.38]
            , [-27.967858, 153.375853] , [-27.944962, 153.362979]
        ];
        var simlulated_index =  $(simulation_points).size(); // set as last so on first exec will wrap to first element

        function simulateGeolocation() {
        /* called every 30 secs and sets the location to a different location close enough to route to */

            if ( simlulated_index < $(simulation_points).size()-1 )
            {
                simlulated_index++;
            } else {
                simlulated_index = 0;
            }
            latitude = simulation_points[simlulated_index][0];
            longitude =  simulation_points[simlulated_index][1];
            accuracy = 1;
            document.getElementById( 'result' ).innerHTML =
                'lat: ' + latitude + ', '
                + 'lng: ' + longitude + ', '
                + 'accuracy: ' + accuracy +
                ' ts: ' + Date.now() + 'idx: ' + ( simlulated_index + 1 ) + '  / ' + ($(simulation_points).size() ) +
                '<br />';
        }


        function setGeolocation() {
            var geolocation = window.navigator.geolocation.watchPosition(
                function ( position ) {
                    latitude = position.coords.latitude;
                    longitude = position.coords.longitude;
                    accuracy = position.coords.accuracy;

                    document.getElementById( 'result' ).innerHTML +=
                        'lat: ' + latitude + ', '
                        + 'lng: ' + longitude + ', '
                        + 'accuracy: ' + accuracy +
                        ' ts: ' + Date.now() +
                        '<br />';

                }, function () {
                    /*error*/
                }, {
                    maximumAge: 250,
                    enableHighAccuracy: true
                }
            );

        };

        var animation_path = [];
         // an array a lat/lng pairs that plot the path from start to finish of the animation for the duration before the next expected locaiton update.

        var animation_progress = 0; // refers to the index of the lat/lng set that

        function animate_marker_to_new_position( prev_lat, prev_lng, latitude,longitude )
        {
            if ( prev_lat && prev_lng )
             // if both defined then this isn't the first
            {
                console.log('1');
            } else {
            // otherwise this is the first call to animate

                console.log('no need to animate');
            }

            var newLatLng = new L.LatLng(latitude, longitude);
            marker.setLatLng(newLatLng);
        }

        var refresh_interval = 1000;
        // millisecs secs - 1000 = 1 sec - should be set to around 30 sec ( 30000 )

        // -- Run initially to set marker location
        // setGeolocation();
        simulateGeolocation();
        window.setInterval( function () {
            // uncomment either set or simulate .. if doing set need to ensure map starts somehwere
            // that can be routed to be OSRM ..

            // setGeolocation();
            simulateGeolocation();

            // remember the previous locations so that we can animaite from here to the next
            // .. nb could potentially extract this from the current marker location?
            //   then wouldn't need extra variables.

            console.log('Getting path from last known location to latest location');
            animate_marker_to_new_position(prev_lat, prev_lng, latitude,longitude  );
            prev_lat = latitude;
            prev_lng = longitude;
            console.log('polling location');
            marker.setLatLng([latitude, longitude]).update();

        },refresh_interval /*check every 10 seconds*/);
    //setGeolocation();
    //simulateGeolocation();
    });
 //end | Zoirjon Sobirov | 10.10.2020
</script>
</body>
</html>
