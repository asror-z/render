<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZInputWidget;

$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


//$this->modelPost();

$model->configs->rulesAll = [
    [validatorEmail],
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputWidget::class,
                    'options' => [
                        'config' => [
                            'hasIcon' => true,
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

