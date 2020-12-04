<?php


use kartik\checkbox\CheckboxX;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\service\cores\Date;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZInputUniverseWidget;
use zetsoft\widgets\inputes\ZCheckRadioListWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget1;
use zetsoft\widgets\inputes\ZCKeditorJsWidget2;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZClockPickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget;
use zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZHRadioButtonGroupWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZIconPickerWidget;
use zetsoft\widgets\inputes\ZImageCheckboxWidget;
use zetsoft\widgets\inputes\ZInputMaskWidget;
use zetsoft\widgets\inputes\ZInputWidget;
use zetsoft\widgets\inputes\ZjQueryCustomCaretWidget;
use zetsoft\widgets\inputes\ZJqueryEmojiareaJsWidget;
use zetsoft\widgets\inputes\ZJqueryTextareafullscreenWidget;
use zetsoft\widgets\inputes\ZJqueryTextareaLibraryWidget;
use zetsoft\widgets\inputes\ZKCheckboxXWidget;
use zetsoft\widgets\inputes\ZKColorInputWidget;
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inputes\ZKDateRangePickerWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKNumberWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKRangeInputWidget;
use zetsoft\widgets\inputes\ZKSelect2WidgetNew;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZKTypeaheadWidget;
use zetsoft\widgets\inputes\ZMultiJsWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZRadioListWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZSimpleCountableWidget;
use zetsoft\widgets\inputes\ZTelInputWidget;
use zetsoft\widgets\inputes\ZTextAreaWidget;
use zetsoft\widgets\inputes\ZTinyCloudWidget;


$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */
/*$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);*/

