<?php

use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;
use yii\data\ActiveDataProvider;
use zetsoft\models\user\User;

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

$model = new User();

$dataProvider = new ActiveDataProvider([
    'query' => User::find()
]);

echo DynaGrid::widget([
    'columns' => $columns = [
        ['class'=>'kartik\grid\SerialColumn', 'order'=>DynaGrid::ORDER_FIX_LEFT],
        'id',
        'name',
        [
            'attribute'=>'publish_date',
            'filterType'=>GridView::FILTER_DATE,
            'format'=>'raw',
            'width'=>'170px',
            'filterWidgetOptions'=>[
                'pluginOptions'=>['format'=>'yyyy-mm-dd']
            ],
        ],
        [
            'class'=>'kartik\grid\BooleanColumn',
            'attribute'=>'status',
            'vAlign'=>'middle',
        ],
        [
            'class'=>'kartik\grid\ActionColumn',
            'dropdown'=>false,
            'order'=>DynaGrid::ORDER_FIX_RIGHT
        ],
        ['class'=>'kartik\grid\CheckboxColumn', 'order'=>DynaGrid::ORDER_FIX_RIGHT],
    ],
    'storage'=>DynaGrid::TYPE_COOKIE,
    'id' => 'd',
    'userSpecific' => false,
    'gridOptions' => [
        'dataProvider' => $dataProvider
    ],
    'options' => []
]);
