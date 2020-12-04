<?php


use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\incores\ZDepDropWidget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\system\Az;
use zetsoft\models\core\CoreInput;

$model = $this->modelGet(CoreInput::class, 3);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$this->modelPost();


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZSelect2Widget::class,
                    'options' => [
                        'data' => [
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
                            'btn-dark' => 'btn-dark',
                        ],
                        'config' => [
                            'multiple' => true,
                            'placeholder' => '126',
                            'allowClear' => true,
                            'pjax' => false,
                        ],
                    ],
                    'event' => [
                        'select' =>  <<<JS
                function () {
                  $(this).submit
                }
JS,

                    ]
                ],
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZSelect2Widget::class,
                    'options' => [
                        'data' => [
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
                            'btn-dark' => 'btn-dark',
                        ],
                        'config' => [
                            'multiple' => true,
                            'placeholder' => '1456',
                            'allowClear' => true,
                            'pjax' => false,
                        ],
                    ],
                    'event' => [
                        'select' =>  <<<JS
                function () {
                  $(this).submit
                }
JS,

                    ]
                ],
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => \zetsoft\widgets\inputes\ZSelect2Widget::class,
                    'options' => [
                        'data' => [
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
                            'btn-dark' => 'btn-dark',
                        ],
                        'config' => [
                            'multiple' => true,
                            'placeholder' => '123456',
                            'allowClear' => true,
                            'pjax' => false,
                        ],
                    ],
                    'event' => [
                        'select' =>  <<<JS
                function () {
                  $(this).submit
                }
JS,

                    ]
                ],

            ]
        ],
    ],
]);

$this->activeEnd();


