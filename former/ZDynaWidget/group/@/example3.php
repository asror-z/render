<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\grid\DataColumn;
use kartik\grid\GridView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD24;

$model = new \zetsoft\models\user\User();
$model->configs->groups = [
    'name',
    'email'
];

$model->configs->groupFooters = [
    'name' => function($widget){
        return [];
    },
    'email'
];

$func =  function ($model, $key, $index, $widget) {
    return [
        'mergeColumns' => [[2, 3, 4]],
        'content' => [              // content to show in each summary cell
            2 => 'Year Total (' . $model['name'] . ')',
            3 => 'Year Total (' . $model['name'] . ')',
            4 => GridView::F_SUM,
        ],
        'contentFormats' => [      // content reformatting for each summary cell
            4 => ['format' => 'number', 'decimals' => 2],
        ],
        'contentOptions' => [      // content html attributes for each summary cell
            4 => ['class' => 'text-right'],
        ],
        'options' => ['class' => 'active table-active h6']
    ];
};



$model->configs->groupFooters = [

    /** @var User $model */
    'name' => $func
];


$model->columns();

echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'summary' => true,
    ]
]);
