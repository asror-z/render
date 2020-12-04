<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\widgets\inputes\ZCheckboxListWidget;
use zetsoft\widgets\inputes\ZHCheckboxWidget;
use zetsoft\widgets\inputes\ZHHiddenInputWidget;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZTextareaWidget;

$model = $this->modelGet(CoreInput::class, 6);
/** @var ZView $this */
$model->configs->rulesAll=[
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
            'attributes' => [       // 2 column layout
                'string_4' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZHHiddenInputWidget::class,
                    'config' => [
                        
                    ]
                ],
            ]
        ]
    ]
]);

$this->activeEnd();

