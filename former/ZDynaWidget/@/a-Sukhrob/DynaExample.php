<?php

use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use zetsoft\models\user\User;
use kartik\helpers\Html;
use zetsoft\models\place\TestPlaceCountry;
use zetsoft\models\place\PlaceCountry;
use yii\data\ActiveDataprovider;
use zetsoft\widgets\former\ZDynaWidget;


$query = PlaceCountry::find()->indexBy('id'); // where `id` is your primary key
$dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pagesize' => 20 // in case you want a default pagesize
    ]
]);

$searchModel = new TestPlaceCountry();

$viewMsg = 'view';
$updateMsg = 'update';
$deleteMsg = 'delete';



$columns =
    [
        ['class'=>'kartik\grid\SerialColumn', 'order'=>DynaGrid::ORDER_FIX_LEFT],
        [
            'attribute'=>'name',
            'pageSummary'=>'Page Total',
            'vAlign'=>'middle',
            'order'=>DynaGrid::ORDER_FIX_LEFT
        ],
        [
            'attribute'=>'color',
            'value'=>function ($model, $key, $index, $widget) {
                return "<span class='badge' style='background-color: {$model->color}'> </span>  <code>" .
                    $model->color . '</code>';
            },
            'filterType'=>GridView::FILTER_COLOR,
            'filterWidgetOptions'=>[
                'showDefaultPalette'=>false,
                'pluginOptions'=>[
                    'showPalette'=>true,
                    'showPaletteOnly'=>true,
                    'showSelectionPalette'=>true,
                    'showAlpha'=>false,
                    'allowEmpty'=>false,
                    'preferredFormat'=>'name',
                    'palette'=>[
                        [
                            "white", "black", "grey", "silver", "gold", "brown",
                        ],
                        [
                            "red", "orange", "yellow", "indigo", "maroon", "pink"
                        ],
                        [
                            "blue", "green", "violet", "cyan", "magenta", "purple",
                        ],
                    ]
                ],
            ],
            'vAlign'=>'middle',
            'format'=>'raw',
            'width'=>'150px',
            'noWrap'=>true
        ],
        [
            'attribute'=>'publish_date',
            'filterType'=>GridView::FILTER_DATE,
            'format'=>'raw',
            'width'=>'170px',
            'filterWidgetOptions'=>[
                'pluginOptions'=>['format'=>'yyyy-mm-dd']
            ],
            'visible'=>false,
        ],
        [
            'attribute'=>'author_id',
            'vAlign'=>'middle',
            'width'=>'250px',
            'value'=>function ($model, $key, $index, $widget) {
                return Html::a($model->author->name, '#', [
                    'title'=>'View author detail',
                    'onclick'=>'alert("This will open the author page.\n\nDisabled for this demo!")'
                ]);
            },
            'filterType'=>GridView::FILTER_SELECT2,
            'filter'=>ArrayHelper::map(PlaceCountry::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Any author'],
            'format'=>'raw'
        ],
        [
            'attribute'=>'buy_amount',
            'hAlign'=>'right',
            'vAlign'=>'middle',
            'width'=>'100px',
            'format'=>['decimal', 2],
            'pageSummary'=>true
        ],
        [
            'attribute'=>'sell_amount',
            'vAlign'=>'middle',
            'hAlign'=>'right',
            'width'=>'100px',
            'format'=>['decimal', 2],
            'pageSummary'=>true
        ],
        [
            'class'=>'kartik\grid\BooleanColumn',
            'attribute'=>'status',
            'vAlign'=>'middle',
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
$dynagrid = DynaGrid::begin([
    'columns' => $columns,
    'theme'=>'panel-success',
    'showPersonalize'=>true,
    'storage' => 'db',
    'gridOptions'=>[
        'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'showPageSummary'=>true,
        'floatHeader'=>true,
        'pjax'=>true,
        'responsiveWrap'=>false,
        'panel'=>[
            'heading'=>'<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
            'before' =>  '<div><em>* The table header sticks to the top in this demo as you scroll</em></div>',
            'after' => false
        ],
        'toolbar' =>  [
            ['content'=>
                Html::button('<i class="fas fa-plus"></i>', ['type'=>'button', 'title'=>'Add Book', 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
                Html::a('<i class="fas fa-repeat"></i>', ['dynagrid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-outline-secondary', 'title'=>'Reset Grid'])
            ],
            ['content'=>'{dynagridFilter}{dynagridSort}{dynagrid}'],
            '{export}',
        ]
    ],
    'options'=>['id'=>'dynagrid-1'], // a unique identifier is important
    'userSpecific' => false,
    'showFilter' => true,
]);
if (substr($dynagrid->theme, 0, 6) == 'simple') {
    $dynagrid->gridOptions['panel'] = false;
}
DynaGrid::end();


