<?php


use zetsoft\widgets\places\ZYandexWw;
use zetsoft\widgets\places\ZYandexWidgetOld;

echo \zetsoft\widgets\places\ZYandexLast::widget([

    'config' => [
        'trafficControl' => true,
        'routeButtonControl' => true,
        'zoomControl' => true,
        'searchControl' => true,
        'typeSelector' =>  true,
        'geolocationControl' => true,
        'fullscreenControl' => true,
        'customControl' => true,
        'rulerControl' => true,

    ],

]);