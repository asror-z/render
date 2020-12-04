<?php
/**
 * @author   Diyorbek Olimov
 * https://t.me/Diyorbek0309
 * @license ___________________
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=geometry&callback=initMap"></script>
</head>
<body>
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

        let id = navigator.geolocation.watchPosition(
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

                            let symbol = {
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
                            if (changed) {
                                prevPosn = marker.getPosition();
                                marker.setPosition(pos);

                                let rotation = google.maps.geometry.spherical.computeHeading(prevPosn, marker.getPosition());
                                symbol.rotation = rotation;
                                document.getElementById("rotation").innerHTML = "rotation: " + rotation;

                                marker.setIcon(symbol);
                            } else {
                                marker = new google.maps.Marker({
                                    position: pos,
                                    icon: symbol,
                                    title: "",
                                    map: map,
                                });
                            }

                            changed = true;

                            map.setCenter(pos);
                        },

                        function() {
                            handleLocationError(true, infoWindow, map.getCenter());
                        }
                    );
                } else {
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            },
            (err) => {
                console.error(err);
            }
        );
        navigator.geolocation.clearWatch(id);
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
</body>

</html>

<!--<!DOCTYPE html>-->
<!--<html>-->
<!---->
<!--<head>-->
<!--    <style type="text/css">-->
<!--        #map {-->
<!--            height: 100vh;-->
<!--            width: 100%;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<h3 style="text-align: center;">My Google Maps Demo</h3>-->
<!--<div id="map"></div>-->
<!--<script>-->
<!--    let map,-->
<!--        infoWindow,-->
<!--        heading,-->
<!--        marker,-->
<!--        prevPosn = "";-->
<!---->
<!--    let changed = false;-->
<!---->
<!--    function initMap() {-->
<!--        const center = {-->
<!--            lat: -34.397,-->
<!--            lng: 150.644-->
<!--        };-->
<!--        map = new google.maps.Map(document.getElementById("map"), {-->
<!--            center: center,-->
<!--            zoom: 10-->
<!--        });-->
<!--        infoWindow = new google.maps.InfoWindow();-->
<!---->
<!--        /*Device */-->
<!--        //Find our div containers in the DOM-->
<!--        /*let dataContainerOrientation = document.getElementById(-->
<!--            "dataContainerOrientation"-->
<!--        );-->
<!--        let dataContainerOrientation1 = document.getElementById(-->
<!--            "dataContainerOrientation1"-->
<!--        );*/-->
<!--        let dataContainerMotion = document.getElementById(-->
<!--            "dataContainerMotion"-->
<!--        );-->
<!---->
<!---->
<!--        if (window.DeviceOrientationEvent) {-->
<!--            window.addEventListener("deviceorientation",-->
<!--                function(event) {-->
<!--                let alpha = event.alpha;-->
<!--                    if (navigator.geolocation) {-->
<!--                        navigator.geolocation.getCurrentPosition(-->
<!--                            function(position) {-->
<!--                                let pos = {-->
<!--                                    lat: position.coords.latitude,-->
<!--                                    lng: position.coords.longitude-->
<!--                                };-->
<!--                                console.log(pos);-->
<!--                                console.log(event.alpha);-->
<!--                                infoWindow.setPosition(pos);-->
<!---->
<!--                                let symbol = {-->
<!--                                    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,-->
<!--                                    rotation: alpha,-->
<!--                                    fixedRotation: true,-->
<!--                                    offset: "0%",-->
<!--                                    scale: 7,-->
<!--                                    strokeColor: "#3333FF",-->
<!--                                    strokeWeight: 5,-->
<!--                                    fillColor: "blue",-->
<!--                                    anchor: new google.maps.Point(0, 2.5)-->
<!--                                };-->
<!---->
<!--                                if (changed) {-->
<!--                                    prevPosn = marker.getPosition();-->
<!--                                    marker.setPosition(pos);-->
<!--                                    marker.setIcon({-->
<!--                                        path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,-->
<!--                                        rotation: alpha,-->
<!--                                        fixedRotation: true,-->
<!--                                        offset: "0%",-->
<!--                                        scale: 7,-->
<!--                                        strokeColor: "#3333FF",-->
<!--                                        strokeWeight: 5,-->
<!--                                        fillColor: "blue",-->
<!--                                        anchor: new google.maps.Point(0, 2.5)-->
<!--                                    });-->
<!--                                    console.log(marker.icon)-->
<!--                                } else {-->
<!--                                    marker = new google.maps.Marker({-->
<!--                                        position: pos,-->
<!--                                        icon: symbol,-->
<!--                                        draggable: true,-->
<!--                                        title: "",-->
<!--                                        map: map,-->
<!--                                        shadow: null-->
<!--                                    });-->
<!--                                }-->
<!--                                changed = true;-->
<!--                                map.setCenter(pos);-->
<!--                            },-->
<!---->
<!--                            function() {-->
<!--                                handleLocationError(true, infoWindow, map.getCenter());-->
<!--                            }-->
<!--                        );-->
<!--                    } else {-->
<!--                        // Browser doesn't support Geolocation-->
<!--                        handleLocationError(false, infoWindow, map.getCenter());-->
<!--                    }-->
<!--                }, false-->
<!--            )-->
<!--        }-->
<!--    }-->
<!---->
<!--    function handleLocationError(browserHasGeolocation, infoWindow, pos) {-->
<!--        infoWindow.setPosition(pos);-->
<!--        infoWindow.setContent(-->
<!--            browserHasGeolocation ?-->
<!--                "Error: The Geolocation service failed." :-->
<!--                "Error: Your browser doesn't support geolocation."-->
<!--        );-->
<!--        infoWindow.open(map);-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=geometry&language=uz&region=UZ&callback=initMap"></script>-->
<!--<!--<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&libraries=geometry"></script>-->-->
<!--</body>-->
<!---->
<!--</html>-->
