<?php

use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\ajaxify\ZIntercoolerWidget;
$this->title = 'sample intercooler';
Az::$app->controller->layout = 'test2';
//$this->type= \zetsoft\dbitem\core\WebItem::type['ajax'];

echo ZIntercoolerWidget::widget([
    'config' => [
        'method' => ZIntercoolerWidget::type['get-from'],
        'url' => '/core/tester/ajaxify/content.aspx',
        'target' => '',
        'title' => 'show faqs please',
        'selector' => '#content',
         'class' => 'btn btn-warning'
    ],
    'event' => [
        'complete' => 'function(evt, elt, data, textStatus, xhr, requestId) { 
            console.log(data.responseText) 
        }'
    ]
]);



