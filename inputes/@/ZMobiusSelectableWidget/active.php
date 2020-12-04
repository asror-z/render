<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZBootstrapImgCheckboxWidgetM;
use zetsoft\widgets\inputes\ZSelectableWidget;

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
                    'widgetClass' => \zetsoft\widgets\inputes\ZMobiusSelectableWidget3::class,
                    'options' => [

                        'data' =>
                        [
                            "<img src='http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png' alt='asd'>"
                        ],

                        'config' =>
                        [
                          'contentText' => 'Hi',
                          
                        ]

                    ],

                ],
            ]
        ],
    ]
]);



$this->activeEnd();
