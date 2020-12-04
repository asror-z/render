<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\former\shop\ProductItemForm;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZDynaWidgetD;

$model = new ProductItemForm();
$data = Az::$app->market->product->getProductItemForm();

echo ZDynaWidgetD::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
        'type' => ZDynaWidgetD::type['item']
    ]
]);
