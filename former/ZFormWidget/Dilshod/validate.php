<?php

use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\former\ZFormWidget;

$model = new PlaceCountry();
$model->configs->rules = 'zetsoft\\system\\validate\\ZRequiredValidator';

$model->columns();

echo ZFormWidget::widget([
    'model' => $model
]);
