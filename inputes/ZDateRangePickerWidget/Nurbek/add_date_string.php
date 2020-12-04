<?php

/**
 * @author NurbekMakhmudov
 */

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZDateRangePickerWidgetNurbek;
use zetsoft\widgets\inputes\ZDateRangePickerWidget;

//start|NurbekMakhmudov|2020-10-09

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

$model->configs->rules = validatorSafe;
$model->columns();

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDateRangePickerWidget::class,
                    'options' => [
                        'config' => [
                            'string_value' => 'string_6',
                            'type'=> ZDateRangePickerWidget::type['string'],
                        ]
                    ]
                ],
            ]

        ],
    ]
]);


$this->activeEnd();

//end|NurbekMakhmudov|2020-10-09

