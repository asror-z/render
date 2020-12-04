<?php
/**
 * @author Diyorbek Olimov
 * https://t.me/Diyorbek0309
 * @license ___________________
 */
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        #right-panel {
            font-family: "Roboto", "sans-serif";
            line-height: 30px;
            padding-left: 10px;
        }

        #right-panel select,
        #right-panel input {
            font-size: 15px;
        }

        #right-panel select {
            width: 100%;
        }

        #right-panel i {
            font-size: 12px;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 100vh;
            float: left;
            width: 68%;
        }

        #right-panel {
            float: right;
            width: 30%;
            height: 100%;
        }

        .panel {
            height: 100%;
            overflow: auto;
        }
    </style>
</head>
<body>
<h3 style="text-align: center;">My Google Maps Demo</h3>
<div id="map"></div>
<div id="right-panel">
    <p>Umumiy masofa: <span id="total"></span></p>
</div>
<script>
    let map, infoWindow, marker = "";
    let startingPoint = { lat: 41.559978, lng: 60.640011 };
    let endingPoint = { lat: 41.299496, lng: 69.240074 };

    let changed = false;
    function initMap(listener) {
        const center = { lat: 41.377491, lng: 164.585258 };
        map = new google.maps.Map(document.getElementById("map"), {
            center: center,
            zoom: 10
        });
        infoWindow = new google.maps.InfoWindow();

        if (window.DeviceOrientationEvent) {
            window.addEventListener(
                "deviceorientation",
                function (event) {
                    let alpha = event.alpha;
                    let beta = event.beta;
                    let gamma = event.gamma;

                    // if (alpha != null || beta != null || gamma != null) {

                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(
                            function (position) {
                                let pos = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude
                                };
                                console.log(pos);

                                infoWindow.setPosition(pos);
                                alpha = -1 * alpha;
                                let symbol = {
                                    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                                    rotation: alpha,
                                    fixedRotation: true,
                                    offset: "0%",
                                    scale: 5,
                                    strokeColor: "#3333FF",
                                    strokeWeight: 5,
                                    fillColor: "blue",
                                    anchor: new google.maps.Point(0, 2.5)
                                };

                                let carIcon = {
                                    path: 'data:image/png;base64,VBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADeklEQVRoge2YTUwUSRSAv+oMMAualR+FrGE3ykGJP9GIqAujYVHASJaLF29qjBejN3XjxZsxHr0ZTTQxGk3MJu5JD5oYRjZudhXXQeMOzsZwAWQYRQXHaao8jAzMTzc13SNi0t+pu+pV1Xvd9d6rV+Dh4eHh4fENIzIbGtu77gv42X6YCj64/UfgSymVD77MhtmVBxDNhVLA7QczCqWIU9x+sK9ugFt8KoBKaxm/mXrcXNo11/rY8mJ1uq51IUSWD+iy+8gJldlmoGh4/R+dw39R/34gjqIHyT7Rw0un68yGIwNKvitNe//efE/ryGPaog+p/DiWEkPQgsFF4Bd3alpja0DtilX8G7wLwNrmbB2Wjw+yI/qIraNPKJZm7kkELWoLFeJPRnMLqKBGVOu26sj7D5TIBE2xp3S8+ptlE0N6g3zUA/dzdWWGx6mteePsqawclXtqTarjMbZHe2kd6WXh5ITusCSKPVgY4BZbAwwpOcAAnXKYlc8eIFSW3+ohOKACbETRj0EYCCPpZ5Kw9dbSw9aA091nUJMyqYND3T9TAjQiaEwFQpFcXQUYBfqBMIL+s7EQg8UV2PvNNCIrD8wgEpt+Xl6eW+ZQbCmhhJ97S16k2rYN12XJVRkmbf537F8wSpH1kpnEgAiCCBAZecfxhARTQkK6zANThBJ+LbkR6ePq+CKEgINlUd3py4ENKDYAVJVNd5gSVBM75/wocWtiYUHm8RmAwbk5N0Dobx8t5tyADv/bgsxjSkBx0LUPrCn6wBMNP6gyTDr8b9m7IDar7AxyOvFHCZNJJ75lG4X+HzNSYdQqChWA9DD6068nB4srOPX0UmVmGM37NPpb4BgNPZfplMMoYTpPZBAHHuskst1HVp8E0E1wtgZIw+ACtVwwatlRv975UQLOi24O5ztIB20fGCop58oPLdyoaaY51kf7q3/0D3NwzZl6s5O3E8eNIu5UruNO5Tq94zSAyTOrrsyifuB5HwCb2rtm7Ffrot7WgIHnfZQvrk6bGJIFzZIflxEpreFc6U6u1WylNdpLW/TRzIJmirt2+9ltUe8ojMYnxtPe3xSV8XtNEzert9AwFmbX0OeSEoIo9jtZQxfHecCq4LgOHHWsTv74RHf67Vz63ptf1IWybxK/+XuheWCACmoI5VPUu7slyJf5ckns4eHh4eHxVfgESIpH83vzj6UAAAAASUVORK5CYII',
                                    scale: 1,
                                    strokeColor: '#FFFFFF',
                                    fillColor: '#D7006E',
                                    fillOpacity: 1,
                                    //rotation: alpha,
                                };

                                if (changed) {
                                    marker.setPosition(pos);
                                    marker.setIcon(symbol);
                                } else {
                                    marker = new google.maps.Marker({
                                        position: pos,
                                        icon: symbol,
                                        draggable: true,
                                        title: "",
                                        map: map,
                                        shadow: null
                                    });
                                }

                                changed = true;

                                // map.setCenter(pos);

                                google.maps.event.addListener(marker, 'dragend', function(evt){
                                    let lat = evt.latLng.lat();
                                    let lng = evt.latLng.lng();
                                    if (lat.toFixed(1) === startingPoint.lat.toFixed(1) && lng.toFixed(1) === startingPoint.lng.toFixed(1)) {
                                        marker.setIcon({
                                            path: "M17.402,0H5.643C2.526,0,0,3.467,0,6.584v34.804c0,3.116,2.526,5.644,5.643,5.644h11.759c3.116,0,5.644-2.527,5.644-5.644 V6.584C23.044,3.467,20.518,0,17.402,0z M22.057,14.188v11.665l-2.729,0.351v-4.806L22.057,14.188z M20.625,10.773 c-1.016,3.9-2.219,8.51-2.219,8.51H4.638l-2.222-8.51C2.417,10.773,11.3,7.755,20.625,10.773z M3.748,21.713v4.492l-2.73-0.349 V14.502L3.748,21.713z M1.018,37.938V27.579l2.73,0.343v8.196L1.018,37.938z M2.575,40.882l2.218-3.336h13.771l2.219,3.336H2.575z M19.328,35.805v-7.872l2.729-0.355v10.048L19.328,35.805z",
                                            scale: 0.8,
                                            strokeColor: '#FFFFFF',
                                            fillColor: '#109a40',
                                            fillOpacity: 1,
                                        });
                                        map.setZoom(15);
                                    }
                                    map.setCenter({lat: lat, lng: lng});
                                });

                            },
                            function () {
                                handleLocationError(true, infoWindow, map.getCenter());
                            }
                        );
                    } else {
                        handleLocationError(false, infoWindow, map.getCenter());
                    }

                },
                false
            );
        }


        const directionsService = new google.maps.DirectionsService();
        const directionsRenderer = new google.maps.DirectionsRenderer({
            draggable: true,
            map,
            panel: document.getElementById("right-panel")
        });
        directionsRenderer.addListener("directions_changed", () => {
            computeTotalDistance(directionsRenderer.getDirections());
        });
        displayRoute(
            startingPoint,
            endingPoint,
            directionsService,
            directionsRenderer
        );
    }

    function displayRoute(origin, destination, service, display) {
        service.route(
            {
                origin: origin,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            },
            (result, status) => {
                if (status === "OK") {
                    display.setDirections(result);
                } else {
                    alert("Could not display directions due to: " + status);
                }
            }
        );
    }

    function computeTotalDistance(result) {
        let total = 0;
        const myroute = result.routes[0];

        for (let i = 0; i < myroute.legs.length; i++) {
            total += myroute.legs[i].distance.value;
        }

        total = total / 1000;
        document.getElementById("total").innerHTML = total + " km";
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(
            browserHasGeolocation
                ? "Error: The Geolocation service failed."
                : "Error: Your browser doesn't support geolocation."
        );
        infoWindow.open(map);
    }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&language=uz&region=UZ&callback=initMap&libraries=&v=weekly"
    defer
></script>
</body>
</html>

