<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxGroupWidgetM2;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxGroupWidgetM3;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxWidgetM;

$model = $this->modelGet(CoreInput::class, 7);

$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZBootstrapImgCheckboxGroupWidgetM2::class,
                    'options' => [
                        'event' => [
                            'change' => <<<JS
        function() {
            $('#secondaryCoreInput').submit()        
        }
JS,
                        ]
                    ],
                ],
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZBootstrapImgCheckboxGroupWidgetM2::class,
                    'options' => [
                        'event' => [
                            'change' => <<<JS
        function() {
            $('#secondaryCoreInput').submit()        
        }
JS,
                        ]
                    ],
                ],
            ]
        ],
    ]
]);



$this->activeEnd();
