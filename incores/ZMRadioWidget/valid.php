<?php

use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
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
$model->configs->rulesAll = [
    [validatorRequired]
];

echo ZFormWidget::widget([

    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZMRadioWidget::class,
                    'options' => [
                        'data' => [
                            1 => 'Bosya1',
                            2 => 'Bosya12',
                            3 => 'Bosya13',
                            4 => 'Bosya14',
                        ],
                        'config' => [
                        ]
                    ]
                ],
            ]
        ],
    ],

]);
$this->activeEnd();
