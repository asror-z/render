<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\incores\ZkFirstWidget;
use zetsoft\widgets\inputes\ZCKeditorJsWidget1;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 8);
/** @var ZView $this */

$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
//        [
//            'attributes' => [
//                'jsonb_1' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZkFirstWidget::class,
//                     'options' => [
//                            'config' => [
//                                "from" => "8",
//                            ],
//
//                     ],
//                ],
//            ]
//        ],


//        [
//            'attributes' => [
//                'jsonb_2' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZkFirstWidget::class,
//                    'options' => [
//                        'config' => [
//                            'type' => 'double',
//                            'skin' => 'big',
//                            "max" => "150",
//                            "from" => "40",
//                            "to" => "120",
//                            'prefix' => '$'
//                        ],
//                    ],
//                ],
//            ]
//        ],
//
//        [
//            'attributes' => [
//                'jsonb_3' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZkFirstWidget::class,
//                    'options' => [
//                        'config' => [
//                            'type' => 'double',
//                            'skin' => 'big',
//                            "min" => "100",
//                            "max" => "1000",
//                            "from" => "520",
//                            "to" => "720",
//                            'prefix' => '$'
//                        ],
//
//                    ],
//                ],
//            ]
//        ],
//
//        [
//            'attributes' => [
//                'jsonb_4' => [
//                    'type' => Form::INPUT_WIDGET,
//                    'widgetClass' => ZkFirstWidget::class,
//                    'options' => [
//                        'config' => [
//                            "from" => "8",
//                        ]
//
//                    ],
//                ],
//            ]
//        ],

        [
            'attributes' => [
                'jsonb_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZkFirstWidget::class,
                    'options' => [
                        'config' => [
                            'type' => "double",
                            'skin' => "sharp",
                            "min" => 1000,
                            "max" => 3000,
                            "from" => 1500,
                            "to" => 2500,
                            'step' => 100
                        ]

                    ],
                ],
            ]
        ],

        [
            'attributes' => [
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZkFirstWidget::class,
                    'options' => [
                        'config' => [
                            'type' => "double",
                            'skin' => "big",
                            "min" => 1000,
                            "max" => 3000,
                            "from" => 1500,
                            'step' => 100
                        ]

                    ],
                ],
            ]
        ],



    ]
]);


$this->activeEnd();

