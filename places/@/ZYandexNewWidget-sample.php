<?php


use zetsoft\widgets\places\ZYandexNewWidget;
use zetsoft\widgets\places\ZYandexWidgetOld;

echo ZYandexNewWidget::widget([


         'config' => [
             'trafficControls' => 'trafficControls',
             'routeButtonControl' => 'routeButtonControl',
             'zoomControl' => 'zoomControl',
             'searchControl' => 'searchControl',
             'typeSelector' => 'typeSelector',
             'geolocationControl' => 'geolocationControl',
             'fullscreenControl' => 'fullscreenControl',
             'customControl' => 'customControl',
             'rulerControl' => 'rulerControl',
             'center'=> [55.753994, 37.622093],
            
         ],
]);
