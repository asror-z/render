<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\dbitem\shop\ProductItem;
;

use zetsoft\dbitem\shop\TestItem;
use zetsoft\former\shop\ColorForm;
use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new TestItem();
$data = [];

$item = new TestItem();
$item->name = 'fds';

$data[] = $item;

echo ZDynaWidgetD::widget([
    //'model' => $model,
    'data' => $data,
    'config' => [
        'type' => 'item'
    ]
]);
