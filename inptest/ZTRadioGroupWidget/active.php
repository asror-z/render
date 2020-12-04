<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZTRadioGroupWidget;

$this->title = "ZTRadioGroupWidget active";

$model = $this->modelGet(CoreInput::class, 14);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [     

                 // with default configs
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTRadioGroupWidget::class,
                    'options' => [
                        'data' => [
                         'uzb' => "Uzbekistan",
                         'usa' => "USA",
                         'rus' => "Russia",
                         'eng' => "England",
                        ],
                    ],
                ],

                // with custom configs
                
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTRadioGroupWidget::class,
                    'options' => [
                        'id' => 'region',
                        'config' =>[
                            'label' => "Select your region",
                            'type' => ZTRadioGroupWidget::Types['materiallike'],
                            /*Types: default || rounded || withtext || ioslike|| flat || materiallike*/

                            'size' => ZTRadioGroupWidget::Sizes['large'],
                            /*Sizes: large || middle || default || small */

                            'color' => ZTRadioGroupWidget::Colors['default'],
                            /*Colors: default || info  ||  danger  || warning */

                        ],

                        'data' => [
                            'tashkent' => "Tashkent",
                            'fergana' => "Fergana",
                            'andijan' => "Andijan",
                            'samarkand' => "Samarkand",
                        ],

                    ],
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

