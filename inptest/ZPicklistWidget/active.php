
<?php

use zetsoft\models\core\CoreInput;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inptest\ZPicklistWidget;
use zetsoft\system\kernels\ZView;
use kartik\builder\Form;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorInteger]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPicklistWidget::class,

                ],
            ]
        ],
    ],
]);

$this->activeEnd();

