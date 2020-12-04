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

        ['id' => 1,  'amount' => 11900],
        ['id' => 2,  'amount' => 11900],
        ['id' => 3,  'amount' => 11900],
        ['id' => 4,  'amount' => 11900],
        ['id' => 12,  'amount' => 11900],
    ]
]);


$model = new ShopOrder();

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
        ['attribute' => 'year',],
        ['attribute' => 'month'],
        ['attribute' => 'cat',],
        ['attribute' => 'region',],
        ['attribute' => 'id', 'label' => 'ID', 'hAlign' => 'center', 'width' => '150px'],
        ['attribute' => 'amount', 'label' => 'Amount ($)', 'format' => ['decimal', 2], 'hAlign' => 'right', 'width' => '150px', 'pageSummary' => true],
    ],
]);
