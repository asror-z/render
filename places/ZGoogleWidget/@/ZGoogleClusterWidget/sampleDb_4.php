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

        function createMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 7,
                center: {lat:41.32, lng: 69.22}
            });

            // Create an array of alphabetical characters used to label the markers.
            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // Add some markers to the map.
            // Note: The code uses the JavaScript Array.prototype.map() method to
            // create an array of markers based on a given "locations" array.
            // The map() method here has nothing to do with the Google Maps API.
            var markers = locations.map(function(location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: 'Zet'
                });
            });


            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        }
        var locations = [
            {lat: 41.32, lng: 69.22},
            {lat: 41.32, lng: 69.363181},
            {lat: 41.32, lng: 69.371124},
            {lat: 41.32, lng: 69.209834},
            {lat: 41.32, lng: 69.216968},
            {lat: 41.32, lng: 69.863657},
            {lat: 41.32, lng: 69.662905},
            {lat: 41.32, lng: 69.699196},
            {lat: 41.89, lng: 69.790222},
            {lat: 41.750000, lng: 69.116667},
            {lat: 41.759859, lng: 69.128708},
            {lat: 41.765015, lng: 69.133858},
            {lat: 41.770104, lng: 69.143299},
            {lat: 41.773700, lng: 69.145187},
            {lat: 41.774785, lng: 69.137978},
            {lat: 41.819616, lng: 69.968119},
            {lat: 41.330766, lng: 69.695692},
            {lat: 41.927193, lng: 69.053218},
            {lat: 41.330162, lng: 69.865694},
            {lat: 41.734358, lng: 69.439506},
            {lat: 41.734358, lng: 69.501315},
            {lat: 41.735258, lng: 69.438000},
            {lat: 41.999792, lng: 69.463352}
        ]
    </script>
    <!-- Replace following script src -->
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places&callback=createMap"
            async defer></script>
</div>
