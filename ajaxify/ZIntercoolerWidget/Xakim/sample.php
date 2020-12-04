<?php

use zetsoft\system\Az;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
$this->title = 'sample intercooler';
Az::$app->controller->layout = 'test2';

echo ZIntercoolerWidget::widget([
    'config' => [
        'method' => ZIntercoolerWidget::type['get-from'],
        'url' => '/cores/news/index.aspx',
        'target' => '',
        'title' => 'show faqs please',
        'selector' => '#content'
    ],
    'event' => [
        'complete' => 'function(evt, elt, data, textStatus, xhr, requestId) { 
            console.log(data) 
        }'
    ]
]);



