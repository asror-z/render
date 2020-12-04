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
use zetsoft\widgets\former\ZListViewWidget;

$items = Az::$app->market->product->allCompanies();

echo ZListViewWidget::widget([
    'data' => $items,
    'config' => [
        'type' => ZListViewWidget::type['item'],
        /** @var ProductItem $items */
        'itemView' => function($items, $key, $index, $widget){
            return
                 $this->require( '/render/cards/ZVMarketWidget/ready/cardCompanyShokhrukh.php', [
                    'item' => $items,
                    'col'=>3
                ]);




        }
    ]
]);
