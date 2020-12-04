<?php


use kartik\grid\GridView;
use kartik\helpers\Html;
use yii\data\ActiveDataProvider;
use zetsoft\models\libra\User;
use zetsoft\models\libra\Library;
use zetsoft\widgets\places\ZJqvMaps;



$query = Library::find()->select(['id', 'name', 'phone', 'image']);


$dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ],
]);


$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],


    [
        'class' => 'kartik\grid\EditableColumn',
        'attribute' => 'name',
        'pageSummary' => 'Page Total',
        'vAlign' => 'middle',
        'headerOptions' => ['class' => 'kv-sticky-column'],
        'contentOptions' => ['class' => 'kv-sticky-column'],
        'editableOptions' => ['header' => 'Name', 'size' => 'md']
    ],
    'id',
    [
        'class' => 'kartik\grid\BooleanColumn',
        'attribute' => 'image',
        'vAlign' => 'middle',
    ],
    'phone',
    'image:image',

    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => true,
        'vAlign' => 'middle',

    ],
    ['class' => 'kartik\grid\CheckboxColumn']

];


echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],


        [
            'class' => 'kartik\grid\EditableColumn',
            'attribute' => 'name',
            'pageSummary' => 'Page Total',
            'vAlign' => 'middle',
            'headerOptions' => ['class' => 'kv-sticky-column'],
            'contentOptions' => ['class' => 'kv-sticky-column'],
            'editableOptions' => ['header' => 'Name', 'size' => 'md']
        ],


        [
            'class' => 'kartik\grid\ZetsoftColumn',
            'attribute' => 'created_at',
        ],


        [

            'class' => 'yii\grid\DataColumn',
            'attribute' => 'phone',
            'format' => 'text',
            'header' => '<a href="#">Test <br> Header</a>',
            'footer' => '<a href="#">Test <br> Footer</a>',

            'visible' => true,
            'content' => function ($data) {
                return $data->phone;
            }
        ],


        ['class' => 'kartik\grid\ActionColumn',
            'dropdown' => true,
            'vAlign' => 'middle',

        ],
        ['class' => 'kartik\grid\CheckboxColumn']
    ],

    'responsive' => true,
    'hover' => true,

]);


echo GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'beforeHeader' => [
        [
            'columns' => [
                ['content' => 'Header Before 1', 'options' => ['colspan' => 4, 'class' => 'text-center warning']],
                ['content' => 'Header Before 2', 'options' => ['colspan' => 4, 'class' => 'text-center warning']],
                ['content' => 'Header Before 3', 'options' => ['colspan' => 3, 'class' => 'text-center warning']],
            ],
            'options' => ['class' => 'skip-export'] // remove this row from export
        ]
    ],
    'toolbar' => [
        ['content' =>
            Html::button('&lt;i class="glyphicon glyphicon-plus">&lt;/i>', ['type' => 'button', 'title' => Yii::t('kvgrid', 'Add Book'), 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");']) . ' ' .
            Html::a('&lt;i class="glyphicon glyphicon-repeat">&lt;/i>', ['grid-asset'], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => Yii::t('kvgrid', 'Reset Grid')])
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
    //'floatHeader' => true,
    //'floatHeaderOptions' => ['top' => $scrollingTop],
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_PRIMARY
    ],
]);
