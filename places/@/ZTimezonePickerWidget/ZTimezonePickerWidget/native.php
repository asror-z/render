<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZCKEditorWidget;
use zetsoft\widgets\inputes\ZTimeZoneWidget;

$model = $this->modelGet(CoreInput::class, 2);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);
echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'names' => [
        'ztimezonepickerwidget'
    ]
]);

$this->activeEnd();

