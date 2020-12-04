<?php

use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlertWidget;




echo  ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'iframe',
        'iframe' => true,
        'url' => '/core/elfind/all.aspx',
        'iframeHeight'=> '700px'
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



