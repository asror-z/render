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
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetD24;

$model = new User();
/*$model->configs->group = [
    'name',
    'phone',
    'sex',
  
];

$model->configs->groupedRow = [
    'name',
   

];*/

$model->configs->groupFooter = [
    'name' => function ($model, $key, $index, $widget) { // Closure method
        return [
            'mergeColumns' => [[1,3]], // columns to merge in summary
            'content' => [             // content to show in each summary cell
                1 => 'Summary (' . $model->phone . ')',
                4 => GridView::F_AVG,
                5 => GridView::F_SUM,
                6 => GridView::F_SUM,
            ],
            'contentFormats' => [      // content reformatting for each summary cell
                4 => ['format' => 'number', 'decimals' => 2],
                5 => ['format' => 'number', 'decimals' => 0],
                6 => ['format' => 'number', 'decimals' => 2],
            ],
            'contentOptions' => [      // content html attributes for each summary cell
                1 => ['style' => 'font-variant:small-caps'],
                4 => ['style' => 'text-align:right'],
                5 => ['style' => 'text-align:right'],
                6 => ['style' => 'text-align:right'],
            ],
            // html attributes for group summary row
            'options' => ['class' => 'info table-info','style' => 'font-weight:bold;']
        ];
    }
];



$model->columns();



echo ZDynaWidget::widget([
    'model' => $model,
    'config' => [
        'summary' => true,
    ]
]);
