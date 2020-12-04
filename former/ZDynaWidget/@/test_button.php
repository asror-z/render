<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\shop\ShopCatalog;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\User;
use zetsoft\models\App\eyuf\EyufDocument;
use zetsoft\models\App\eyuf\Order;
use zetsoft\widgets\former\ZDynaWidget;
$model =  new ShopOrder();

$button = ZDynaWidget::widget([
    'config' => [
        'text'  => 'TestDyna',
        'options' => [
            'class' => 'red'
        ]
    ]
]);

echo ZDynaWidget::widget([
    'model' => $model,
    'test' => [
        'content' => $button
    ],
]);
