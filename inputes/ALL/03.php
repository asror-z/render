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
                    'widgetClass' => ZIconPickerWidget::class,
                    'options' => [
                        'config' => [
                            'type' => ZIconPickerWidget::type['divIconPicker'],
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHRadioButtonGroupWidget::class,
                    'options' => [
                        'data' => $data,
                        'config' => [
                            'hasIcon' => false,
                            'icon'=>'fas fa-user',
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHPasswordInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' =>'fas fa-'. FA::_USERS
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'text_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHTextareaWidget::class,
                    'options' => [
                        'config' => [
                            'rows' => 6,
                            'label' => 'My Label',
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS
                        ]
                    ]
                ],



            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZImageCheckboxWidget::class,
                    'options' => [
                        'config' => [

                        ]
                    ]
                ],



            ]
        ],
    ]
]);

$this->activeEnd();

