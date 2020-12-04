<?php
use zetsoft\system\Az;
use zetsoft\widgets\market\ZZoomWidget;


Az::$app->controller->layout = 'bozorMain';

echo ZZoomWidget::widget([
    'config' => [
        'position' => ZZoomWidget::position['lens']
    ]
]);
