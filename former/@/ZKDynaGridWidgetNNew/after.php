<?php


use kartik\grid\DataColumn;
use zetsoft\dbitem\data\Form;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\ALL\Lang;
use zetsoft\models\user\User;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetNew;
use zetsoft\widgets\former\ZDynaWidgetNNew;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\navigat\ZDownloadWidget;


$action->title = Azl . 'Список Users';
$action->icon = 'fa fa-film';

$model = new User();

$model->configs->columnID = true;
$model->configs->actionClone = true;
$model->configs->nameOnEx = [
    'photo'
];
$model->configs->after = [
    'title' => [
        [
            'class' => ZKDataColumn::class,
            'label' => 'Download',
            'value' => function (User $model, $key, $index, DataColumn $dataColumn) {
                return ZDownloadWidget::widget([
                    'model' => $model->id,
                    'attribute' => 'photo'
                ]);
            }
        ],

    ]

];


/** @var ZView $this */
echo ZDynaWidgetNew::widget([
    'model' => $model,
]);










