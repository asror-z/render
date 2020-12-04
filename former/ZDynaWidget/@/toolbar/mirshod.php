<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\place\PlaceAdress;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new PlaceAdress();

$button = ZButtonWidget::widget([
    'config' => [
        'text' => 'asdf'
    ]
]);

echo ZDynaWidget::widget([
    'model' => $model,
    /*'rightName' => [
        'clear_update',
        'system'
    ],*/
    /*'rightNameEx' => [
        'toggleData'
    ],*/
    'rightBtn' => [
        'key' => [
            'content' => $button,
            'options' => [
                'class' => ''
            ]
        ]
    ],
    'config' => [
        /*'hasToolbar' => false,*/
    ]
]);
