<?php


use zetsoft\models\core\CoreInput;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\former\ZMultiWidget;

/** @var Models $model */
$model = $this->modelGet(CoreInput::class, 1);
/** @var ZView $this */
$model->configs->nameOn = [
    'jsonb_1'
];

vd($model->jsonb_1);

$model->columns();
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();


$this->modelSave($model);


//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
]);

$this->activeEnd();



