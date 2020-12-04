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
use zetsoft\widgets\former\ZListViewWidget;

$model = new ProductItemForm();
$data = Az::$app->market->product->getProductItemForm();

echo ZListViewWidget::widget([
    'model' => $model,
    'data' => $data,
    'config' => [
         'type' => ZListViewWidget::type['form'],
         'itemView' => function($model, $key, $index, $widget){
            return $model->name;
         }
    ]
]);
