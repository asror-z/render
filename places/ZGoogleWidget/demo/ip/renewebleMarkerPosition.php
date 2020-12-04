<?php
/**
 * @author   Zoirjon Sobirov
 * https://t.me/zoirjon_sobirov
 * @license ___________________
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

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

    var map, infoWindow;
    var allMarkers = [];
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 16
        });
        infoWindow = new google.maps.InfoWindow;

        /*Device */
        //Find our div containers in the DOM
        var dataContainerOrientation = document.getElementById('dataContainerOrientation');
        var dataContainerOrientation1 = document.getElementById('dataContainerOrientation1');
        var dataContainerMotion = document.getElementById('dataContainerMotion');

        //Check for support for DeviceOrientation event
        if(window.DeviceOrientationEvent) {
            window.addEventListener('deviceorientation', function(event) {
                var alpha = event.alpha;
                var beta = event.beta;
                var gamma = event.gamma;
                console.log(alpha)
                if(alpha!=null || beta!=null || gamma!=null)
                    dataContainerOrientation.innerHTML = 'alpha: ' + alpha ;
                // Try HTML5 geolocation.

               // setInterval(function callBack() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };
                            console.log(pos);
                            infoWindow.setPosition(pos);
                            //infoWindow.setContent('Location found.');
                            // The marker, positioned at Uluru


                            var icon = {
                                url: "https://cdn.pixabay.com/photo/2017/02/01/12/23/car-2030056_960_720.png", // url
                                scaledSize: new google.maps.Size(45, 25), // scaled size
                                // origin: new google.maps.Point(0,0), // origin
                                //anchor: new google.maps.Point(0, 0), // anchor
                                scale: 1,
                                strokeColor: '#FFFFFF',
                                fillColor: '#D7006E',
                                fillOpacity: 1,
                                rotation: alpha
                            };

                            var symbolTwo = {
                                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                                rotation: 0,
                                fixedRotation: true,
                                offset: '0%',
                                scale: 7,
                                strokeColor: 'blue',
                                strokeWeight: 3,
                                fillColor: 'blue',
                                anchor: new google.maps.Point(0, 2.5)
                            };

                            var carIcon = {
                                path: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADeklEQVRoge2YTUwUSRSAv+oMMAualR+FrGE3ykGJP9GIqAujYVHASJaLF29qjBejN3XjxZsxHr0ZTTQxGk3MJu5JD5oYRjZudhXXQeMOzsZwAWQYRQXHaao8jAzMTzc13SNi0t+pu+pV1Xvd9d6rV+Dh4eHh4fENIzIbGtu77gv42X6YCj64/UfgSymVD77MhtmVBxDNhVLA7QczCqWIU9x+sK9ugFt8KoBKaxm/mXrcXNo11/rY8mJ1uq51IUSWD+iy+8gJldlmoGh4/R+dw39R/34gjqIHyT7Rw0un68yGIwNKvitNe//efE/ryGPaog+p/DiWEkPQgsFF4Bd3alpja0DtilX8G7wLwNrmbB2Wjw+yI/qIraNPKJZm7kkELWoLFeJPRnMLqKBGVOu26sj7D5TIBE2xp3S8+ptlE0N6g3zUA/dzdWWGx6mteePsqawclXtqTarjMbZHe2kd6WXh5ITusCSKPVgY4BZbAwwpOcAAnXKYlc8eIFSW3+ohOKACbETRj0EYCCPpZ5Kw9dbSw9aA091nUJMyqYND3T9TAjQiaEwFQpFcXQUYBfqBMIL+s7EQg8UV2PvNNCIrD8wgEpt+Xl6eW+ZQbCmhhJ97S16k2rYN12XJVRkmbf537F8wSpH1kpnEgAiCCBAZecfxhARTQkK6zANThBJ+LbkR6ePq+CKEgINlUd3py4ENKDYAVJVNd5gSVBM75/wocWtiYUHm8RmAwbk5N0Dobx8t5tyADv/bgsxjSkBx0LUPrCn6wBMNP6gyTDr8b9m7IDar7AxyOvFHCZNJJ75lG4X+HzNSYdQqChWA9DD6068nB4srOPX0UmVmGM37NPpb4BgNPZfplMMoYTpPZBAHHuskst1HVp8E0E1wtgZIw+ACtVwwatlRv975UQLOi24O5ztIB20fGCop58oPLdyoaaY51kf7q3/0D3NwzZl6s5O3E8eNIu5UruNO5Tq94zSAyTOrrsyifuB5HwCb2rtm7Ffrot7WgIHnfZQvrk6bGJIFzZIflxEpreFc6U6u1WylNdpLW/TRzIJmirt2+9ltUe8ojMYnxtPe3xSV8XtNEzert9AwFmbX0OeSEoIo9jtZQxfHecCq4LgOHHWsTv74RHf67Vz63ptf1IWybxK/+XuheWCACmoI5VPUu7slyJf5ckns4eHh4eHxVfgESIpH83vzj6UAAAAASUVORK5CYII',
                                scale: 1,
                                strokeColor: '#FFFFFF',
                                fillColor: '#D7006E',
                                fillOpacity: 1,
                                //rotation: alpha,
                            };
                            var count_markers = 2;
                            
                            dataContainerOrientation1.innerHTML = 'alpha: ' + alpha;

                            var marker = new google.maps.Marker({
                                position: pos,
                                icon: symbolTwo ,
                                draggable:true,
                                title: '' ,
                                map: map
                            });

                            allMarkers.push(marker);

                            for(var i=0; i < allMarkers.length - 1; i++){
                                allMarkers[i].setMap(null);
                            }

                            var iconic = marker.getIcon();
                            iconic.rotation -= alpha;
                            iconic.rotation %= 360;
                            marker.setIcon(iconic);

                            //allMarkers.splice(0,1);
                            //allMarkers.push(marker)


                            // infoWindow.open(map);
                            map.setCenter(pos);
                            // Sets the map on all markers in the array.

                        }, function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                        });
                    } else {
                        // Browser doesn't support Geolocation
                        handleLocationError(false, infoWindow, map.getCenter());
                    }
                // }, 5000)

             }, false);
        }
        /*****************/
    }

    /**
     * @param browserHasGeolocation
     * @param infoWindow
     * @param pos
     */
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

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


