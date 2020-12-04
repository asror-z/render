<?php


use zetsoft\widgets\places\ZGoogleDbWidget;


$action->title = Azl . 'Веб-действия';

$action->icon = 'fa fa-database';
$action->icon =true;
$this->csrf = true;
//$this->type = \zetsoft\system\kernels\WebItem::type['part'];
$action->icon =true;


//echo ZGoogleDbWidget::widget([]);

//AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo
?>
<style>
    #map{
        height: 600px;
    }
</style>
<?php
//echo file_get_contents("https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=Museum%20of%20Contemporary%20Art%20Australia&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo");
//echo file_get_contents("https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJ6VeeDbml30ER-_-dAy0LKVs&fields=name,photos,rating,formatted_phone_number&key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo");
//die;

?>
<!--ChIJ6VeeDbml30ER-_-dAy0LKVs-->
<!--ChIJ6VeeDbml30ER-_-dAy0LKVs-->
<!--html_attributions-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div id="map">
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

            directionsRenderer.setMap(map);

            infoWindow = new google.maps.InfoWindow;
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                    createDirection(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }

            var markers = locations.map(function(location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: 'Z' + i
                });
            });

            map.addListener('click', function(event) {

                var marker = new google.maps.Marker({
                    position: event.latLng,
                    title: '#salom' ,
                    map: map
                });
                createDirection(event.latLng);

            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
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
