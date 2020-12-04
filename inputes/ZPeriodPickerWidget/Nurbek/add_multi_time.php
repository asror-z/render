<?php

/**
 * @author NurbekMakhmudov
 */

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetNurbek;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

//start|NurbekMakhmudov|2020-10-05

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
                'text_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidget::class,
                    'options' => [
                        'config' => [
                            'attr_start' => 'text_1',
                            'attr_end' => 'text_2',
                            'type'=> ZPeriodPickerWidget::type['multi_attr'],
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

