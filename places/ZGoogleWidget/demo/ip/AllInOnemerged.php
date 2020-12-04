<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 * @copyright zhead, zstart, zend
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        /*start | Zoirjon Sobirov | 10.10.2020*/
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>

</head>
<body >
<div id="dataContainerOrientation1">  </div>
<div id="dataContainerOrientation">
    No device orientation data
</div>
<div id="dataContainerMotion">
    No device motion data
</div>
<h3>My Google Maps Demo</h3>
<!--The div element for the map -->
<div id="map"></div>
<script>


    // Initialize and add the map

    let map, infoWindow, markers = [];
    function initMap() {
        const center = {lat: -34.397, lng: 150.644};
        map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 16
        });
        infoWindow = new google.maps.InfoWindow;

        /*Device */
        //Find our div containers in the DOM
        let dataContainerOrientation = document.getElementById('dataContainerOrientation');
        let dataContainerOrientation1 = document.getElementById('dataContainerOrientation1');
        let dataContainerMotion = document.getElementById('dataContainerMotion');

        //Check for support for DeviceOrientation event
        if(window.DeviceOrientationEvent) {
            window.addEventListener('deviceorientation', function(event) {

                let alpha = event.alpha;
                let beta = event.beta;
                let gamma = event.gamma;

                if(alpha!=null || beta!=null || gamma!=null)
                    dataContainerOrientation.innerHTML = 'alpha: ' + alpha ;

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        let pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);

                        let symbolTwo = {
                            path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                            rotation: alpha-=360,
                            fixedRotation: true,
                            offset: '0%',
                            scale: 7,
                            strokeColor: 'blue',
                            strokeWeight: 3,
                            fillColor: 'blue',
                           // anchor: new google.maps.Point(0, 2.5)
                        };

                        dataContainerOrientation1.innerHTML = 'alpha: ' + alpha;


                        const marker = new google.maps.Marker({
                            position: pos,
                            icon: symbolTwo ,
                            draggable:true,
                            title: '' ,
                            map: map
                        });

                        markers.push(marker);
                        /*start Diyorbek*/
                        for (let i = 0; i < markers.length - 1; i++) {
                            markers[i].setMap(null);
                        }
                        /*end Diyorbek*/

                        // let iconic = marker.getIcon();
                        // iconic.rotation -= alpha;
                        // //alpha %= 360;
                        // marker.setIcon(iconic);

                        // infoWindow.open(map);
                        map.setCenter(pos);
                        // Sets the map on all markers in the array.

                    },
                    function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
                // }, 5000)

            }, false)
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {

        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
        
    }
    /*end | Zoirjon Sobirov | 10.10.2020*/
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->

<script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&callback=initMap">
</script>
</body>
</html>


