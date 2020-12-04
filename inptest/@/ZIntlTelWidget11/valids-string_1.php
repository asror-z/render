<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCountryPickerWidgetOld;
use zetsoft\widgets\inptest\ZCheckboxButtonGroup;
use zetsoft\widgets\inputes\ZIntlTelOldWidget25021;
use zetsoft\widgets\inptest\ZIntlTelWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin()();
$this->modelSave($model);
$model->configs->rulesAll = [
    [validatorEmail]
];


echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZIntlTelWidget::class
                ],

            ]
        ]
    ]
]);

$this->activeEnd();

