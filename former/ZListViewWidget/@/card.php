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
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZListViewWidget;
/** @var ZView  $this */
$model = Az::$app->market->product->allProducts();

echo ZListViewWidget::widget([
    'data' => $model,
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
        /** @var ProductItem $model */
        'itemView' => function($model, $key, $index, $widget){

            return $this->require( "/render/cards/ZVMarketWidget/ready/main.php", [
                'item' => $model
            ]);
        }
    ]
]);
