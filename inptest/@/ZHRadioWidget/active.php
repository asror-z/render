<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\Az;
use zetsoft\system\helpers\ZHTML;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inptest\ZHRadioWidget;

use zetsoft\widgets\inptest\ZIntlTelWidget;
use zetsoft\widgets\inputes\ZKSelect2Widget;

$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorEmail]
];



echo ZFormwidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'bool_1' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' =>ZHRadioWidget::class
                ],

            ]
        ]
    ]
]);

$this->activeEnd();



