<?php


use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;

use zetsoft\widgets\inputes\ZSimpleCountableWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */
$model->configs->rulesAll = [
    [validatorEmail],
];
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);



echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'text_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZSimpleCountableWidget::class,
                    'options' => [
                        'data' => $items
                    ]
                ],

            ],

        ],


    ]
]);

$this->activeEnd();
