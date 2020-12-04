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
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidgetD;

$data = Az::$app->market->product->allProducts();
$model = new ProductItem();

echo ZDynaWidgetD::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'type' => ZDynaWidgetD::type['item']
    ]
]);
