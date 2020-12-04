<?php


use kartik\dynagrid\DynaGrid;
use kartik\grid\DataColumn;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\debug\components\search\Filter;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zetsoft\former\eyuf\RavshanForm;
use zetsoft\former\eyuf\RavshanForm_2;
use zetsoft\former\libra\Data;
use zetsoft\models\place\PlaceCountry;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\helpers\ZArrayHelper;


/*
$data = [];

$model = new RavshanForm_2();
$form = clone $model;

$form->title = 'ssssssssss';
$form->name = 78777;
$data[] = $form;

$form = clone $model;
$form->title = 'aaaaaaaa';
$form->password = 999999;
$data[] = $form;

$form = clone $model;
$form->title = 'eeeeeeeee';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = '2222';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = '2222';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = '2222';
$form->password = 444444444;
$data[] = $form;

$form = clone $model;
$form->title = 'aaaaaaaa';
$form->password = 1234;
$data[] = $form;*/

/*

$query = new ZArrayQuery();
$query->from($data);

$query->filterWhere([
    'password' => 444444444
]);*/


function generateColumn($columnList)
{
    $generate = [];

    foreach ($columnList as $attribute) {
        $generate[] = [
            'class' => DataColumn::class,
            'attribute' => $attribute,
        ];

    }
    return $generate;

}

$data = new RavshanForm_2();
$provider = $data->search(Yii::$app->request->get());


echo DynaGrid::widget([
    'columns' => [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'email',
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'name',
        ],
    ],
    'theme' => 'panel-info',
    'showPersonalize' => true,
    'storage' => 'session',
    'gridOptions' => [
        'dataProvider' => new ArrayDataProvider([
            'allModels' => $data->getData(),
            'sort' => [
                'attributes' => ['id', 'name', 'code'],
            ],
        ]),
        'filterModel' => $data,
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
