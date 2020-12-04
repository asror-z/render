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
use zetsoft\widgets\former\ZArrayWidget;

$model = new ProductItemForm();
 //vdd($model);
$data = Az::$app->market->product->getProductItemForm();
 //vdd($data);
echo ZArrayWidget::widget([
    'model' => $model,
    'data' => $data
]);
