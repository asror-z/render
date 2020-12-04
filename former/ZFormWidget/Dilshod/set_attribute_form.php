<?php

use zetsoft\former\test\TestDilshodForm;
use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\former\ZFormWidget;

$model = new TestDilshodForm();

$arr = [
    'name' => 'ef',
    'title' => 'sf',
    'date' => '10-12-2020'
];

$model->setAttributes($arr);

echo ZFormWidget::widget([
    'model' => $model
]);
