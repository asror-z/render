<?php

use zetsoft\system\Az;
use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();

$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZClockPickerWidget::class,
                    'options' => [
                    'data' => $items,
                        'config'=> [
                            'hasIcon' => true
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

