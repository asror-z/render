<?php

use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\system\Az;
use zetsoft\widgets\former\ZFormWidget;

use zetsoft\widgets\inputes\ZRadioListWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$data = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

// start|MuminovUmid|2020-10-09
$model->configs->rules = [
     ['zetsoft\\system\\validate\\ZRequiredValidator'],
];
// end|MuminovUmid|2020-10-09

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>  ZRadioListWidget::class,
                    'options'=>[
                        'data' => $data,
                        'config' => [
                            'hasIcon' => false,
                            'icon'=>'fas fa-user'

                        ]
                    ],
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

