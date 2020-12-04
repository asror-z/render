<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- <div id="dataContainerOrientation1"></div>
    <div id="dataContainerOrientation">
        No device orientation data
    </div>
    <div id="dataContainerMotion">
        No device motion data
    </div>-->
    <h3 style="text-align: center;">My Google Maps Demo</h3>
    <p>
        <div id="currentCord"></div>
        <div id="rotation"></div>
        <div id="heading"></div>
    </p>
    <div id="map"></div>
    <script>
        let map,
            infoWindow,
            heading,
            marker,
            prevPosn = "";

        let changed = false;

        function initMap() {
            const center = {
                lat: -34.397,
                lng: 150.644
            };
            map = new google.maps.Map(document.getElementById("map"), {
                center: center,
                zoom: 10
            });
            infoWindow = new google.maps.InfoWindow();

            /*Device */
            //Find our div containers in the DOM
            /*let dataContainerOrientation = document.getElementById(
                "dataContainerOrientation"
            );
            let dataContainerOrientation1 = document.getElementById(
                "dataContainerOrientation1"
            );*/
            let dataContainerMotion = document.getElementById(
                "dataContainerMotion"
            );
            navigator.geolocation.watchPosition(
                (data) => {
                    heading = data.coords.heading
                    document.getElementById("heading").innerHTML = "heading: " + heading;
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(
                            function(position) {
                                let pos = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };
                                infoWindow.setPosition(pos);

                                let symbolTwo = {
                                    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                                    rotation: 0,
                                    fixedRotation: true,
                                    offset: "0%",
                                    scale: 5,
                                    strokeColor: "#3333FF",
                                    strokeWeight: 5,
                                    fillColor: "blue",
                                    anchor: new google.maps.Point(0, 2.5)
                                };
                                document.getElementById("currentCord").innerHTML = "lat: " + pos.lat + "</br>" + "lng: " + pos.lng;
                                //dataContainerOrientation1.innerHTML = "alpha: " + alpha;
                                if (changed) {
                                    prevPosn = marker.getPosition();
                                    marker.setPosition(pos);

                                    var rotation = google.maps.geometry.spherical.computeHeading(prevPosn, marker.getPosition());
                                    symbolTwo.rotation = rotation;
                                    document.getElementById("rotation").innerHTML = "rotation: " + rotation;

                                    marker.setIcon(symbolTwo);
                                } else {
                                    marker = new google.maps.Marker({
                                        position: pos,
                                        icon: symbolTwo,
                                        draggable: false,
                                        title: "",
                                        map: map,
                                        shadow: null
                                    });
                                }

                                changed = true;

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
                            }
                        );
                    } else {
                        // Browser doesn't support Geolocation
                        handleLocationError(false, infoWindow, map.getCenter());
                    }
                },
                (err) => {
                    console.error(err);
                }
            );


        }




        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation ?
                "Error: The Geolocation service failed." :
                "Error: Your browser doesn't support geolocation."
            );
            infoWindow.open(map);
        }
    </script>
    <!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=geometry&callback=initMap"></script>
</body>

</html>