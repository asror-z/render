<?php

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetNodirbek;

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

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
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidgetNodirbek::class,
                    'options' => [
                        'config' => [
                            'string_value' => 'string_1',
                            'type'=> ZPeriodPickerWidgetNodirbek::type['string'],
                            'lang'=> ZPeriodPickerWidgetNodirbek::lang['en'],
                            'isCompactMode' => false,
                        ]
                    ]
                ],
            ]

        ],

    ]
]);

$this->activeEnd();



