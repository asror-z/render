<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\inptest\ZMaterialCheckboxWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget2;
use zetsoft\widgets\inputes\ZKSwitchInputWidget3;

$model = new PlaceCountry();

echo ZKSwitchInputWidget3::widget([
    'model' => $model,
    'attribute' => 'name'
]);
echo ZKSwitchInputWidget3::widget([
    'model' => $model,
    'attribute' => 'alpha3'
]);
echo ZKSwitchInputWidget3::widget([
    'model' => $model,
    'attribute' => 'name'
]);


