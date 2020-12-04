<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputWidget;

$model = new CoreInput();
/** @var ZView $this */

// $items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

 //$this->modelPost();

$model->configs->rules = [
    [
        validatorEmail
    ],

    [
        'zetsoft\\system\\validate\\ZRequiredValidator'
    ],
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputWidget::class,
                    'options' => [
                        'config' => [
                            //'hasIcon' => true,
                            //'icon' => 'fas fa-' . FA::_USERS,
                            'placeholder' => 'Check'
                        ]
                    ]
                ],

            ]
        ],

    ]
]);


$this->activeEnd();

