<?php

/*
 * Dynagrid with widget Filters
 * ex: GridView::FILTER_DATE,
 */


//use kartik\widgets\DynaGrid;
use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\place\TestPlaceCountry;
use yii\data\ActiveDataProvider;
use zetsoft\widgets\inputes\ZKDatepickerWidget;

$viewMsg = 'view';
$updateMsg = 'update';
$deleteMsg = 'delete';


$query = PlaceCountry::find()->indexBy('id'); // where `id` is your primary key
$dataProvider = new ActiveDataProvider([
    'query' => $query,
]);


$searchModel = new PlaceCountry();


$columns = [
    ['class'=>'kartik\grid\SerialColumn', 'order'=>DynaGrid::ORDER_FIX_LEFT],
    [
        'attribute'=>'name',
        'vAlign'=>'middle',
        'order'=>DynaGrid::ORDER_FIX_LEFT
    ],
    [
        'attribute'=>'phone',
//        'filterType'=>GridView::FILTER_NUMBER,
        'filterType' =>  \zetsoft\widgets\inputes\ZKNumberWidget::class,
        'hAlign'=>'right',
        'vAlign'=>'middle',
        'width'=>'200px',
        'pageSummary'=>true,
    ],
    [
        'attribute'=>'alpha2',
        'hAlign'=>'right',
        'vAlign'=>'middle',
        'width'=>'200px',
        'pageSummary'=>true,
    ],
    [
        'attribute'=>'sort',
        'filterType'=>GridView::FILTER_NUMBER,
        'format'=>'raw',
        'width'=>'170px',
    ],
    [
        'class'=>'kartik\grid\ActionColumn',
        'dropdown'=>false,
        'urlCreator'=>function($action, $model, $key, $index) { return '#'; },
        'viewOptions'=>['title'=>$viewMsg, 'data-toggle'=>'tooltip'],
        'updateOptions'=>['title'=>$updateMsg, 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['title'=>$deleteMsg, 'data-toggle'=>'tooltip'],
        'order'=>DynaGrid::ORDER_FIX_RIGHT
    ],
    ['class'=>'kartik\grid\CheckboxColumn', 'order'=>DynaGrid::ORDER_FIX_RIGHT],
];


echo DynaGrid::widget([
'columns'=>$columns,
'storage'=>DynaGrid::TYPE_DB,
'theme'=>'panel-success',
'gridOptions'=>[
//    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'panel'=>['heading'=>'<h3 class="panel-title">Salam</h3>'],
    'pjax'=>true,
],
'options'=>['id'=>'salam'], // a unique identifier is important
'userSpecific' => false,
//'enableMultiSort' => false,
]);
