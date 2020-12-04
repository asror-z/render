<?php


use zetsoft\models\core\CoreInput;
use zetsoft\system\kernels\ZView;
use zetsoft\widgets\former\ZFormWidget;
use kartik\builder\Form;
use zetsoft\system\Az;
use zetsoft\widgets\inputes\ZKSortableInputWidget;
$model = $this->modelGet(CoreInput::class, 7);
/** @var ZView $this */

$items = Az::$app->forms->modelz->data();
$form = $this->activeBegin();
$this->modelSave($model);

$model->configs->rulesAll = [
    [validatorEmail],
];



echo ZFormWidget::widget([
    'model' => $model,
    'form' => $form,
    'rows' => [
        [
            'attributes' => [       // 2 column layout
                'string_3' => [
                    'type' => Form::INPUT_WIDGET,
                    'widgetClass' => ZKSortableInputWidget::class,
                    'options'=>[
                        'data'=>$items
                    ]
                ],

            ]
        ],


    ]
]);

$this->activeEnd();