$data = Az::$app->forms->modelz->data();
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [
        validatorInteger
    ]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        // 01
        [
            'attributes' => [       // 2 column layout
                'int_2' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckRadioListWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS
                        ],

                    ],
                ),

            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'jsonb_3' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCKeditorJsWidget2::class,
                    'options' => [
                        'config' => [
                            'data' => $items,
                        ],
                        'layout' => [],
                    ],
                ),

            ]
        ],
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZClockPickerWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => true
                        ]
                    ]
                ],
            ]

        ],
        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFileInputWidget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => '',
                            'hasIcon' => true,
                            'icon' => 'fas fa-user'

                        ]
                    ],
                ],
            ]
        ],
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
        // 02
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHCheckboxButtonGroupWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'hasIcon' => false,
                            'icon' => 'fas fa-user'
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHCheckboxWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS,
                            'src' => ''
                        ]
                    ],
                ],
            ]
        ],
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHInputWidget::class,
                    'options' => [
                        'data' => $items
                    ]
                ],

            ],

        ],
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHHiddenInputWidget::class,
                    'config' => [

                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFontAwesomeIconPickerWidget::class,
                    'options' => [
                        'config' => [
                            'type' => ZFontAwesomeIconPickerWidget::type['asComponent'],
                            'hasIcon' => true
                        ],
                    ]
                ],
            ]

        ],
        // 03
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
                            'icon' => 'fas fa-user',
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
                            'icon' => 'fas fa-' . FA::_USERS
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
                            'icon' => 'fas fa-' . FA::_USERS
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
        // 04
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputMaskWidget::class,
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
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputUniverseWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                        ],
                    ]
                ],

            ]
        ],
        [
            'attributes' => [
                'string_2' => [
                    'widgetClass' => ZInputWidget::class,
                    'type' => Form::INPUT_WIDGET,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'placeholder' => 'Value',
                            'changeSubmit' => true,
                            'type' => ZInputWidget::type['time'],
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'string_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZjQueryCustomCaretWidget::class,
                    'options' => [
                    ]
                ],

            ]
        ],
        [
            'attributes' => [
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryEmojiareaJsWidget::class,
                    'options' => [
                    ]
                ],

            ]
        ],
        // 05
        /*[
            'attributes' => [
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryTextareafullscreenWidget::class,

                ],
            ]
        ],*/
        /* [
            'attributes' => [
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryTextareaLibraryWidget::class,

                ],
            ]
        ],*/
        /*[
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKCheckboxXWidget::class,
                    'options' => [
                        'config'=>
                            [
                                'initinputype' => CheckboxX::INPUT_CHECKBOX,
                                'isAutoLabel' => true,
                                'pluginoption' => [
                                    'size' => 'sm',
                                    'iconChecked' => '<b>&check;</b>',
                                    'iconUnchecked' => '<b>X</b>',
                                ],
                                'hasIcon' => true,
                                'icon' => 'fas fa-'. FA::_USERS,
                                'lLabelsetting' => ['label' => 'Blue Small', 'options' => ['class' => 'text-info']]
                            ]
                    ]
                ],

            ]
        ],*/
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKColorInputWidget::class,
                    'options' => []
                ],
            ]
        ],
        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatecontrolWidget::class,
                    'options' => [
                        'name' => 'begin_time',

                        'config' => [
                            'type' => ZKDatecontrolWidget::format['date'],
                            'displayFormat' => 'php:' . Date::date,
                            'saveFormat' => 'php:' . Date::date,
                            'displayTimezone' => '',
                            'saveTimezone' => '',
                            'isAutoWidget' => true,
                            'widgetOptions' => '',
                            'disabled' => false,
                            'readonly' => false,
                            'saveOptions' => '',
                            'isAjaxConversion' => true,
                            'isAsyncRequest' => true,
                        ]
                    ],

                ],
            ]
        ],
        // 06
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
                'string_8' => [
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
                'string_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKRangeInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-' . FA::_USERS
                        ]
                    ]
                ],

            ]
        ],
        // 07
        [
            'attributes' => [
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2WidgetNew::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                            'tags' => true,
                            'multiple' => true,
                            'isMaintainOrder' => true,
                            'maximumInputLength' => 10
                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSortableInputWidget::class,
                    'options' => [
                        'data' => $items
                    ]
                ],

            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKStarRatingWidget::class,
                    'options' => [
                        'value' => 0,

                    ]
                ],

            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSwitchInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => false,
                            'icon' => 'fas fa-' . FA::_USERS,
                        ]
                    ],
                ]
            ]
        ],
        [
            'attributes' => [       // 2 column layout
                'string_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTimePickerWidget::class,
                    'options' => [
                        'data' => $items
                    ]
                ],

            ]
        ],
        // 08
        [
            'attributes' => [       // 2 column layout
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTouchSpinWidget::class,
                    'options' => [
                        'data' => $items
                    ]
                ],

            ]
        ],
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
                            'icon' => 'fas fa-' . FA::_USERS
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
        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidget::class,
                    'options' => [
                        'config' => [

                        ],

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
                            'icon' => 'fas fa-user'
                        ],
                        'data' => [
                            '1111',
                            '2222',
                            '3333',
                            '4444',
                            '5555',
                            '6666'
                        ],
                    ]
                ],

            ]
        ],
        // 09
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZRadioListWidget::class,
                    'options' => [

                        'config' => [
                            'hasIcon' => true,
                            'icon' => 'fas fa-user'

                        ],


                    ],
                ],
            ]

        ],
        [
            'attributes' => [
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelect2Widget::class,
                    'options' => [
                        'data' => $data = [
                            'btn' => 'btn',
                            'mt' => 'mt',
                            'mt-2' => 'mt-2',
                            'mt-3' => 'mt-3',
                            'btn-lg' => 'btn-lg',
                            'btn-sm' => 'btn-sm',
                            'btn-primary' => 'btn-primary',
                            'btn-success' => 'btn-success',
                            'btn-danger' => 'btn-danger',
                            'btn-warning' => 'btn-warning',
                            'btn-info' => 'btn-info',
                            'btn-dark' => 'btn-dark'
                        ],
                        'config' => [
                            'enableEvent' => true,
                            'multiple' => true,
                        ],
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSimpleCountableWidget::class,
                ],
            ]
        ],
        [
            'attributes' => [
                'string_10' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTelInputWidget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => '',
                            'hasIcon' => false,
                            'icon' => 'fas fa-user'

                        ]
                    ],
                ],
            ]
        ],
        [
            'attributes' => [
                'text_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTextAreaWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,


                        ]
                    ],
                ],
            ]
        ],
        [
            'attributes' => [
                'text_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZTinyCloudWidget::class,
                    'options' => [
                        'config' => [
                            'placeholder' => '',
                            'hasIcon' => true,
                            'icon' => 'fas fa-user'

                        ],
                    ],
                ],
            ]
        ],
    ]
]);

$this->activeEnd();

