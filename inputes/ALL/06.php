<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZjQueryCustomCaretWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKDateRangePickerWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKDepDropWidget;
use zetsoft\widgets\inputes\ZKNumberWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKRangeInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

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
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatepickerWidget::class,
                    'options' => [
                        'value' => '23-Feb-1982',
                        'config'=>[
                            'autoclose'=>true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ],

                ],
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDateRangePickerWidget::class,
                    'options' => [
                        'config' => [
                            'attributeStart' => 'string_4',
                            'attributeEnd' => 'string_4',
                            'hasIcon' => false,
                            'icon' => 'fas fa-' . FA::_USERS,
                        ]
                    ]
                ],

            ]
        ],
        [
            'attributes' => [
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDateTimePickerWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasPlace' => true
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'int_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKNumberWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS,
                        ]
                    ]
                ],
            ]

        ],
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKPasswordInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS
                        ]
                    ]
                ],

            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKRangeInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-'. FA::_USERS
                        ]
                    ]
                ],

            ]
        ],
    ]
]);

$this->activeEnd();

