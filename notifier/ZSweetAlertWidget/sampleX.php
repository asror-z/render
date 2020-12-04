<?php

use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlertWidgetX;


echo ZSweetAlertWidgetX::widget([
    'config' => [
        'type' => ZSweetAlertWidgetX::type['ajax'],
        'functionName' => 'iframe',
        'url' => '/core/tester/ajaxify/sample_3.aspx',
    ]
]);

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'button',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => 'iframe'
    ]
]);
