<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKSliderIonWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderIonWidget::class,
                    'options' => [
                        'config' => [
                            'type' => 'double',
                            'skin' => 'modern',
                            'min' => 100,
                            'max' => 200,
                            'from' => 1,
                            'to' => 111,
                            'postfix' => '$',
                            'inputs_show' => true,
                        ],

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderIonWidget::class,
                    'options' => [
                        'config' => [
                            'type' => 'double',
                            'skin' => 'modern',
                            'min' => 100,
                            'max' => 200,
                            'from' => 1,
                            'to' => 111,
                            'postfix' => '$',
                            'inputs_show' => true,
                        ],

                    ],
                ],
            ]
        ],
    ],
    ]);

$this->activeEnd();
