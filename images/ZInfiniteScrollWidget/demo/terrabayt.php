<?php


use zetsoft\dbitem\shop\ProductItem;
use zetsoft\system\Az;
use zetsoft\widgets\ajaxify\ZInfinityScrollAjaxWidget;
$model = Az::$app->market->product->allProducts();

echo \zetsoft\widgets\former\ZListViewWidgetD1::widget([
        'data' => $model,
        'config' => [
            'options' => [
                'class' => 'w-100 row'
            ],
            'itemOptions' => [
                'class' => 'item col-3'
            ],
            'summaryOptions' => [
                'class' => 'col-12'
            ],
            'attributes' => [
                'name' => [
                    'label' => Az::l("По имени")
                ],
                'price' => [
                    'label' => Az::l("По цене")
                ],
            ],

            'type' => \zetsoft\widgets\former\ZListViewWidgetD1::type['item'],

            /** @var ProductItem $model */

            'itemView' => function ($model, $key, $index, $widget) {

                /*return $this->require( "/render/cards/ZListViewWidget/demo/vertical_horizontal.php", [
                    'item' => $model,
                    'col'=>12
                ]);*/
                return ZInfinityScrollAjaxWidget::widget([
                    'config' => [
                        'url' => '/market/main/infiniteJaxongir.aspx',
                        'requireUrl'=>'/render/cards/ZListViewWidget/demo/vertical_horizontal.php',
                        'limitPost'=>3,
                        'item'=>$model
                    ]
                ]);


            }
        ]
   ]);

