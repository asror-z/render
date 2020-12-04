<?php

use zetsoft\widgets\inputes\ZLibraInputWidget_shoaziz_1;
use zetsoft\widgets\navigat\ZButtonWidget;
use zetsoft\system\assets\ZColor;
use zetsoft\widgets\inputes\ZInputWidget;

echo ZInputWidget::widget([
    'config' => [
        'type' => ZInputWidget::type['number'],
    ],
]);

echo ZButtonWidget::widget([
    'config' => [
        'text' => 'Lock',
        'toggle' => ZButtonWidget::toggle['button'],
        'buttonType' => ZButtonWidget::btnType['button'],
        'color' => ZColor::btnStyle['btn-primary'],
        'class' => 'mt-4',
    ],
]);

echo ZLibraInputWidget_shoaziz_1::widget([
    'config' => [
        'mode' => 'live',
        'funcName' => 'libra',
        'inputSelector' => 'input[type=number]',
        'toggleSelector' => '[data-toggle=button]',
        'autorun' => true,
    ]
]);
