<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZkRangeWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZkRangeWidget::class,
                     'options' => [
                            'config' => [
                                "from" => "8",
                            ],

                     ],
                ],
            ]
        ],


        [
            'attributes' => [
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'type' => 'double',
                            'skin' => 'big',
                            "max" => "150",
                            "from" => "40",
                            "to" => "120",
                            'prefix' => '$'
                        ],
                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'type' => 'double',
                            'skin' => 'square',
                            "min" => "100",
                            "max" => "1000",
                            "from" => "520",
                            "to" => "720",
                            'prefix' => '$'
                        ],

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            "from" => "8",
                        ]

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'type' => "double",
                            'skin' => "sharp",
                            "min" => 1000,
                            "max" => 3000,
                            "from" => 1500,
                            "to" => 2500,
                            'step' => 100,
                            'prefix' => '$'
                        ]

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'type' => "double",
                            'skin' => "big",
                            'grid' => true,
                            "max" => 3000,
                            "from" => 1500,
                            'step' => 100
                        ]

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'skin' => "modern",
                            "from" => 25,
                            'step' => 10,
                            'max' => '1000'
                        ]

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'skin' => "round",
                            "min" => 1000,
                            "max" => 3000,
                            "from" => 1500,
                            'step' => 10
                        ]

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_9' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\incores\ZkRangeWidget::class,
                    'options' => [
                        'config' => [
                            'type' => 'double',
                            'skin' => "round",
                            "min" => 1000,
                            "max" => 3000,
                            "from" => 1500,
                            'postfix' => " so'm"
                        ]

                    ],
                ],
            ]
        ],



    ]
]);


$this->activeEnd();

