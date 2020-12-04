<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopCategory;
use zetsoft\models\shop\ShopProduct;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = new ShopCategory();

$button = ZButtonWidget::widget([
    'config' => [
        'text' => 'Java'
    ]
]);

$button = ZButtonWidget::widget([
    'config' => [
        'text' => 'extra'
    ]
]);

echo ZDynaWidget::widget([
    'model' => $model,
    'button' => [
        'add-tabular-clone-delete' => [
            'content' => "{add}{tabular}{$button}{delete}",
            'options' => [
                'class' => 'btn-group p-1 mr-2 {btnSize} {iconSize} red',
                'style' => "background-color: blue;"
            ]
        ],
        'extra' => [
            'content' => $button,
            'options' => [
                 'class' => '{btnSize}'
            ]
        ]
    ],
    'leftBtn' => [
        'barcode' => [
            'content' => '',
            'options' => [
                'class' => ''
            ]
        ]
    ]

]);

ZArrayHelper::keyExists('key', $arr);
