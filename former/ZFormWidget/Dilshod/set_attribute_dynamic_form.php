<?php

use zetsoft\dbitem\data\ALLApp;
use zetsoft\dbitem\data\Form;
use zetsoft\former\test\TestDilshodForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;

$app = new ALLApp();

$column = new Form();
$column->dbType = dbTypeDate;
$column->widget = ZKDatepickerWidget::class;

$app->columns['date'] = $column;

$model = Az::$app->forms->former->model($app);

$arr = [
    'date' => '10-02-2020'
];

$model->setAttributes($arr);

echo ZFormWidget::widget([
    'model' => $model
]);
