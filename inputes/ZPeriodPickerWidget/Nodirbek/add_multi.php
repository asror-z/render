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


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'date_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidgetNodirbek::class,
                    'options' => [
                        'config' => [
                            'attr_start' => 'date_4',
                            'attr_end' => 'date_5',
                            'type'=> ZPeriodPickerWidgetNodirbek::type['multi_attr'],
                            'lang'=> ZPeriodPickerWidgetNodirbek::lang['en'],
                            'isCompactMode' => true,
                            'showDatepickerInputs'=> false,

                        ]
                    ]
                ],
            ]

        ],
    ]
]);


$this->activeEnd();



