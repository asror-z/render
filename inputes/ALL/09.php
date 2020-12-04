<?php


use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZRadioListWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZSelectizeWidget;
use zetsoft\widgets\inputes\ZSimpleCountableWidget;
use zetsoft\widgets\inputes\ZTelInputWidget;
use zetsoft\widgets\inputes\ZTelInputWidgetOld;
use zetsoft\widgets\inputes\ZTextAreaWidget;
use zetsoft\widgets\inputes\ZTinyCloudWidget;


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
           /* [
                'attributes' => [
                    'string_2' => [
                        'type' => Form::INPUT_WIDGET,
                        'widgetClass' => ZTelInputWidget::class,
                        'options'=>[
                            'config' => [
                                'placeholder'=>'',
                                'hasIcon' => false,
                                'icon'=>'fas fa-user'

                            ]
                        ],
                    ],
                ]
            ],*/
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

