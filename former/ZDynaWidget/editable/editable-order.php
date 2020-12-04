<?php


use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\column\ZEditableSweetColumn;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\widgets\former\ZExportWidgetNew;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHInputWidget;


$models = ShopOrder::find()->asArray()->all();


$model = new ShopOrder();

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
            'attribute' => 'name',
        ],
        [
            'class' => ZEditableSweetColumn::class,
            'attribute' => 'name',
            'model' => $model,
            'pageSummary' => true,
            'readonly' => false,
            'widgetClass' => ZHInputWidget::class,
            'widgetOptions' => ZArrayHelper::merge([], [
                'grapesWrap' => false,
                'config' => [
                    'readonly' => false,
                    'isDepend' => true,
                    'grapes' => false,
                ]
            ]),

        ],

    ];


echo GridView::widget([
    'columns' => $columns,
    /*    'storage' => 'db',*/
    'dataProvider' => new ArrayDataProvider([
        //   'key'=>'id',
        'allModels' => $models,
        /*      'sort' => [
                  'attributes' => ['id', 'name', 'email'],
              ],*/
    ]),
    'filterModel' => $model,
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
        ['content' =>
            Html::button('<i class="fas fa-plus"></i>', ['type' => 'button', 'title' => 'Add Book', 'class' => 'btn btn-success', 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this asset!");']) . ' ' .
            Html::a('<i class="fas fa-repeat"></i>', ['dynagrid-asset'], ['data-pjax' => 0, 'class' => 'btn btn-outline-secondary', 'title' => 'Reset Grid'])
        ],
        [
            'content' => '{dynagridFilter}{dynagridSort}{dynagrid}'
        ],
        '{export}',
    ]

]);
