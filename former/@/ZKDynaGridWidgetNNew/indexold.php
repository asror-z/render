<?php


use kartik\grid\ExpandRowColumn;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\helpers\ZUrl;
use zetsoft\widgets\former\ZDynaWidgetOne;
use zetsoft\widgets\former\ZDynaWidget;
use kartik\dynagrid\DynaGrid;
use kartik\grid\EditableColumn;
use yii\data\ActiveDataProvider;
use function foo\func;


$columns =
    [
        ['class' => 'kartik\grid\SerialColumn'],
        [
            'class' => ExpandRowColumn::class,
            'detailRowCssClass' => GridView::TYPE_DEFAULT,
            'value' => function ($model, $key, $index) {
                return GridView::ROW_COLLAPSED;
            },
            /*'detail' => function(){
                return 'Hello !!!';
            }*/
            'detailUrl' => ZUrl::to(['detail']),

        ],

        [
            'attribute' => 'publish_date',
            'filterType' => GridView::FILTER_DATE,
            'format' => 'raw',
            'width' => '170px',
            'filterWidgetOptions' => [
                'pluginOptions' => ['format' => 'yyyy-mm-dd']
            ],
            'visible' => false,
        ],

        [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => 'name',
            'vAlign' => 'middle',
        ],
        [
            'class' => 'kartik\grid\DataColumn',
            'attribute' => 'code',
            'vAlign' => 'middle',
        ],
        [
            'class' => 'kartik\grid\ActionColumn',
            'dropdown' => false,
            'urlCreator' => function ($action, $model, $key, $index) {
                return '#';
            },


        ],
        ['class' => 'kartik\grid\CheckboxColumn',],
    ];
$dynagrid = DynaGrid::begin([
    'columns' => $columns,
    'theme' => 'panel-info',
    'showPersonalize' => true,
    'storage' => 'db',
    'gridOptions' => [
        'dataProvider' => $provider,
        'filterModel'=>$form,
        'showPageSummary' => true,
        'floatHeader' => true,
        'pjax' => true,
        'responsiveWrap' => false,
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
            'before' => '<div style="padding-top: 7px;"><em>* The table header sticks to the top in this asset as you scroll</em></div>',
            'after' => false
        ],
        'toolbar' => [
            [
                'content' =>
                    ZHTML::a('<i class="fas fa-plus"></i>',
                        ['create'],
                        [
                            'class' => 'btn btn-success',
                            'title' => Az::l('Добавить'),
                        ]) .
                    ZHTML::a('<i class="fas fa-redo"></i>',
                        ['index'],
                        [
                            'id' => "dyna_Grid_Reset",
                            'data-pjax' => 1,
                            'class' => 'btn btn-secondary',
                            'title' => Az::l('Перезагрузить'),
                        ]) .
                    ZHTML::a('<i class="fas fa-trash-alt"></i>',
                        ['delete-all'],
                        [
                            'id' => "deleteAll",
                            'data-pjax' => 1,
                            'class' => 'btn btn-danger',
                            'title' => Az::l('Удалить Все'),
                        ]) .
                    ZHTML::a('<i class="fas fa-copy"></i>',
                        ['clone-all'],
                        [
                            'id' => "cloneAll",
                            'data-pjax' => 1,
                            'class' => 'btn btn-warning',
                            'title' => Az::l('Клонировать Все'),
                        ]),
                'options' => ['class' => 'btn-group mr-2']
            ],
            [
                'content' => '{dynagridFilter}{dynagridSort}{dynagrid}',
                'options' => ['class' => 'btn-group mr-2']
            ],
            [
                'content' => '{export}',
                'options' => ['class' => 'btn-group mr-2']
            ],
            [
                'content' => '{toggleData}',
                'options' => ['class' => 'btn-group mr-2']
            ],

            'toggleDataContainer' => ['class' => 'btn-group mr-2'],
            'exportContainer' => ['class' => 'btn-group mr-2']
        ],
    ],
    'options' => ['id' => 'dynagrid_12'] // a unique identifier is important
]);
/*if (substr($dynagrid->theme, 0, 6) == 'simple') {
    $dynagrid->gridOptions['panel'] = false;
}*/
DynaGrid::end();








