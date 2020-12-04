<?php

/**
 * @author NurbekMakhmudov
 */

use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetNurbek;

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

//start|NurbekMakhmudov|2020-10-05



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
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidget::class,
                    'options' => [
                        'config' => [
                            'value' => 'jsonb_4',
                            'type'=> ZPeriodPickerWidget::type['json'],
                            'timepicker'=> true,
                        ]
                    ]
                ],
            ]

        ],

    ]
]);

$this->activeEnd();


//end|NurbekMakhmudov|2020-10-05

