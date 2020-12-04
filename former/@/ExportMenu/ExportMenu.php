<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */


use kartik\export\ExportMenu;
use kartik\grid\GridView;
use kartik\helpers\Html;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZExportWidget;

$model = new User();
$dataProvider = $model->search();
$dataProvider->pagination = [
    'pageSize' => 10,
];

/*$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'name',
    'role',
];        */


/*echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
]);  */

/**************************/

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    'id',
    'name',
    [
        'attribute'=>'role',
        'label'=>'Role',
        'vAlign'=>'middle',
        'width'=>'190px',
        'value'=>function ($model, $key, $index, $widget) {
            return Html::a($model->role, '#', []);
        },
        'format'=>'raw'
    ],
    'email',
    'phone',
    'password',
    //['attribute'=>'buy_amount','format'=>['decimal',2], 'hAlign'=>'right', 'width'=>'110px'],
    //['attribute'=>'sell_amount','format'=>['decimal',2], 'hAlign'=>'right', 'width'=>'110px'],
    ['class' => 'kartik\grid\ActionColumn', 'urlCreator'=>function(){return '#';}]
];



$fullExportMenu = ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'target' => ExportMenu::TARGET_BLANK,
    'pjaxContainerId' => 'kv-pjax-container',
    'exportContainer' => [
        'class' => 'btn-group mr-2'
    ],
    'dropdownOptions' => [
        'label' => 'Full',
        'class' => 'btn btn-secondary',
        'itemsBefore' => [
            '<div class="dropdown-header">Export All Data</div>',
        ],
    ],
]);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'pjax' => true,
    'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
    'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="fas fa-book"></i> Library</h3>',
    ],
    // set a label for default menu
    'export' => [
        'label' => 'Page',
    ],
    'exportContainer' => [
        'class' => 'btn-group mr-2'
    ],
    // your toolbar can include the additional full export menu
    'toolbar' => [
        '{export}',
        $fullExportMenu,
        [
            'content'=>
                Html::button('<i class="fas fa-plus"></i>', [
                    'class' => 'btn btn-success',
                    'title' => Yii::t('kvgrid', 'Add Book'),
                    'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");'
                ]) . ' '.
                Html::a('<i class="fas fa-redo"></i>', ['grid-asset'], [
                    'class' => 'btn btn-outline-secondary',
                    'title'=>Yii::t('kvgrid', 'Reset Grid'),
                    'data-pjax' => 0,
                ]),
            'options' => ['class' => 'btn-group']
        ],
    ]
]);
