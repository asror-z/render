<?php

use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZCheckboxButtonGroup;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$model->configs->rulesAll = [
    [validatorIp]
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
                'jsonb_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>  ZCheckboxButtonGroup::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => false,
                        ],
                        'data' => $items,
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();

