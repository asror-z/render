<?php


use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZHInputWidget;
use zetsoft\widgets\inputes\ZHListBoxWidget;
use zetsoft\widgets\inputes\ZHPasswordInputWidget;
use zetsoft\widgets\inputes\ZHTextareaWidget;

use \zetsoft\widgets\inputes\ZKTypeaheadWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);


//   for ZAccordionInputWidget
//$dataZAccordionInputWidget = array_flip(ZLang::lang);

// end 
$data = [
    'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
    'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
    'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
    'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
    'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
    'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'zktypeaheadbasicwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKTypeaheadWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true,
                            'placeholder' => 'TypeAhead',
                            'local' => $data,
                            'limit' => 5
                        ]
                    ]
                ],
            ]
        ],
        [
            'attributes' => [
                'zhinputgroupwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHInputGroupWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true,
                        ],
                        'data' => $items
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'zhinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHInputWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true,
                            'icon' => 'fa-envelope',
                        ],
                        'data' => $items,
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'zhlistboxwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHListBoxWidget::class,
                    'options' => array(
                        'config' => [
                            'readonly' => true,
                        ],
                        'data' => $items
                    )
                ),
            ]
        ],

        [
            'attributes' => [
                'zhpasswordinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHPasswordInputWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true
                        ],
                        'data' => $items,
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'string_4' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHTextareaWidget::class,
                    'options' => array(
                        'config' => [
                            'readonly' => true,
                            //'icon' => 'fa-pencil-alt',
                        ],
                        'data' => $items
                    )
                ),
            ]
        ],

        [
            'attributes' => [
                'zckeditorwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCKEditorWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true
                        ],
                        'data' => $items,
                    ]
                ],
            ],
        ],
        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckboxButtonGroup::class,
                    'options' => [
                        'config' => [
                            'readonly' => true
                        ],
                        'data' => $items,
                    ]
                ],
            ]
        ],

        [
            'attributes' => [
                'zhcheckboxlistwidget' => array(
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCheckboxListWidget::class,
                    'options' => array(
                        'data' => $items,
                        'config' => [
                            'readonly' => true,
                            'type' => ZCheckboxListWidget::TYPE_HORIZONTAL,
                        ]
                    ),
                ),

            ]
        ],

        [
            'attributes' => [
                'zhcheckboxwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHCheckboxWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true,
                            'checkInline' => '',
                            'isCheckInline' => true,
                            'checkboxes' => [
                                [
                                    'label' => 'Item 1',
                                    'checked' => true,
                                    'disabled' => false,
                                ],
                            ]
                        ],

                    ]
                ],
            ]
        ],


        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHFileInputWidget::class,
                    'options' => [
                        'config' => [
                            'readonly' => true
                        ],
                        'data' => $items,
                    ]
                ],
            ]
        ],

    ]
]);

$this->activeEnd();

