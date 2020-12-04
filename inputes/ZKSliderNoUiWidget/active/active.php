<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZKSliderNoUiWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$form = $this->activeBegin();
$this->modelSave($model);
?>

<?php

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderNoUiWidget::class,
                    'options' => [
                        'config' => [
                            'start' => [10],
                            'range' => [
                                'min' => 10,
                                'max' => 150
                            ],
                            'format' => [
                                'suffix' => " so'm"
                            ]
                        ]
                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderNoUiWidget::class,
                    'options' => [
                        'config' => [
                            'inputs_show' => true,
                            'start' => [1000,1200],
                            'range' => [
                                'min' => 1000,
                                'max' => 2500
                            ],
                            'format' => [
                                'prefix' => "$ "
                            ]
                        ]
                    ],
                ],
            ]
        ],


        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderNoUiWidget::class,
                    'options' => [
                        'config' => [
                            'start' => [10,45],
                            'range' => [
                                'min' => 10,
                                'max' => 150
                            ],
                            'pips' => [
                                'mode' => 'positions',
                                'values' =>[0, 25, 50, 75, 100],
                                'stepped' => true,
                                'density' => 3
                            ],
                            'format' => [
                                'prefix' => "$ "
                            ]
                        ]
                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderNoUiWidget::class,
                    'options' => [
                        'config' => [
                            'start' => [60],
                            'range' => [
                                'min' => 10,
                                'max' => 150
                            ],
                            'format' => [
                                'prefix' => "$ "
                            ]
                        ]
                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderNoUiWidget::class,
                    'options' => [
                        'config' => [
                            'start' => [10],
                            'range' => [
                                'min' => 0,
                                'max' => 250
                            ],
                        ]
                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSliderNoUiWidget::class,
                    'options' => [
                        'config' => [
                            'step' => 200,
                            'start' => [0,1000,3000,4500],
                            'range' => [
                                'min' => 0,
                                'max' => 5000
                            ],
                            'pips' => [
                                'mode' => 'steps',
                                'density' => 2
                            ],
                            'format' => [
                                'prefix' => "€ "
                            ]
                        ]
                    ],
                ],
            ]
        ],


    ]
]);


$this->activeEnd();
