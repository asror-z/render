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
use zetsoft\widgets\market\ZMProductCardWidget;
use zetsoft\widgets\sorter\ZLinkSorterWidget;;

$model = new ProductItemForm();

$data = Az::$app->market->product->getProductItemForm();

echo ZListViewWidget::widget([

    'model' => $model,
    'data' => $data,

    'config' => [
        'itemOptions' => ['class' => 'item-element'], // har bir item atofidagi tag optionlari
        'layout' => "{sorter}\n{summary}\n{pager}\n{items}",
        'itemView' => function ($model, $key, $index, $widget) {
            return ZMProductCardWidget::widget([
                /*'config' => [
                    'productName' => $model->name,
                    'price' => $model->price,
                ]*/
                'model' => $model
            ]);
        },

        // widget container tag options
        'options' => [
            'tag' => 'div',
            'class' => 'col-sm-12',
            'id' => 'list-wrapper',
        ],

        // Pagination options
        /*'pager' => [
            'firstPageLabel' => 'first',
            'lastPageLabel' => 'last',
            'nextPageLabel' => 'next',
            'prevPageLabel' => 'previous',
            'maxButtonCount' => 5,
        ],*/

        // 'summary' => '',

        'sorter' => [
            'class' => ZLinkSorterWidget::class,
            'attributes' => ['name', 'price'],
            'config' => [
                'wrapperTag' => 'span', // default: li
                'linkOptions' => ['class' => 'btn btn-primary btn-lg'],
                'clearLinkConfigs' => [
                    'options' => ['class' => 'btn btn-danger btn-lg'], // html options for Clear link
                ],
            ],
        ]
    ]
]);



