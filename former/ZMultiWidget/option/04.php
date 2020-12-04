<?php


use zetsoft\models\core\CoreInput;
use zetsoft\models\shop\ShopCategory;
use zetsoft\models\shop\ShopOption;
use zetsoft\service\forms\ZPjax;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\system\module\Models;
use zetsoft\widgets\former\ZFormBuildWidget;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZAccordionInputWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\widgets\inputes\ZKTouchSpinWidget;
use zetsoft\widgets\former\ZMultiWidget;

/** @var Models $model */
$model = $this->modelGet(ShopCategory::class, 1);

$model->configs->changeSave = true;
$model->configs->changeReload = true;

/** @var ZView $this */
$model->configs->nameOn = [
    'name',
    'shop_option_type',
    'image',
];

vd($model->shop_option_type);

$model->configs->widget = [
    'shop_option_type' => ZMultiWidget::class
];

$model->configs->options = [
    'shop_option_type' => [
        'config' =>[
            'formClass' => 'zetsoft\former\shop\OptionTypeForm',
        ],
    ]
];



$this->paramSet(paramChangeReloadId, 'crud-create-pjax');

$model->columns();
$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->pjaxBegin(function (ZPjax $pjax) {
    $pjax->id = 'crud-create-pjax';
    return $pjax;
});



$this->modelSave($model);

//$data = array_flip(ZLang::lang);
//$data = array_merge($data, $model->accordioninputwidget);

echo ZFormBuildWidget::widget([
    'model' => $model,
    'form' => $form,
]);

$this->pjaxEnd();
$this->activeEnd();



