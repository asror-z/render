<?php


use zetsoft\models\page\PageAction;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\models\page\PageViewType;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\inputes\ZDepdropWidget;
use zetsoft\widgets\inputes\ZDepdropWidgetNorm;
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
                'jsonb_7' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDepdropWidget::class,
                    'options' => [
                        'data' => [
                            'assssssss',
                            'assssssss',
                            'assssssss',
                            'assssssss',
                            'assssssss',
                        ],
                    ]
                ],
                'jsonb_8' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDepdropWidget::class,
                    'options' => [
                        'config' => [
                            'depend' => 'jsonb_7',
                            'App' => true,
                            'namespace' => 'eyuf',
                            'service' => 'grape',
                            'method' => 'getServices'
                        ]
                    ]
                ],
                'jsonb_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDepdropWidget::class,
                    'options' => [
                        'config' => [
                            'depend' => [
                                'jsonb_7',
                                'jsonb_8'
                            ],
                            'App' => true,
                            'namespace' => 'eyuf',
                            'service' => 'grape',
                            'method' => 'getServicesMethod'
                        ],
                    ]
                ],
            ]
        ],
    ],
]);

$this->activeEnd();
