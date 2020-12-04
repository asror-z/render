<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZCMultiselectWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 6);
/** @var ZView $this */

$model->configs->rulesAll = [
    [validatorRequired]
];

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


$model->configs->rulesAll = [
    [validatorEmail]
];


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'text_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCMultiselectWidget::class,
                    'options' => [
                        'data' => $items,
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

