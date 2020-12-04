<?php

use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZRadioButtonGroup;
use zetsoft\widgets\inputes\ZHRadioListWidget;
use zetsoft\widgets\inputes\ZHRadioWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;
use zetsoft\widgets\inputes\ZIntlTelOldWidget25021;
use zetsoft\widgets\inputes\ZKCheckboxXWidget;
use zetsoft\widgets\inputes\ZKColorInputWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZKLabelInplaceWidget;
use zetsoft\widgets\inputes\ZKNumberWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKRangeInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSliderWidget;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZKTypeaheadBasicWidget;
use zetsoft\widgets\inputes\ZLeafletOldWidget;
use zetsoft\widgets\inputes\ZMultiWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZReCaptchaWidget;
use zetsoft\widgets\inputes\ZHSelectableWidget;
use kartik\builder\Form;
use kartik\checkbox\CheckboxX;
use kartik\datetime\DateTimePicker;
use unclead\multipleinput\MultipleInput;


$model = CoreInput::findOne(1);
/** @var ZView $this */
$form = $this->activeBegin();

$this->modelSave($model);
$data = Az::$app->forms->modelz->data();
$items = $data;

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
//        [
//            'attributes' => [
//                'actions' => [
//                    'type' => Form::INPUT_RAW,
//                    'value' => '<div style="text-align: right; margin-top: 20px">' .
//                        ZHtml::resetButton('Reset', [
//                            'class' => 'btn btn-secondary',
//                            ''
//                        ]) . ' ' .
//                        ZHtml::submitButton('Submit', [
//                            'class' => 'btn btn-primary',
//                            'id' => 'submitButton',
//                        ]) .
//                        '</div>'
//                ],
//            ],
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zaccordioninputwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZAccordionInputWidget::class,
//                    'options' => [
//                        'data' => $data
//                    ],
//                    'model' => $model,
//                ]
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zckeditorwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZCKEditorWidget::class,
//                    'options' => [
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zcountrypickerwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZCountryPickerWidget::class
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'jsonb_4' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => zetsoft\widgets\inputes\ZHCheckboxButtonGroupWidget::class,
//                    'options' => [
//                        'data' => $items,
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhcheckboxlistwidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHCheckboxListWidget::class,
//                    'options' => array(
//                        'data' => $items,
//                        'type' => ZHCheckboxListWidget::TYPE_VERTICAL,
//                    ),
//                ),
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhcheckboxwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHCheckboxWidget::class,
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [
//                'actions' => [
//                    'type' => Form::INPUT_RAW,
//                    'value' => '<div style="text-align: right; margin-top: 20px">' .
//                        ZHtml::resetButton('Reset', [
//                            'class' => 'btn btn-secondary',
//                            ''
//                        ]) . ' ' .
//                        ZHtml::submitButton('Submit', [
//                            'class' => 'btn btn-primary',
//                            'id' => 'submitButton',
//                        ]) .
//                        '</div>'
//                ],
//            ],
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhinputgroupwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHInputGroupWidget::class,
//                    'options' => [
//                        'data' => $items
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhinputwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHInputWidget::class,
//                    'options' => []
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhlistboxwidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHListBoxWidget::class,
//                    'options' => array(
//                        'data' => $items
//                    )
//                ),
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhpasswordinputwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHPasswordInputWidget::class,
//                    'options' => []
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_3' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHRadioButtonGroupWidget::class,
//                    'options' => [
//                        'data' => $items,
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhradiolistwidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHRadioListWidget::class,
//                    'options' => array(
//                        'type' => ZHRadioListWidget::TYPE_VERTICAL,
//                        'data' => $items,
//                    )
//                ),
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zhradiowidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHRadioWidget::class,
//                ),
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_4' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZHTextareaWidget::class,
//                    'options' => []
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zintltelwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZIntlTelWidget::class
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_4' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKCheckboxXWidget::class,
//                    'options' =>
//                        [
//                            'sInitInputType' => CheckboxX::INPUT_CHECKBOX,
//                            'bAutoLabel' => true,
//                            'aPluginOption' => [
//                                'size' => 'sm',
//                                'iconChecked' => '<b>&check;</b>',
//                                'iconUnchecked' => '<b>X</b>',
//                            ],
//                            'aLabelSetting' => ['label' => 'Blue Small', 'options' => ['class' => 'text-info']]
//                        ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zkcolorinputwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKColorInputWidget::class,
//                    'options' =>
//                        [
//                            'name' => 'color_13',
//                            'value' => '#a814fe',
//                            'bNative' => true,
//                            'sWidth' => '75%',
//                        ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_3' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKDatepickerWidget::class,
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_5' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKDateTimePickerWidget::class,
//                    'options' => [
//                        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
//                        'value' => '23-Feb-1982 10:01',
//                        'options' => [
//                            'autoclose' => true,
//                            'format' => 'dd-M-yyyy hh:ii'
//                        ]
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'ZFileInputWidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZFileInputWidget::class,
//                    'options' =>
//                        [
//                            'model' => $model,
//                            'attribute' => 'ZFileInputWidget',
//                        ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zklabelinplacewidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKLabelInplaceWidget::class,
//                    'options' => [
//                        'type' => ZKLabelInplaceWidget::Type_Input,
//                        'label' => '<i class="glyphicon glyphicon-lock"></i> Type your code',
//                        'labelPosition' => ZKLabelInplaceWidget::Position_Down,
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [
//                'zknumberwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKNumberWidget::class,
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_1' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKPasswordInputWidget::class,
//                    'options' => []
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_2' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKRangeInputWidget::class,
//                    'options' => []
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zkselect2widget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKSelect2Widget::class,
//                    'options' => [
//                        'data' => $items
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zksliderwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKSliderWidget::class,
//                ],
//
//            ]
//
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'string_3' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKSortableInputWidget::class,
//                    'options' => [
//                        'data' => $items
//                    ]
//                ],
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zkswitchinputwidget' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKSwitchInputWidget::class,
//                    'options' => [
//                        'disabled' => false
//                    ]
//                ],
//
//            ]
//        ],
//        /* [
//             'attributes' => [       // 2 column layout
//                 'zktimepickerwidget' => array(
//                     'type' => Form::INPUT_WIDGET,
//                     'widgetClass' => ZKTimePickerWidget::class,
//                 ),
//
//             ]
//         ],*/
//        [
//            'attributes' => [       // 2 column layout
//                'zktouchspinwidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKTouchSpinWidget::class,
//                ),
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zktypeaheadbasicwidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKTypeaheadBasicWidget::class,
//                    'options' =>
//                        [
//                            'placeholder' => 'Filter as you type ...',
//                            'data' => $items
//                        ]
//                ),
//
//            ]
//        ],
//        [
//            'attributes' => [       // 2 column layout
//                'zlocationwidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZLeafletWidget::class,
//                    'options' => ['sMode' => ZLeafletWidget::Mode_Edit]
//                ),
//
//            ]
//        ],
        /*[
            'attributes' => [       // 2 column layout
                'ZMultiWidgetNew' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMultiWidgetNew::class,
                    'options' => [
                        'data' => $model->multipleinputwidget,
                        'bCloneButton' => true,
                        'columns' => [
                            ZMultiWidgetNew::columnDropDownList($items, 'dropdownlist', 'DropDownList'),
                            ZMultiWidgetNew::columnSelect2($items, 'select2', 'Select2'),
                            ZMultiWidgetNew::columnTime('time', 'Time'),
                            ZMultiWidgetNew::columnInput()
                        ],
                        'iMax' => 6,
                        'iMin' => 1, // should be at least 2 rows
                        'isAllowEmptyList' => false,
                        'sAddButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
                    ]

                ),

            ]
        ],*/
        /*  [
              'attributes' => [       // 2 column layout
                  'created_at' => array(
                      'type' => Form::INPUT_WIDGET,
                      'widgetClass' => ZPeriodPickerWidget::class,
                      'options' => [
                          'attributeStart' => 'zperiodpickerwidget',
                          'attributeEnd' => 'string_4',
                          'sSuffix' => ZPeriodPickerWidget::Suffix_Two,
                          'aLayout' => ZPeriodPickerWidget::Layout_6_6,
                      ],
                  ),

              ]
          ],
          [
              'attributes' => [       // 2 column layout
                  'created_at' => array(
                      'type' => Form::INPUT_WIDGET,
                      'widgetClass' => ZReCaptchaWidget::class,
                  ),

              ]
          ],*/
        /*[
            'attributes' => [       // 2 column layout
                'zselectablewidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSelectableWidget::class,
                    'options' => [
                        'attribute' => 'email',
                        'sSelectableVar' => 'selectable2',
                        'appendTo' => 'asset-container-2',
                        'sContainerClass' => 'div',
                        'itemTag' => 'div',
                        'itemClass' => 'ui-zbutton ui-selectable',
                        'items' => [
                            'btn-1' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-2' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-3' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-4' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-5' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-6' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-7' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ]),
                            'btn-8' => ZButtonWidget::widget([
                                'types' => ZButtonWidget::Type_Button,
                                'label' => 'Large Primary Outline',
                                'color' => ZButtonWidget::Outline_Primary,
                                'btnSize' => ZButtonWidget::Size_Large
                            ])
                        ],
                    ],
                ),

            ]
        ],*/


    ]
]);

$this->activeEnd();

