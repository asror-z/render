<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKSliderIonWidget;


$model = $this->modelGet(CoreInput::class, 8);
/** @var ZView $this */

echo ZKSliderIonWidget::widget([
    'value' => ['3666', '5000'],
    'config' => [
        'type' => ZKSliderIonWidget::type['double'],
        'min' => 1000,
        'max' => 7000,
    ]
]);
