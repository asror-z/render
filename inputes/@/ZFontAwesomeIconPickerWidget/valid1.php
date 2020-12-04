<?php


use kartik\builder\Form;
use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use zetsoft\widgets\inputes\ZFontAwesomeIconPickerWidget;

$model = $this->modelGet(\zetsoft\models\core\CoreInput::class, 1);
/** @var ZView $this */
$model->configs->rulesAll = [
    ['zetsoft\\system\\validate\\ZRequiredValidator']
];

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [
                'string_2' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZFontAwesomeIconPickerWidget::class,
                    'options' => [
                        'config' => [
                            'type' => ZFontAwesomeIconPickerWidget::type['asComponent'],
                            'hasIcon' => true
                        ],
                    ]
                ], 
            ]

        ],


    ]
]);

$this->activeEnd();

