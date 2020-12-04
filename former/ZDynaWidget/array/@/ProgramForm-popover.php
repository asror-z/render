<?php


use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\former\eyuf\RavshanForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\shop\ShopOrder;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\Az;
use zetsoft\system\column\ZEditableSweetColumn;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\column\ZKEditableColumn;
use zetsoft\system\helpers\ZArrayHelper;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZHInputWidget;


$models = ShopOrder::find()->asArray()->all();


$model = new ShopOrder();

function generateColumn($columnList, $model)
{
    $generate = [];

    foreach ($columnList as $attribute) {
        /*
                $generate[] = [
                    'classs' => ZEditableSweetColumn::class,
                    'attribute' => $attribute,
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
                ];

                */

        $generate[] = [
            'class' => 'kartik\grid\EditableColumn',
            'attribute' => $attribute,
            'pageSummary' => true,
            'readonly' => false,
            'editableOptions' => [
                'header' => 'Company',
                'inputType' => kartik\editable\Editable::INPUT_WIDGET,
                'widgetClass' => ZHInputWidget::class,
                /* 'options' => [
                     'config' => [
                         'formClass' => "zetsoft\\former\\shop\\SizeForm",
                     ]
                 ]*/

            ],
        ];

    }           
    return $generate;
}

$query = new ZArrayQuery();
$query->from($models);

echo DynaGrid::widget([
    'columns' => generateColumn($model->columnsList(), $model),
    'theme' => 'panel-info',
    'showPersonalize' => true,
    'userSpecific' => false,
    'dbUpdateNameOnly' => false,
    'enableMultiSort' => true,

    'allowPageSetting' => true,
    'allowThemeSetting' => true,
    'allowFilterSetting' => true,
    'allowSortSetting' => true,
    'matchPanelStyle' => true,


    'storage' => 'db',
    'gridOptions' => [
        'dataProvider' => new ArrayDataProvider([
            'allModels' => $query->all(),
            'sort' => [
                'attributes' => $model->columnsList(),
            ]
        ]),

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
    'options' => ['id' => 'dynagrid-1'] // a unique identifier is important
]);
