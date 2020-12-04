<?php

use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlertWidget;
use zetsoft\widgets\places\ZGoogleWidgetKH;

echo ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'confirm',
        'type' => ZSweetAlertWidget::type['ajax'],
        'url' => '/core/tester/ajaxify/sample_1.aspx',
    ]
]);

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'Sample Ajax',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => 'confirm'
    ]
]);
