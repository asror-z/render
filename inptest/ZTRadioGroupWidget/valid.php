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
$model->configs->rulesAll = [
    [validatorRequired]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTRadioGroupWidget::class,
                    'options' => [

                        // 'id' => 'country',
                        'config' =>[
                            'label' => "Select your country",
                            'type' => ZTRadioGroupWidget::Types['flat'],
                            /*Types: default || rounded || withtext || ioslike|| flat || materiallike*/

                            'size' => ZTRadioGroupWidget::Sizes['middle'],
                            /*Sizes: large || middle || default || small */

                            'color' => ZTRadioGroupWidget::Colors['info'],
                            /*Colors: default || info  ||  danger  || warning */

                        ],

                        'data' => [
                         'uzb' => "Uzbekistan",
                         'usa' => "USA",
                         'rus' => "Russia",
                         'eng' => "England",
                        ],

                    ],
                ],

            ]
        ]
    ]
]);

$this->activeEnd();

