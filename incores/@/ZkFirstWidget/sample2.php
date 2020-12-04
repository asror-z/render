<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZKRange2Widget;


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
                    'widgetClass' => ZKRange2Widget::class,
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
                    'widgetClass' => ZKRange2Widget::class,
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
                    'widgetClass' => ZKRange2Widget::class,
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
                    'widgetClass' => ZKRange2Widget::class,
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
                    'widgetClass' => ZKRange2Widget::class,
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
                    'widgetClass' => ZKRange2Widget::class,
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
//
//        [
//            'attributes' => [
//                'jsonb_7' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
//                    'options' => [
//                        'config' => [
//                            'skin' => "modern",
//                            "from" => 25,
//                            'step' => 10,
//                            'max' => '1000'
//                        ]
//
//                    ],
//                ],
//            ]
//        ],
//
//        [
//            'attributes' => [
//                'jsonb_8' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
//                    'options' => [
//                        'config' => [
//                            'skin' => "round",
//                            "min" => 1000,
//                            "max" => 3000,
//                            "from" => 1500,
//                            'step' => 10
//                        ]
//
//                    ],
//                ],
//            ]
//        ],
//
//        [
//            'attributes' => [
//                'jsonb_9' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
//                    'options' => [
//                        'config' => [
//                            'type' => 'double',
//                            'skin' => "round",
//                            "min" => 1000,
//                            "max" => 3000,
//                            "from" => 1500,
//                            'postfix' => " so'm"
//                        ]
//
//                    ],
//                ],
//            ]
//        ],



    ]
]);


$this->activeEnd();
