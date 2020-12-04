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

//Az::$app->forms->procs->post(false);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidgetNodirbek::class,
                    'options' => [
                        'config' => [
                            'value' => 'jsonb_4',
                            'type'=> ZPeriodPickerWidgetNodirbek::type['json'],
                            'lang'=> ZPeriodPickerWidgetNodirbek::lang['ru'],
                            'isCompactMode' => false,
                        ]
                    ]
                ],
            ]

        ],

    ]
]);

$this->activeEnd();



