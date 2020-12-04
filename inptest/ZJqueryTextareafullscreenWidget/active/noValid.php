<?php


use kartik\builder\Form;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZHFileInputWidget;
use zetsoft\widgets\inputes\ZHInputGroupWidget;
use zetsoft\widgets\inputes\ZJqueryTextareafullscreenWidget;


$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorEmail],
];
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_6' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZJqueryTextareafullscreenWidget::class,

                ],
            ]
        ],
    ],
]);

$this->activeEnd();

