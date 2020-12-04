<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZKDatecontrolWidget;
use zetsoft\widgets\inputes\ZKDateTimePickerWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

// start|MuminovUmid|2020-10-10
$model->configs->rules = [
    [
        'zetsoft\\system\\validate\\ZRequiredValidator'
    ]
];
// end|MuminovUmid|2020-10-10

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       
                'string_5' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKDateTimePickerWidget::class,
                    'options' => [
                        'data' => $items,
                    ]
                ],
            ]
        ],


    ]
]);

$this->activeEnd();

