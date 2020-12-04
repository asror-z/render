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
use zetsoft\models\shop\ShopOrder;

// An Array Data Provider
$dataProvider = new ArrayDataProvider([
    'allModels' => [
        ['id' => 1, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-1', 'region' => 'IT-5', 'amount' => 1400],
        ['id' => 2, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-1', 'region' => 'IT-5', 'amount' => 1300],
        
        ['id' => 3, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-1', 'region' => 'IT-6', 'amount' => 2400],
        ['id' => 4, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-1', 'region' => 'IT-6', 'amount' => 4900],
        ['id' => 5, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-2', 'region' => 'IT-7', 'amount' => 7340],
        ['id' => 6, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-2', 'region' => 'IT-7', 'amount' => 4560],
        ['id' => 7, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-2', 'region' => 'IT-8', 'amount' => 3550],
        ['id' => 8, 'year' => 2017, 'month' => 'JAN', 'cat' => 'CAT-2', 'region' => 'IT-8', 'amount' => 9450],
        ['id' => 9, 'year' => 2017, 'month' => 'FEB', 'cat' => 'CAT-2', 'region' => 'IT-6', 'amount' => 3900],
        ['id' => 10, 'year' => 2017, 'month' => 'FEB', 'cat' => 'CAT-2', 'region' => 'IT-6', 'amount' => 52200],
        ['id' => 11, 'year' => 2018, 'month' => 'JAN', 'cat' => 'CAT-3', 'region' => 'IT-5', 'amount' => 4700],
        ['id' => 12, 'year' => 2018, 'month' => 'JAN', 'cat' => 'CAT-3', 'region' => 'IT-5', 'amount' => 11900],
    ]
]);
// Group Footer Settings
$gfYear = function ($model, $key, $index, $widget) {
    return [
        'mergeColumns' => [[1, 5]],
        'content' => [              // content to show in each summary cell
            1 => 'Year Total (' . $model['year'] . ')',
            6 => GridView::F_SUM,
        ],
        'contentFormats' => [      // content reformatting for each summary cell
            6 => ['format' => 'number', 'decimals' => 2],
        ],
        'contentOptions' => [      // content html attributes for each summary cell
            6 => ['class' => 'text-right'],
        ],
        'options' => ['class' => 'active table-active h6']
    ];
};
$gfMonth = function ($model, $key, $index, $widget) {
    return [
        'mergeColumns' => [[2, 5]],
        'content' => [              // content to show in each summary cell
            2 => "Month Total ({$model['month']}→{$model['year']})",
            6 => GridView::F_SUM,
        ],
        'contentFormats' => [      // content reformatting for each summary cell
            6 => ['format' => 'number', 'decimals' => 2],
        ],
        'contentOptions' => [      // content html attributes for each summary cell
            6 => ['class' => 'text-right'],
        ],
        'options' => ['class' => 'success table-success h6']
    ];
};
$gfCategory = function ($model, $key, $index, $widget) {
    return [
        'mergeColumns' => [[3, 5]],
        /*'content' => [              // content to show in each summary cell
            3 => "Category Total ({$model['cat']}→{$model['month']}→{$model['year']})",
            6 => GridView::F_SUM,
        ],*/
        'contentFormats' => [      // content reformatting for each summary cell
            6 => ['format' => 'number', 'decimals' => 2],
        ],
        'contentOptions' => [      // content html attributes for each summary cell
            6 => ['class' => 'text-right'],
        ],
        'options' => ['class' => 'danger table-danger h6'],
    ];
};
$gfRegion = function ($model, $key, $index, $widget) {
    return [
        'mergeColumns' => [[4, 5]],
        /*'content' => [              // content to show in each summary cell
            4 => "Region Total ({$model['region']}→{$model['cat']}→{$model['month']}→{$model['year']})",
            6 => GridView::F_SUM,
        ],*/
        'contentFormats' => [      // content reformatting for each summary cell
            6 => ['format' => 'number', 'decimals' => 2],
        ],
        'contentOptions' => [      // content html attributes for each summary cell
            6 => ['class' => 'text-right'],
        ],
        'options' => ['class' => 'info table-info h6']
    ];
};
// The GridView widget (multi level grouped)
$model = new \zetsoft\models\user\User();

echo GridView::widget([
    'dataProvider' => $model,
    'filterModel' => null,
    'showPageSummary' => true,
    'pjax' => true,
    'hover' => true,
    'panel' => ['type' => 'primary', 'heading' => 'Grid Grouping Example'],
    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    'columns' => [
        // note that you MUST NOT have the first column as a grid group
        // to achieve that add a dummy hidden column like shown below
        ['class' => 'kartik\grid\SerialColumn', 'hidden' => true],
        ['attribute' => 'year', 'group' => true, 'groupFooter' => $gfYear, 'pageSummary' => 'Page Summary'],
        ['attribute' => 'month', 'group' => true, 'subGroupOf' => 1, 'groupFooter' => $gfMonth],
        ['attribute' => 'cat', 'group' => true, 'subGroupOf' => 2, 'groupFooter' => $gfCategory],
        ['attribute' => 'region', 'group' => true, 'subGroupOf' => 3, 'groupFooter' => $gfRegion],
        ['attribute' => 'id', 'label' => 'ID', 'hAlign' => 'center', 'width' => '150px'],
        ['attribute' => 'amount', 'label' => 'Amount ($)', 'format' => ['decimal', 2], 'hAlign' => 'right', 'width' => '150px', 'pageSummary' => true],
    ],
]);
