<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use zetsoft\models\shop\ShopReview;
use zetsoft\models\core\User;
use zetsoft\widgets\former\ZDynaWidget;

/** @var ShopReview $model */
$model = new ShopReview();

$model->configs->groups=[
    'rating_option',
    'text',
];


$model->configs->groupFooters=[
    'text'=>function ($model, $key, $index, $widget) {
        return [
            'mergeColumns' => [[2, 5]],
            'content' => [              // content to show in each summary cell
                2 => "Month Total ({$model['parent_id']}→{$model['shop_product_id']})",
            17=> GridView::F_SUM,
            ],
            'contentFormats' => [      // content reformatting for each summary cell
                6 => ['format' => 'number'],
            ],
            'contentOptions' => [      // content html attributes for each summary cell
                6 => ['class' => 'text-right'],
            ],
            'options' => ['class' => 'success table-success h6']
        ];
    },
];

$model->columns();
echo ZDynaWidget::widget([
    'model' => $model,

]);

