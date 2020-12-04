<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\cards\ZMCard1Widget;
use zetsoft\widgets\cards\ZMiniCardWidget;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZImageCheckboxGroupWidget;
use zetsoft\widgets\inputes\ZRadioGroupWidget;
use zetsoft\widgets\themes\ZCardWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

// start|MuminovUmid|2020-10-09
$model->configs->rules = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];
// end|MuminovUmid|2020-10-09

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZRadioGroupWidget::class,
                    'options' => [

                        'data' => [
                            'one' => '<img src="https://picsum.photos/seed/1/100" />',
                            'two' => '<img src="https://picsum.photos/seed/2/100" />',
                            'three' => '<img src="https://picsum.photos/seed/3/100" />',
                            4 => '<img src="https://picsum.photos/seed/4/100" />',
                            'five' => ZMiniCardWidget::widget(),
                        ],

                        'config' => [
                            //'radio' => true,
                        ]
                    ],
                ],
            ]
        ],
    ]
]);
$this->activeEnd();

