<?php


use kartik\builder\Form;
use zetsoft\models\page\PageControl;
use zetsoft\models\page\PageModule;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZSelect2Widget;
use zetsoft\widgets\inputes\ZDepdropWidget;





echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'namespace' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'data' => Az::$app->App->eyuf->grape->getServiceFolders(),
                    ]
                ],
                
                'service' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZDepdropWidget::class,
                    'options' => [
                        'config' => [
                            'depend' => 'namespace'
                        ],
                    ]
                ],

                'method' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSelect2Widget::class,
                    'options' => [
                        'data' => Az::$app->App->eyuf->grape->getServiceFolders(),
                    ]
                ],
            ]
        ],
    ],
]);
