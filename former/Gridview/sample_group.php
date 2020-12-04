<?php

use kartik\grid\GridView;
use kartik\grid\SerialColumn;
use yii\data\ActiveDataProvider;
use yii\data\Sort;
use yii\grid\CheckboxColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\models\page\PageControl;
use zetsoft\models\shop\ShopOptionType;
use zetsoft\models\user\User;
use zetsoft\system\column\ZRadioColumn;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetJaxongir;

$sort = new Sort([
    'attributes' => [
        'name'=>[
        'asc' => ['name' => SORT_ASC, 'status' => SORT_ASC],
        'desc' => ['name' => SORT_DESC, 'status' => SORT_DESC],
    ],
        'status'
      
    ],
]);
$dataProvider = new ActiveDataProvider([
    'query' => User::find(),
    'pagination' => [
        'pageSize' => 25,
    ],
    'sort' =>$sort
]);
echo $sort->link('name') . ' | ' . $sort->link('status');
/*echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'resizableColumns'=>true,
    'columns' => [
        [
            'class' => '\kartik\grid\CheckboxColumn'
        ]
    ],
    'toolbar' => [
        [
            'content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                    'type'=>'button',
                    //'title'=>Yii::t('kvgrid', 'Add Book'),
                    'class'=>'btn btn-success'
                ]) . ' '.
                Html::a('<i class="fas fa-redo"></i>', ['grid-demo'], [
                    'class' => 'btn btn-secondary',
                   // 'title' => Yii::t('kvgrid', 'Reset Grid')
                ]),
        ],
        '{export}',
        '{toggleData}'
    ]
]);*/
$gridColumns = [

        [
            'class' => '\kartik\grid\RadioColumn'
        ],

    ['class' => 'kartik\grid\SerialColumn'],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'name',
        'pageSummary' => 'Page Total',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'Name', 'size'=>'md',],

    
    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'email',
        'pageSummary' => 'Page Total',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'Name', 'size'=>'md',],


    ],
    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'photo',
        'pageSummary' => 'Page Total',
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
        'editableOptions'=>['header'=>'Name', 'size'=>'md',],


    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
      'attribute'=>'status',
        'vAlign'=>'middle',
        'group' => true,  // enable grouping,
        'groupedRow' => true,
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => true,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { return '#'; },
       // 'viewOptions'=>['title'=>$viewMsg, 'data-toggle'=>'tooltip'],
        //'updateOptions'=>['title'=>$updateMsg, 'data-toggle'=>'tooltip'],
        //'deleteOptions'=>['title'=>$deleteMsg, 'data-toggle'=>'tooltip'],
    ],
    ['class' => 'kartik\grid\CheckboxColumn']
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
   
    'toolbar' =>  [
        ['content'=>
            Html::button('&lt;i class="glyphicon glyphicon-plus">&lt;/i>', ['type'=>'button',
            'title'=>'Add Book', 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
            Html::a('&lt;i class="glyphicon glyphicon-repeat">&lt;/i>', ['grid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>'Reset Grid'])
        ],
        '{export}',
        '{toggleData}'
    ],
    'pjax' => true,
    'bordered' => true,
    'striped' => false,
    'condensed' => false,
    'responsive' => true,
    'hover' => true,
    'floatHeader' => true,
   // 'floatHeaderOptions' => ['top' => $scrollingTop],
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_PRIMARY
    ],
]);

$model = new ShopOptionType();

/** @var ZView $this */
//echo ZDynaWidgetJaxongir::widget([
//    'model' => $model,
//]);
