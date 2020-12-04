<?php

use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCheckboxImageWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorBoolean]
];

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'names' => [
        'zcheckboximagewidget'
    ]
]);


$this->activeEnd();

