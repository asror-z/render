<?php


use zetsoft\widgets\places\ZYandexDbDeliveryCalculatorWidget;
use zetsoft\widgets\places\ZYandexDbPolygonWidget;
use zetsoft\widgets\places\ZYandexDbCircleWidget;
use zetsoft\widgets\places\ZYandexdbWidget;
use zetsoft\widgets\places\ZYandexWidgetOld;
use zetsoft\widgets\places\ZYandexWidgetS;

echo ZYandexDbDeliveryCalculatorWidget::widget([
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
