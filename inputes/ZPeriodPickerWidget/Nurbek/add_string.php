<?php

/**
 * @author NurbekMakhmudov
 */

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetNurbek;

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

//start|NurbekMakhmudov|2020-10-06

$model->configs->rules = validatorSafe;
$model->columns();

$items = $this->modelData();
$form = $this->activeBegin();

$this->modelSave($model);

echo  ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidget::class,
                    'options' => [
                        'config' => [
                            'string_value' => 'string_8',
                            'type'=> ZPeriodPickerWidget::type['string'],
                            'lang'=> ZPeriodPickerWidget::lang['ru'],
                            'isCompactMode' => false,
                        ]
                    ]
                ],
            ]

        ],

    ]
]);

$this->activeEnd();



//end|NurbekMakhmudov|2020-10-06
