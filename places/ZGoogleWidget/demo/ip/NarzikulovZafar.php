<?php
/**
 * @author boymurodov samandar
 * https://t.me/samandar_boymurodov
 * @license ___________________
 */
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }
        #origin-input,
        #destination-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 200px;
        }

        #origin-input:focus,
        #destination-input:focus {
            border-color: #4d90fe;
        }

        #mode-selector {
            color: #fff;
            background-color: #4d90fe;
            margin-left: 12px;
            padding: 5px 11px 0px 11px;
        }

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
            float: left;
            width: 68%;
            height: 600px;
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
<div style="display: none">
    <input
            id="origin-input"
            class="controls"
            type="text"
            placeholder="qayerdan"
    />

    <input
            id="destination-input"
            class="controls"
            type="text"
            placeholder="qayoqqa"
    />
</div>
<div id="right-panel">
    <p>Umumiy masofa: <span id="total"></span></p>
</div>
<script>
    let map,
        infoWindow,
        marker = "";

    let changed = false;
    function initMap() {
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
                    console.log(alpha)
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

                                map.setCenter(pos);
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

        new AutocompleteDirectionsHandler(map);
        // const directionsService = new google.maps.DirectionsService();
        // const directionsRenderer = new google.maps.DirectionsRenderer({
        //   draggable: true,
        //   map,
        //   panel: document.getElementById("right-panel")
        // });
        // directionsRenderer.addListener("directions_changed", () => {
        //   computeTotalDistance(directionsRenderer.getDirections());
        // });
        // displayRoute(
        //   { lat: 41.559978, lng: 60.640011 },
        //   { lat: 41.299496, lng: 69.240074 },
        //   directionsService,
        //   directionsRenderer
        // );
    }//end of initMap
    class AutocompleteDirectionsHandler {
        constructor(map) {
            this.map = map;
            this.originPlaceId = "";
            this.destinationPlaceId = "";
            //this.travelMode = google.maps.TravelMode.DRIVING;
            this.directionsService = new google.maps.DirectionsService();
            this.directionsRenderer = new google.maps.DirectionsRenderer({
                draggable: true,
                map,
                panel: document.getElementById("right-panel")
            });
            this.directionsRenderer.setMap(map);
            const originInput = document.getElementById("origin-input");
            const destinationInput = document.getElementById("destination-input");
            //const modeSelector = document.getElementById("mode-selector");
            const originAutocomplete = new google.maps.places.Autocomplete(originInput);
            // Specify just the place data fields that you need.
            originAutocomplete.setFields(["place_id"]);
            const destinationAutocomplete = new google.maps.places.Autocomplete(
                destinationInput
            );
            // Specify just the place data fields that you need.
            destinationAutocomplete.setFields(["place_id"]);
            this.setupPlaceChangedListener(originAutocomplete, "ORIG");
            this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
            this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
            this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
                destinationInput
            );
            //this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
        }


        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        // setupClickListener(id, mode) {
        //   const radioButton = document.getElementById(id);
        //   radioButton.addEventListener("click", () => {
        //     this.travelMode = mode;
        //     this.route();
        //   });
        // }
        setupPlaceChangedListener(autocomplete, mode) {

            autocomplete.bindTo("bounds", this.map);
            autocomplete.addListener("place_changed", () => {
                const place = autocomplete.getPlace();

                if (!place.place_id) {
                    window.alert("Please select an option from the dropdown list.");
                    return;
                }

                if (mode === "ORIG") {
                    this.originPlaceId = place.place_id;
                } else {
                    this.destinationPlaceId = place.place_id;
                }
                this.route();
            });
        }


        route() {
            if (!this.originPlaceId || !this.destinationPlaceId) {
                return;
            }
            const me = this;
            me.directionsRenderer.addListener("directions_changed", () => {
                me.computeTotalDistance(me.directionsRenderer.getDirections());
            });
            this.directionsService.route(
                {
                    origin: { placeId: this.originPlaceId },
                    destination: { placeId: this.destinationPlaceId },
                    travelMode: google.maps.TravelMode.DRIVING
                },
                (response, status) => {
                    if (status === "OK") {
                        me.directionsRenderer.setDirections(response);
                    } else {
                        window.alert("Service  due to " + status);
                    }
                }
            );
        }
        computeTotalDistance(result) {
            let total = 0;
            const myroute = result.routes[0];

            for (let i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }

            total = total / 1000;
            document.getElementById("total").innerHTML = total + " km";
        }
    }
    // function displayRoute(origin, destination, service, display) {
    //   service.route(
    //     {
    //       origin: origin,
    //       destination: destination,
    //       travelMode: google.maps.TravelMode.DRIVING
    //     },
    //     (result, status) => {
    //       if (status === "OK") {
    //         display.setDirections(result);
    //       } else {
    //         alert("Could not display directions due to: " + status);
    //       }
    //     }
    //   );
    // }



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
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&language=uz&region=UZ&callback=initMap&libraries=places&v=weekly"
        defer
></script>
</body>
</html>
