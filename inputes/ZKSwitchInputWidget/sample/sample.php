<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

use kartik\builder\Form;
use zetsoft\models\place\PlaceCountry;
use zetsoft\widgets\inptest\ZMaterialCheckboxWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZKColorInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget2;

$model = new PlaceCountry();

echo ZKSwitchInputWidget2::widget([
    'model' => $model,
    'attribute' => 'alpha3'
]);
echo ZKSwitchInputWidget2::widget([
    'model' => $model,
    'form' => $form,
    
]);


