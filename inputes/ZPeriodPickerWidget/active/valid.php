<?php


use kartik\builder\Form;
use rmrevin\yii\fontawesome\FA;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZPeriodPickerWidgetX;

$model = $this->modelGet(CoreInput::class, 4);
/** @var ZView $this */

$items = $this->modelData();
$form = $this->activeBegin();
$this->modelSave($model);

// start|MuminovUmid|2020-10-09
$model->configs->rules = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];
// end|MuminovUmid|2020-10-09

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'jsonb_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZPeriodPickerWidgetX::class,
                    'options' => [
                        'config' => [

                        ],

                    ]
                ],
            ]

        ],

    ]
]);


$this->activeEnd();

