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
        height: 500px;
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
    <div class="row">
        <div class="col-md-12">
            <input id="search_map" type="tel" class="form-control" placeholder="Search ..."/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <div id="map">

            </div>
        </div>
    </div>
    <script>
        var map;
        function createMap() {
            var options = {
                center:{lat:41.32, lng: 69.22},
                zoom:12
            }
            map = new google.maps.Map(document.getElementById('map'),options);

            var iconBase =
                'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

            var icons = {
                parking: {
                    icon: iconBase + 'parking_lot_maps.png'
                },
                library: {
                    icon: iconBase + 'library_maps.png'
                },
                info: {
                    icon: iconBase + 'info-i_maps.png'
                }
            };
            var features = [
                {
                    position: new google.maps.LatLng(41.31721, 69.22630),
                    type: 'info'
                }, {
                    position: new google.maps.LatLng(41.30539, 69.20820),
                    type: 'info'
                }, {
                    position: new google.maps.LatLng(41.31747, 69.24912),
                    type: 'info'
                }, {
                    position: new google.maps.LatLng(41.30910, 69.19907),
                    type: 'info'
                }, {
                    position: new google.maps.LatLng(41.32725, 69.28011),
                    type: 'info'
                }, {
                    position: new google.maps.LatLng(41.33872, 69.23089),
                    type: 'info'
                }, {
                    position: new google.maps.LatLng(41.30784, 69.23094),
                    type: 'info'
                }
            ];

            // Create markers.
            for (var i = 0; i < features.length; i++) {
                var marker = new google.maps.Marker({
                    map: map,
                    title: "ZetSoft Markets " + i,
                    position: features[i].position,
                    icon: icons[features[i].type].icon,
                });
            };


            var input = document.getElementById('search_map');
            var searchBox = new google.maps.places.SearchBox(input);

            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];

            searchBox.addListener('places_changed', function () {
                var places = searchBox.getPlaces();

                if(places.length === 0)
                    return null;

                markers.forEach(function (m) {m.setMap(null);});
                markers = [];

                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (p) {
                    if(!p.geometry)
                        return null;

                    markers.push(new google.maps.Marker({
                        map:map,
                        title: p.name,
                        position: p.geometry.location,
                        // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
                    }));
                    console.log(p);

                    $.ajax({url: "\service.aspx?namespace=inputs&service=depDrops&method=map&args=" + p.place_id, success: function(result){
                        // $("#place_image").src(result);
                        document.getElementById("place_image").src = result;
                    }});

                    if(p.geometry.viewport)
                        bounds.union(p.geometry.viewport);
                    else bounds.union(p.geometry.location);
                })
                map.fitBounds(bounds);
            })
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places&callback=createMap"
        async defer></script>
</div>

<img id="place_image" src="https://maps.googleapis.com/maps/api/place/photo?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&maxwidth=580
&photoreference=CnRtAAAATLZNl354RwP_9UKbQ_5Psy40texXePv4oAlgP4qNEkdIrkyse7rPXYGd9D_Uj1rVsQdWT4oRz4QrYAJNpFX7rzqqMlZw2h2E2y5IKMUZ7ouD_SlcHxYq1yL4KbKUv3qtWgTK0A6QbGh87GB3sscrHRIQiG2RrmU_jF4tENr9wGS_YxoUSSDrYjWmrNfeEHSGSc3FyhNLlBU"/>
