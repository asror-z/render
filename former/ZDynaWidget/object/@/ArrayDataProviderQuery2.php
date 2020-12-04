<?php
use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use kartik\sortable\Sortable;
use kop\y2sp\ScrollPager;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\former\eyuf\ProgramForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\assets\ZColor;
use zetsoft\system\Az;
use zetsoft\system\column\ZScrollPager;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZExportWidget;
use zetsoft\widgets\former\ZExportWidgetNew;
use zetsoft\widgets\notifier\ZModalNewWidget;
use zetsoft\widgets\themes\ZAdminCardWidget;

?>
<?php

$action->title = Azl . 'Статистика в формате стран по программам';

$model = new ProgramForm();

/** @var ZView $this */
$model->configs->filter = true;
$model->configs->pageSummary = true;

$models = Az::$app->App->eyuf->main->formByCountries($model);

$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'country',
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'masters',
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'doctors',
        ],

    ];



$query = new ZArrayQuery();
$query->from($models);

$fullExportMenu = ZExportWidget::widget([
    'model' => $model,
    'data' => $models,
    'config' => [
        'filename' => 'test3',
        'array' => true,
    ]
]);


$toolbar = '';
$pagers = [];
$summary = '{summary}';


echo DynaGrid::widget([
    'columns' => $columns,
    'theme' => 'panel-info',
    'showPersonalize' => true,
    'storage' => 'db',
    'gridOptions' => [
        'dataProvider' => new ArrayDataProvider([
            //'key'=>'id',
            'allModels' => $query->all(),
            //'sort' => [
//                'attributes' => ['id', 'name', 'email'],
//            ],
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
            ['content' => '{dynagridFilter}{dynagridSort}{dynagrid}'],
            '{export}' . $fullExportMenu,
        ]
    ],
    'options' => ['id' => 'dynagrid-1'] // a unique identifier is important
]);
    
?>
