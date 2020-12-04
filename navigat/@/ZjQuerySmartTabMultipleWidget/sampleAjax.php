<?php

use zetsoft\widgets\former\ZAjaxWidget;
use zetsoft\widgets\navigat\ZButtonWidget2;

echo ZButtonWidget2::widget([
    'config' => [
        'text' => 'ajax2',
        'ajax' => true,
        'url' => '/core/tester/umid/serverside.aspx',
        'type' => ZAjaxWidget::type['get'],
        'data' => "name : 'Yan', surname : 'Oblak'"
    ],
    'event' => [
        'complete' => "function() {
            console.log('asd')
        }"
    ]
]);
