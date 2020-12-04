<?php

use zetsoft\system\Az;
use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZInputLatinWidget;


$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */

$model->configs->rules = [
    [
        'zetsoft\\system\\validate\\ZRequiredValidator'
    ],
    [
        validatorEmail
    ],

];
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
        'model' => $model,
        'form' => $form,
        'rows' => [
            [
                'attributes' => [
                    'string_1' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZInputUniverseWidget::class,
                        'options' => [
                            'config' => [
                                'type' => ZInputUniverseWidget::type['number'],
                            ]
                        ]
                    ]
                ],
            ]

        ],


    ]
);

$this->activeEnd();

