<?php


use zetsoft\widgets\places\ZYandexW;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;

echo ZYandexWidgetS::widget([


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
