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
<?
echo "<pre>";
print_r($model->jsonb_10);
echo "</pre>";

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'config'=>[
        'topBtn' => false,
        //'botBtn' => false,
    ],
    'rows' => [
        [
            'attributes' => [
                'jsonb_10' => [
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
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: uluru
            });


            var contentString = document.getElementById("w0");

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            /*$('#map').on('dblclick',function () {


            }) ;*/

            map.addListener('click', function(event) {

                var marker = new google.maps.Marker({
                    position: event.latLng,
                    title: '#salom' ,
                    map: map
                });
                console.log(marker.position.lat())
                console.log(marker.position.lng())

                document.getElementById('coreinput-jsonb_10').value = [event.latLng,event.latLng];



                //document.getElementById('coreinput-jsonb_10').value = event.latLng.lng();
                //infowindow.open(map, marker);
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
        }

        
    </script>

    <!-- Replace following script src -->
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places&callback=createMap"
        async defer></script>
</div>
