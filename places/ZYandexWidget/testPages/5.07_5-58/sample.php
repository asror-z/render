<?php


use zetsoft\widgets\places\ZYandexWidget;
use zetsoft\widgets\places\ZYandexWidgetOld;

echo ZYandexWidget::widget([
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
