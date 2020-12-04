<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget1;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */
/*$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);*/

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);
/*$model->configs->rulesAll = [
    [
        validatorInteger
    ]
];*/

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [

        [
            'attributes' => [       // 2 column layout
                'int_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckRadioListWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS
                        ],

                    ],
                ],

            ]
        ],
       /* [
            'attributes' => [       // 2 column layout
                'jsonb_3' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCKeditorJsWidget1::class,
                    'options' => [
                        'config' => [
                            'data' => $items,
                        ],
                        'layout' => [],
                    ],
                ),

            ]
        ],*/
        [
            'attributes' => [
                'text_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCKEditorWidget::class,
                    'options' => [
                        'data' => $items,
                    ]
                ],
            ]

        ],
        [
            'attributes' => [
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZClockPickerWidget::class,
                    'options' => [
                        'data' => $items,
                        'config'=> [
                            'hasIcon' => true
                        ]
                    ]
                ],
            ]

        ],
        [
            'attributes' => [
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFileInputWidget::class,
                    'options'=>[
                        'config' => [
                            'placeholder'=>'json_2  2',
                            'hasIcon' => true,
                            'icon'=>'fas fa-user'

                        ]
                    ],
                ],
            ]
        ],
    ]
]);

$this->activeEnd();




