<?php
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\system\Az;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$action->title = Azl . 'Веб-действия';

$action->icon = 'fa fa-database';
$action->icon =true;
$this->csrf = true;
$this->type = \zetsoft\system\kernels\WebItem::type['part'];
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adding Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?
                    echo ZFormWidget::widget([
                        'model' => $model,
                        'form' => $form,
                        'config'=>[
                            'topBtn' => false,
                            'botBtn' => false,
                        ],
                        'rows' => [

                            [
                                'attributes' => [
                                    'string_2' => [
                                        'type' => Form::INPUT_WIDGET,
                                        'widgetClass' => ZHInputWidget::class,
                                        'options' => [
                                            'config' => [
                                                'hasPlace' => true,
                                                'hasIcon' => false,
                                            ]
                                        ]
                                    ],

                                ],

                            ],

                        ]
                    ]);
                    ?>
                </div>
                <div class="modal-footer">
                    <button id="new-place" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<?php
$this->activeEnd();
?>
<style>
    #map{
        height: 600px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div id="map">

    </div>
    <script>
        function createMap() {
            var uluru = {lat:41.32, lng: 69.22};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: uluru
            });


            var contentString = document.getElementById("w0");

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            $('#map').on('dblclick',function () {
                $('#exampleModal').modal('show') ;

            }) ;

          /*  map.addListener('click', function(event) {
                console.log(event);

                var marker = new google.maps.Marker({
                    position: event.latLng,
                    title: '#salom' ,
                    map: map
                });

                document.getElementById('coreinput-string_1').value = event.latLng;
                infowindow.open(map, marker);
            }); */

            var markers = locations.map(function(location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: 'Z'+i
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
            {lat: 41.32, lng: 69.163657},
            {lat: 41.32, lng: 69.162905},
            {lat: 41.32, lng: 69.299196},
            {lat: 41.19, lng: 69.190222},
            {lat: 41.150000, lng: 69.196667},
            {lat: 41.059859, lng: 69.128708},
            {lat: 41.165015, lng: 69.133858},
            {lat: 41.170104, lng: 69.143299},
            {lat: 41.173700, lng: 69.145187},
            {lat: 41.274785, lng: 69.137978},
            {lat: 41.29616, lng: 69.268119},
            {lat: 41.230766, lng: 69.695692},
            {lat: 41.227193, lng: 69.153218},
            {lat: 41.230162, lng: 69.165694},
            {lat: 41.284358, lng: 69.189506},
            {lat: 41.234358, lng: 69.501315},
            {lat: 41.235258, lng: 69.138000},
            {lat: 41.299792, lng: 69.163352}
        ]
    </script>

    <!-- Replace following script src -->
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places&callback=createMap"
            async defer></script>
</div>
