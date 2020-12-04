<?php

use zetsoft\widgets\places\ZMapsHybridWidet ;

echo ZMapsHybridWidet ::widget([
    'config' => [
        'height'               => 600, // height in vh
        'width'                => 100, //width in %
        'zoom'                 => 9,
        'markerCount'          => 2,
        'mapVision'            =>'typical', //'typical', '3d'
        'mapDegree'            => 0, //same as mapVision but its in number
        'scrollwheel'          => true,
        'mapType'              =>'google',   //'leaflet', 'mapBox','osm','osrm','mapTalks','yandex' ;
    ]
]);

