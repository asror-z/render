<?php

use zetsoft\widgets\notifier\ZKGrowlWidget;


echo ZKGrowlwidget::widget([
    'config' => [
        'linkUrl' => '',
        'title' => '',
        'delay' => 500,
        'type' => ZKGrowlWidget::type['success'],
    ]


]);

