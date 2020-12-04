<?php


use zetsoft\widgets\places\ZYandexWidgetKH;
use zetsoft\widgets\places\ZYandexWidgetOld;

echo ZYandexWidgetKH::widget([
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
