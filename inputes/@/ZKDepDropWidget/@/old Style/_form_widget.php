<?php
use kartik\depdrop\DepDrop;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use zetsoft\models\page\PageAction;
use zetsoft\models\user\User;
use zetsoft\widgets\former\ZFormWidget;



echo ZFormWidget::widget([
    'model' => $form1,
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
        ],       [
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
        ],       [
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
        ],       [
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
    ],
]);

$this->activeEnd();




