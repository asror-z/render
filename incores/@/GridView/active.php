<?php


use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\helpers\Url;

echo GridView::widget([
    'id' => 'kv-grid-asset',
    'dataProvider' => new ArrayDataProvider([

            'allModels' => [
                [
                    'id' => 1,
                    'name' => 'Rfavbjsdkjnk',
                    'age' => '26',
                    'title' => 'Rav shban',
                ],
                [
                    'id' => 1,
                    'name' => 'Rfavbjsdkjnk',
                    'age' => '26',
                    'title' => 'Rav shban',
                ]
            ],

    ]),
    //'filterModel' => $searchModel,
    'columns' => [

                ['class' => 'kartik\grid\SerialColumn'],
                [
                    'attribute' => 'age',
                ],

                [
                    'attribute' => 'title',

                ],
                [
                    'class' => 'kartik\grid\ExpandRowColumn',
                    'detail' => function () {
                        return Yii::$app->controller->renderPartial('detail');
                    },
                ],
                [
                    'attribute' => 'name',
                ],

    ], // check the configuration for grid columns by clicking button above
    'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    'pjax' => true, // pjax is set to always true for this asset
    // set your toolbar
    'toolbar' =>  [
        [
            'content' =>
                Html::button('<i class="fas fa-plus"></i>', [
                    'class' => 'btn btn-success',
                    //'title' => Yii::t('kvgrid', 'Add Book'),
                    'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");'
                ]) . ' '.
                Html::a('<i class="fas fa-redo"></i>', ['grid-asset'], [
                    'class' => 'btn btn-outline-secondary',
                    //'title'=>Yii::t('kvgrid', 'Reset Grid'),
                    'data-pjax' => 0,
                ]),
            'options' => ['class' => 'btn-group mr-2']
        ],
        '{export}',
        '{toggleData}',
    ],
    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    // set export properties
    'export' => [
        'fontAwesome' => true
    ],
    // parameters from the asset form
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_PRIMARY,
    ],
    'persistResize' => false,
    'toggleDataOptions' => ['minCount' => 10],
    'itemLabelSingle' => 'book',
    'itemLabelPlural' => 'books'
]);
