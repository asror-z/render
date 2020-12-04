<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZPeriodPickerSingleWidget2;

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

$model->configs->rules = validatorSafe;
$model->columns();

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

//Az::$app->forms->procs->post(false);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'json_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerSingleWidget2::class,
                    'options' => [
                        'config' => [
                            'type'=> ZPeriodPickerSingleWidget2::type['json']
                        ]
                    ]
                ],
            ]

        ],

    ]
]);


$this->activeEnd();

