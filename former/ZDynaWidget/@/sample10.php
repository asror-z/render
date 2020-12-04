<?php

use zetsoft\models\test\Test5;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZDynaWidget10;

$model = new Test5();
$model->configs->nameOn = [
    'first_name',

];

echo ZDynaWidget10::widget([
    'model' => $model,
]);
