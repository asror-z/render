<?php

/**
 * @author NurbekMakhmudov
 */

use kartik\builder\Form;
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
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDateRangePickerWidget::class,
                    'options' => [
                        'config' => [
                            'attributeStart' => 'string_4',
                            'attributeEnd' => 'string_5',
                            'type'=> ZDateRangePickerWidget::type['multi_attr'],
                        ]
                    ]
                ],
            ]

        ],
    ]
]);


$this->activeEnd();


//end|NurbekMakhmudov|2020-10-09
