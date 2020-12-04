<?php

use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\incores\ZMRadioWidget;

$model = $this->modelGet(CoreInput::class, 2);
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
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMRadioWidget::class,
                    'options' => [
                        'config' => [
                        ]
                    ]
                ],
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMRadioWidget::class,
                    'options' => [
                        'config' => [
                        ]
                    ]
                ],
            ]
        ],
    ],

]);
$this->activeEnd();
