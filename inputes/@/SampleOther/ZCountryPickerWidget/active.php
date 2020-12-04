<?php



use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidget;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKSelect2Widget;
use zetsoft\models\core\CoreInput;

$model = $this->modelGet(CoreInput::class, 7);
//$model = CoreInput::findOne(1);

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
                'zselectcountrieswidget' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZCountryPickerWidget::class,
                    'options' => []
                ],
            ]
        ],


    ]
]);





$this->activeEnd();

