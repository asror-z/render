<?php


use kartik\grid\DataColumn;
use yii\data\ArrayDataProvider;
use zetsoft\dbitem\data\FormDb;
use zetsoft\former\eyuf\RavshanForm;
use zetsoft\models\ALL\Lang;
use zetsoft\models\user\User;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\actives\ZArrayQuery;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\column\ZKEditableColumn;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetNNew;
use zetsoft\widgets\inputes\ZKSelect2Widget;


$models = [];

$model = new RavshanForm();
$model->title = 'ssssssssss';
$model->name = 78777;
$models[] = $model;

$model = new RavshanForm();
$model->title = 'aaaaaaaa';
$model->password = 999999;
$models[] = $model;

$model = new RavshanForm();
$model->title = 'eeeeeeeee';
$model->password = 444444444;
$models[] = $model;

$model = new RavshanForm();
$model->title = 'aaaaaaaa';
$model->password = 1234;
$models[] = $model;


$query = new ZArrayQuery();
$query->from($models);

// adjust the query by adding the filters
$query->andFilterWhere([
    'password' => 1234
]);



$columns =
    [
        [
            'class' => DataColumn::class,
            'attribute' => 'password',
            'vAlign' => 'middle',
            'hAlign' => 'center',
            'width' => '120px',
            'pageSummary' => true,
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'email',
            'vAlign' => 'middle',
            'hAlign' => 'center',
            'width' => '120px',
            'pageSummary' => true,
        ],
        [
            'class' => DataColumn::class,
            'attribute' => 'name',
            'vAlign' => 'middle',
            'hAlign' => 'center',
            'width' => '120px',
            'pageSummary' => true,
        ],
    ];

/** @var ZView $this */
echo ZDynaWidgetNNew::widget([
    'columns' => $columns,
    'provider' => new ArrayDataProvider([
        'allModels' => $query->indexBy('id')->all(),
        'sort' => [
            'attributes' => ['id', 'name', 'email'],
        ]
    ]),
]);










