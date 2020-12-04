<?php
use zetsoft\widgets\places\ZGoogleDbWidget;


$action->title = Azl . 'Веб-действия';

$action->icon = 'fa fa-database';
$action->icon =true;
//$this->type = \zetsoft\system\kernels\WebItem::type['part'];


//echo ZGoogleDbWidget::widget([]);

//AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo
?>
<style>
    #map{
        height: 600px;
    }
    #right-panel {
        float: right;
        height: 100%;
    }

</style>

<div class="container-fluid">
    <div class="row">
        <div id="mode-selector" class="controls">
            <input type="radio" name="type" id="changemode-walking" checked="checked">
            <label for="changemode-walking">Walking</label>

            <input type="radio" name="type" id="changemode-transit">
            <label for="changemode-transit">Transit</label>

            <input type="radio" name="type" id="changemode-driving">
            <label for="changemode-driving">Driving</label>
        </div>
        <div class="col-md-9">
            <div id="map">
            </div>
        </div>
        <div class="col-md-3">
            <div id="right-panel">
                <p>Total Distance: <span id="total"></span></p>
            </div>
        </div>
    </div>

    <script>

        var map,infoWindow;
        var directionsRenderer;
        var directionsService;
        function createMap() {
            directionsRenderer = new google.maps.DirectionsRenderer;
            directionsService = new google.maps.DirectionsService;
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: {lat:41.32, lng: 69.22}
            });

            directionsRenderer = new google.maps.DirectionsRenderer({
                draggable: true,
                map: map,
                panel: document.getElementById('right-panel')
            });


            var markers = locations.map(function(location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: 'Z' + i
                });
            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

            map.addListener('click', function(event) {

                var marker = new google.maps.Marker({
                    position: event.latLng,
                    title: '#salom' ,
                    map: map
                });
                createDirection(event.latLng);

            });

            directionsRenderer.addListener('directions_changed', function() {
                computeTotalDistance(directionsRenderer.getDirections());
            });

        }

        function createDirection(LatLng1) {
            directionsService.route({
                origin: LatLng1,  // Haight.
                destination: {lat: 41.174785, lng: 69.137978},  // Ocean Beach.
                // Note that Javascript allows us to access the constant
                // using square brackets and a string value as its
                // "property."
                travelMode: 'WALKING'
            }, function(response, status) {
                console.log(response)
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }


        function computeTotalDistance(result) {
            var total = 0;
            var myroute = result.routes[0];
            for (var i = 0; i < myroute.legs.length; i++) {
                total += myroute.legs[i].distance.value;
            }
            total = total / 1000;
            document.getElementById('total').innerHTML = total + ' km';
        }

        var locations = [
            {lat: 41.3256, lng: 69.22},
            {lat: 41.323, lng: 69.363181},
            {lat: 41.32534, lng: 69.371124},
            {lat: 41.3213, lng: 69.209834},
            {lat: 41.3256, lng: 69.216968},
            {lat: 41.328, lng: 69.163657},
            {lat: 41.3290, lng: 69.262905},
            {lat: 41.322, lng: 69.299196},
            {lat: 41.3297, lng: 69.190222},
            {lat: 41.250000, lng: 69.116667},
            {lat: 41.29859, lng: 69.128708},
            {lat: 41.265015, lng: 69.133858},
            {lat: 41.270104, lng: 69.143299},
            {lat: 41.273700, lng: 69.145187},
            {lat: 41.174785, lng: 69.137978},
            {lat: 41.219616, lng: 69.168119},
            {lat: 41.330766, lng: 69.695692},
            {lat: 41.227193, lng: 69.353218},
            {lat: 41.330162, lng: 69.365694},
            {lat: 41.234358, lng: 69.439506},
            {lat: 41.234358, lng: 69.501315},
            {lat: 41.235258, lng: 69.438000},
            {lat: 41.299792, lng: 69.463352}
        ]

    </script>
    <!-- Replace following script src -->
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places&callback=createMap"
            async defer></script>
</div>
