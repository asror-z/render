<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\system\Az;
use zetsoft\widgets\former\ZListViewWidget;

$model = Az::$app->market->product->allProducts();

echo ZListViewWidget::widget([
    'model' => $model,
    'config' => [
        'attributes' => [
            'name' => [
                'label' => Az::l("По имени")
            ],
            'price' => [
                'label' => Az::l("По цене")
            ],
        ],
        'type' => ZListViewWidget::type['item'],
        'itemView' => function($model, $key, $index, $widget){
            return $model->name;
        }
    ]
]);
