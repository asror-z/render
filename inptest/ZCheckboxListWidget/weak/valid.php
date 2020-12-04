<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCheckboxListWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
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
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>  ZCheckboxListWidget::class,
                    'options' => [
                        'data' => $items,
                        'config' => [
                         'hasIcon' => true,
                        'icon' => 'fas fa-'. FA::_USERS,
                        ]
                    ]
                ],
            ]

        ],


    ]
]);

$this->activeEnd();
