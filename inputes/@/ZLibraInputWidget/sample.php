<?php

use zetsoft\widgets\inputes\ZLibraInputWidget_shoaziz_2;
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

echo ZLibraInputWidget_shoaziz_2::widget([
    'config' => [
        'objectName' => 'libra',
        'mode' => ZLibraInputWidget_shoaziz_2::mode['auto'],
        'inputSelector' => 'input[type=number]',
        'toggleSelector' => '[data-toggle=button]',
        'autorun' => true,
    ]
]);
