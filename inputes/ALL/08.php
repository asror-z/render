<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;
use zetsoft\widgets\inputes\ZMultiJsWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZPrettyCheckboxWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$data  = Az::$app->forms->modelz->data();
$items = Az::$app->forms->modelz->data();
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
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTypeaheadWidget::class,
                    'options' => [
                        'config' => [
                            'local' => $data,
                            'limit' => 5,
                            'hasIcon' => false,
                            'icon' => 'fas fa-'. FA::_USERS
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiJsWidget::class,
                    'options' => [
                        'data' => $data = [
                            'PHP' => 'PHP',
                            'Phyton' => 'Phyton',
                            'C#' => 'C#',
                            'GoLang' => 'GoLang',
                            'JavaScript' => 'JavaScript',
                            'Vue.js' => 'Vue.js',
                            'AngularJs' => 'AngularJs',
                        ],
                        'config' => [
                            'multiple' => true,
                        ],
                    ],
                ],
            ],
        ],

        /*[
         'attributes' => [
             'jsonb_3' => [
                 'type' => Form::INPUT_WIDGET,
                 'widgetClass' => ZPeriodPickerWidget::class,
                 'options' => [
//                        'config' => [
//
//                        ],

                 ]
             ],
         ]

     ],*/
        [
            'attributes' => [

                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPrettyCheckboxWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => false,
//                        'icon'=>'fas fa-user'
                        ]
                    ]
                ],

            ]
        ],

        [
            'attributes' => [

                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZRadioButtonGroup::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => false,
                            'icon'=>'fas fa-user'
                        ],
                        'data' => [
                            '1111',
                            '2222',
                            '3333',
                            '4444'
                        ],
                    ]
                ],

            ]
        ],




    ]
]);

$this->activeEnd();

