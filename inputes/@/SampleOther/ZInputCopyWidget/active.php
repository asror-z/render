<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZInputCopyWidget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'zinputwidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZInputCopyWidget::class,
                    'options' => [
                        'data' => $items,
                    ]

                ],
            ]
        ],
    ],
]);

$this->activeEnd();

