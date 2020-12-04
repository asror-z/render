<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlert2Widget2;

echo ZSweetAlert2Widget2::widget([
    'config' => [
        'funcName' => 'exampleFunc',
        'type' => ZSweetAlert2Widget2::type['Warning'],
        'width' => 500,
        'height' => 500,
        'padding' => '0',
        'iframeWidth'=> '500px',
        'iframeHeight' => '500px',
    ],
    'event' => [
        'notresult' => <<<JS
         window.open('https://sweetalert2.github.io/', '_blank');
         
JS,
    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'text' => 'button',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => <<<JS
     function() {
         exampleFunc();
     }
JS,

    ]
]);


