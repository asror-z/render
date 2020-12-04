<?php


use kartik\grid\DataColumn;
use zetsoft\dbitem\data\FormDb;
use zetsoft\models\ALL\Lang;
use zetsoft\system\actives\ZActiveRecord;
use zetsoft\system\column\ZKDataColumn;
use zetsoft\system\column\ZKEditableColumn;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZDynaWidget;
use zetsoft\widgets\former\ZDynaWidgetNNew;
use zetsoft\widgets\inputes\ZKSelect2Widget;


$action->title = Azl . 'Список Переводы';
$action->icon = 'fa fa-film';

$model = new Lang();

$model->configs->columnID = false;
$model->configs->actionClone = false;
$model->configs->nameOn = [
     'af',
     'uz',
     'ru',
     'en',
];

/*

$model->column = [
    'af' => static function (FormDb $column) {

        $column->dbType = dbTypeText;
        $column->title = 'Af';

        return $column;
    },


    'sq' => static function (FormDb $column) {

        $column->dbType = dbTypeText;
        $column->title = 'Sq';

        return $column;
    },
];

*/


$model->configs->before = [
    'uz' => [
        'one' => [
            'class' => ZKDataColumn::class,
            'label' => 'label1',
            'value' => function (Lang $model, $key, $index, DataColumn $dataColumn) {
                return 'adad';
            }
        ],
        'two' => [
            'class' => ZKDataColumn::class,
            'label' => 'label2',
            'value' => function (Lang $model, $key, $index, DataColumn $dataColumn) {
                return 'adadsdfsdaf';
            }
        ],
    ],

    'ru' => [
        'one' => [
            'class' => ZKDataColumn::class,
            'label' => 'label1',
            'value' => function (Lang $model, $key, $index, DataColumn $dataColumn) {
                return $model->uz;
            }
        ],
        'two' => [
            'class' => ZKDataColumn::class,
            'label' => 'label2',
            'value' => function (Lang $model, $key, $index, DataColumn $dataColumn) {
                return $model->ru;
            }
        ],
    ],

];


?>


<>

<?

/** @var ZView $this */
echo ZDynaWidgetNNew::widget([
    'model' => $model,
    //  'names' => [],
    //  'namesEx' => [],
    //  'before' => [],
    //  'after' => [],
]);










