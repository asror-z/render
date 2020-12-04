<?php


use kartik\checkbox\CheckboxX;
use unclead\multipleinput\MultipleInput;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHDropDownListWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
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
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inputes\ZKDatepickerWidget;
use zetsoft\widgets\inputes\ZKDateRangePickerWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZFileInputWidget;
use zetsoft\widgets\inputes\ZKLabelInplaceWidget;
use zetsoft\widgets\inputes\ZKNumberWidget;
use zetsoft\widgets\inputes\ZKPasswordInputWidget;
use zetsoft\widgets\inputes\ZKRangeInputWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKSliderWidget;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
use zetsoft\widgets\inputes\ZKStarRatingWidget;
use zetsoft\widgets\inputes\ZKSwitchInputWidget;
use zetsoft\widgets\inputes\ZKTimePickerWidget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\inputes\ZKTypeaheadBasicWidget;
use zetsoft\widgets\inputes\ZLeafletOldWidget;
use zetsoft\widgets\inputes\ZMultiWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidget;
use zetsoft\widgets\inputes\ZReCaptchaWidget;
use zetsoft\widgets\inputes\ZHSelectableWidget;
use zetsoft\widgets\inputes\ZTimeZoneWidget;
use zetsoft\widgets\navigat\ZButtonWidget;

$model = $this->modelGet(CoreInput::class, 1);

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);


//   for ZAccordionInputWidget
//$dataZAccordionInputWidget = array_flip(ZLang::lang);
//$dataZAccordionInputWidget = $model->accordioninputwidget;
// end

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
//        [
//            'attributes' => [
//                'jsonb_3' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZKDatecontrolWidget::class,
//                ],
//            ]
//        ],

        [
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDateRangePickerWidget::class,
                    'options'=>[
                        'attributeStart'=>'string_4',
                        'attributeEnd'=>'string_3',
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
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'zkcolorinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKColorInputWidget::class,
                    'options'=> []
                ],

            ]
        ],

        [
            'attributes' => [
                'ZFileInputWidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFileInputWidget::class,
                    'options' => [
                        'options'=>
                            [
                                'model' => $model,
                                'attribute' => 'ZFileInputWidget',
                                'uploadUrl' => '/admin/html/upload.aspx',
                                'deleteUrl' => '/admin/html/delete-file.aspx'
                            ]
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'zklabelinplacewidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKLabelInplaceWidget::class,
                    'options'=>[
                        'config' => [
                            'type'=> ZKLabelInplaceWidget::type['input'],
                            'label'=>'<i class="glyphicon glyphicon-lock"></i> Type your code',
                            'labelPosition' => ZKLabelInplaceWidget::position['down'],
                        ],
                    ]
                ],

            ]
        ],

        [
            'attributes' => [
                'zknumberwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKNumberWidget::class,
                    'options' => [
                        'data' => $items,
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKPasswordInputWidget::class,
                    'options' => []
                ],

            ]
        ],

        [
            'attributes' => [
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKRangeInputWidget::class,
                    'options' => []
                ],

            ]
        ],

        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'data' => $items,
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'zksliderwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderWidget::class,
                    'options' => [ ]
                ],
            ]

        ],

        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSortableInputWidget::class,
                    'options'=>[
                        'data'=>$items
                    ]
                ],

            ]
        ],

        [
            'attributes' => [
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKStarRatingWidget::class,
                    'options'=>[
                        'config' => [
                            'value' => 2.5,
                            'disabled' => false,
                        ]
                    ]
                ],

            ]
        ],

        [
            'attributes' => [
                'zkswitchinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSwitchInputWidget::class,
                    'options'=>[
                        'config' => [
                            'disabled' => false
                        ]
                    ]
                ],

            ]
        ],

        [
            'attributes' => [
                'zktimepickerwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTimePickerWidget::class,
                ),

            ]
        ],

        [
            'attributes' => [
                'zktouchspinwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTouchSpinWidget::class,
                ),

            ]
        ],

        [
            'attributes' => [
                'zktypeaheadbasicwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTypeaheadBasicWidget::class,
                    'options'=>
                        [
                            'placeholder' => 'Filter as you type ...',
                            'data'=>$items
                        ]
                ),
            ]
        ],



        [
            'attributes' => [
                'zperiodpickerwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidget::class,
                    'options' => [
                        'config' => [
                            'attributeStart'=>'zperiodpickerwidget',
                            'attributeEnd'=>'string_4',
                            'suffix' => ZPeriodPickerWidget::Suffix_Two,
                            'layout' => ZPeriodPickerWidget::Layout_6_6,
                        ]
                    ]
                ],
            ]

        ],

//        [
//            'attributes' => [
//                'created_at' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZReCaptchaWidget::class,
//                ),
//
//            ]
//        ],

        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDatepickerWidget::class,
                ],

            ]
        ],

//        [
//            'attributes' => [
//                'zselectablewidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZSelectableWidget::class,
//                    'options'=>[
//                        'attribute' => 'email',
//                        'sSelectableVar' => 'selectable2',
//                        'appendTo' => 'asset-container-2',
//                        'sContainerClass' => 'div',
//                        'itemTag' => 'div',
//                        'itemClass' => 'ui-zbutton ui-selectable',
//                        'items' => [
//                            'btn-1' => ZButtonWidget::widget([
//
//                            ]),
//                            'btn-2' => ZButtonWidget::widget([
//
//                            ]),
//                            'btn-3' => ZButtonWidget::widget([
//
//                            ]),
//                            'btn-4' => ZButtonWidget::widget([
//
//                            ]),
//                            'btn-5' => ZButtonWidget::widget([

//                            ]),
//                            'btn-6' => ZButtonWidget::widget([
//
//                            ]),
//                            'btn-7' => ZButtonWidget::widget([
//
//                            ]),
//                            'btn-8' => ZButtonWidget::widget([
//
//                            ])
//                        ],
//                    ],
//                ),
//
//            ]
//        ],

//        [
//            'attributes' => [
//                'ztimezonewidget' => array(
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZTimeZoneWidget::class,
//                ),
//            ]
//        ],

    ],
]);

$this->activeEnd();


