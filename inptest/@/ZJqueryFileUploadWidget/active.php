<?php
use zetsoft\widgets\inptest\ZJqueryFileUploadWidget;
use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;

$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */

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
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryFileUploadWidget::class,
                    'options' => [

                    ]

                ],
            ]
        ],
    ],
]);

$this->activeEnd();

