<?php

use zetsoft\system\Az;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\widgets\notifier\ZSweetAlertWidget;


echo ZSweetAlertWidget::widget([
    'config' => [
        'functionName' => 'iframe',
        'type' => ZSweetAlertWidget::type['iframe'],
        'url' => '/cores/auth/login.aspx',
        'iframeWidth' => '100%',
        'iframeHeight' => '500',
        'width' => '800'
    ]
]);


echo ZButtonWidget::widget([
    'config' => [
        'text' => 'Sample Iframe',
        'btnStyle' => ZButtonWidget::btnStyle['btn-success'],
    ],
    'event' => [
        'click' => 'iframe'
    ]
]);
?>


