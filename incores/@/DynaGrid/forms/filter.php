<?php

use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use yii\helpers\Html;
use zetsoft\former\eyuf\RavshanForm_3;
use zetsoft\former\libra\Data;
use zetsoft\former\libra\Data_2;


$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
        ],

        [
            'class' => DataColumn::class,
            'attribute' => 'name',

        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'text',

        ],

    ];


$filter = new RavshanForm_3();
$provider = $filter->search();

echo DynaGrid::widget([

    'columns' => $columns,

    'theme' => 'panel-info',
    'showPersonalize' => true,
    'storage' => 'session',
    'gridOptions' => [
        'dataProvider' => $provider,
        'filterModel' => $filter,
        'showPageSummary' => true,
        'floatHeader' => false,
        'pjax' => true,
        'responsiveWrap' => false,
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="fas fa-book"></i>  Library</h3>',
            'before' => '<div style="padding-top: 7px;"><em>* The table header sticks to the top in this asset as you scroll</em></div>',
            'after' => false
        ],
        'toolbar' => [
            ['content' =>
                Html::button('<i class="fas fa-plus"></i>', ['type' => 'button', 'title' => 'Add Book', 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");']) . ' ' .
                Html::a('<i class="fas fa-repeat"></i>', ['dynagrid-asset'], ['data-pjax' => 0, 'class' => 'btn btn-outline-secondary', 'title' => 'Reset Grid'])
            ],
            ['content' => '{dynagridFilter}{dynagridSort}{dynagrid}'],
            '{export}',
        ]
    ],
    'options' => ['id' => 'dynagrid-1']
]);
