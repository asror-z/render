<?php
/**
 * @author   Boymurodov Samandar
 * https://t.me/samandar_boymurodov
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
  </head>
  <body>
    <div id="dataContainerMotion">
      No device motion data
    </div>
    <h3 style="text-align: center;">My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
    let map, infoWindow, heading, marker, prevPosn = "";
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
    let dataContainerMotion = document.getElementById( "dataContainerMotion" ); 
if (window.DeviceOrientationEvent) {
    window.addEventListener("deviceorientation",
            function(event) {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                            let pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };
                            console.log(pos);
                            infoWindow.setPosition(pos);
                            let symbolTwo = {
                                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                                rotation: 0,
                                fixedRotation: true,
                                offset: "0%",
                                scale: 7,
                                strokeColor: "#3333FF",
                                strokeWeight: 5,
                                fillColor: "blue",
                                anchor: new google.maps.Point(0, 2.5)
                            }; //dataContainerOrientation1.innerHTML = "alpha: " + alpha; 
                            if (changed) {
                                prevPosn = marker.getPosition();
                                marker.setPosition(pos);
                                marker.setIcon({
                                    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                                    rotation: google.maps.geometry.spherical.computeHeading(prevPosn, marker.getPosition()),
                                    fixedRotation: true,
                                    offset: "0%",
                                    scale: 7,
                                    strokeColor: "#3333FF",
                                    strokeWeight: 5,
                                    fillColor: "blue",
                                    anchor: new google.maps.Point(0, 2.5)
                                });
                            } else {
                                marker = new google.maps.Marker({
                                    position: pos,
                                    icon: symbolTwo,
                                    draggable: true,
                                    title: "",
                                    map: map,
                                    shadow: null
                                });
                            }
                            changed = true; // let iconic = marker.getIcon();
                            // iconic.rotation -= alpha; // //alpha %= 360; // marker.setIcon(iconic); // infoWindow.open(map); map.setCenter(pos); // Sets the map on all markers in the array. }, function() { handleLocationError(true,
                            infoWindow, map.getCenter());
                    });
            } else { // Browser doesn't support Geolocation handleLocationError(false, infoWindow, map.getCenter()); } }, false, ) } } function handleLocationError(browserHasGeolocation,
                infoWindow,
                pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ? "Error: The Geolocation service failed." : "Error: Your browser doesn't support geolocation.");
                infoWindow.open(map);
            }
/script>

<
script defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&callback=initMap" >
    <
    /script> <
    / body>

<
/html>