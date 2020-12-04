<?php

use zetsoft\widgets\notifier\ZSweetAlert2Widget;


echo ZSweetAlert2Widget::widget([
    'config' => [
        'funcName' => 'exampleFunc',
        'type' => ZSweetAlert2Widget::type['fire'],
        'width' => 500,
        'height' => 500,
        'url'=> '/eyuf/cores/main/index.aspx#menu',
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
